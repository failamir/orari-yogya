<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model(array('Landing_model','Identitas_web_model'));
        $this->load->model('Log_aktivitas_model');
        $this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url', 'html'));
    }

    public function index()
    {
        $row = $this->Landing_model->get_by_id(1);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['nama_perusahaan'] = $this->form_validation->set_value('nama_perusahaan',$row->nama_perusahaan);
				$this->data['deskripsi'] = $this->form_validation->set_value('deskripsi',$row->deskripsi);
				$this->data['tentang'] = $this->form_validation->set_value('tentang',$row->tentang);
				$this->data['visi'] = $this->form_validation->set_value('visi',$row->visi);
				$this->data['misi'] = $this->form_validation->set_value('misi',$row->misi);
				$this->data['juknsi'] = $this->form_validation->set_value('juknsi',$row->juknsi);
				$this->data['izin'] = $this->form_validation->set_value('izin',$row->izin);
				$this->data['alamat'] = $this->form_validation->set_value('alamat',$row->alamat);
				$this->data['email'] = $this->form_validation->set_value('email',$row->email);
				$this->data['telpon'] = $this->form_validation->set_value('telpon',$row->telpon);
				$this->data['img_about'] = $this->form_validation->set_value('img_about',$row->img_about);
				$this->data['link_video'] = $this->form_validation->set_value('link_video',$row->link_video);
				}

			$this->data['user'] = $this->ion_auth->user()->row();
            $this->data['usr'] = $this->ion_auth->user()->row();
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['title'] = 'landing';
			$this->get_Meta();
			
			$this->data['_view']='landing/landing_list';
			$this->_render_page('layouts/main',$this->data);
    }

    public function read($id) 
    {
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('Anda tidak punya akses di halaman ini');
		}
		else
		{
			$this->data['usr'] = $this->ion_auth->user()->row();
			
			$row = $this->Landing_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['nama_perusahaan'] = $this->form_validation->set_value('nama_perusahaan',$row->nama_perusahaan);
				$this->data['deskripsi'] = $this->form_validation->set_value('deskripsi',$row->deskripsi);
				$this->data['tentang'] = $this->form_validation->set_value('tentang',$row->tentang);
				$this->data['visi'] = $this->form_validation->set_value('visi',$row->visi);
				$this->data['misi'] = $this->form_validation->set_value('misi',$row->misi);
				$this->data['juknsi'] = $this->form_validation->set_value('juknsi',$row->juknsi);
				$this->data['izin'] = $this->form_validation->set_value('izin',$row->izin);
				$this->data['alamat'] = $this->form_validation->set_value('alamat',$row->alamat);
				$this->data['email'] = $this->form_validation->set_value('email',$row->email);
				$this->data['telpon'] = $this->form_validation->set_value('telpon',$row->telpon);
				$this->data['img_about'] = $this->form_validation->set_value('img_about',$row->img_about);
				$this->data['link_video'] = $this->form_validation->set_value('link_video',$row->link_video);
	    
				$this->data['title'] = 'landing';
				$this->get_Meta();
				$this->data['_view'] = 'landing/landing_read';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('landing'));
			}
		}
    }

    public function create() 
    {
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('Anda tidak punya akses di halaman ini');
		}
		else
		{
			$this->data['usr'] = $this->ion_auth->user()->row();
			
			$this->data['button'] = 'Tambah';
			$this->data['action'] = site_url('landing/create_action');
		    $this->data['id'] = array(
				'name'			=> 'id',
				'type'			=> 'hidden',
				'value'			=> $this->form_validation->set_value('id'),
				'class'			=> 'form-control',
			);
		    $this->data['nama_perusahaan'] = array(
				'name'			=> 'nama_perusahaan',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('nama_perusahaan'),
				'class'			=> 'form-control',
			);
		    $this->data['deskripsi'] = array(
				'name'			=> 'deskripsi',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('deskripsi'),
				'class'			=> 'form-control',
			);
		    $this->data['tentang'] = array(
				'name'			=> 'tentang',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('tentang'),
				'class'			=> 'form-control',
			);
		    $this->data['visi'] = array(
				'name'			=> 'visi',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('visi'),
				'class'			=> 'form-control',
			);
		    $this->data['misi'] = array(
				'name'			=> 'misi',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('misi'),
				'class'			=> 'form-control',
			);
		    $this->data['juknsi'] = array(
				'name'			=> 'juknsi',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('juknsi'),
				'class'			=> 'form-control',
			);
		    $this->data['izin'] = array(
				'name'			=> 'izin',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('izin'),
				'class'			=> 'form-control',
			);
		    $this->data['alamat'] = array(
				'name'			=> 'alamat',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('alamat'),
				'class'			=> 'form-control',
			);
		    $this->data['email'] = array(
				'name'			=> 'email',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('email'),
				'class'			=> 'form-control',
			);
		    $this->data['telpon'] = array(
				'name'			=> 'telpon',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('telpon'),
				'class'			=> 'form-control',
			);
	
			$this->data['title'] = 'landing';
			$this->get_Meta();
			$this->data['_view'] = 'landing/landing_form';
			$this->_render_page('layouts/main',$this->data);
		}
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_perusahaan' 			=> $this->input->post('nama_perusahaan',TRUE),
		'deskripsi' 			=> $this->input->post('deskripsi',TRUE),
		'tentang' 			=> $this->input->post('tentang',TRUE),
		'visi' 			=> $this->input->post('visi',TRUE),
		'misi' 			=> $this->input->post('misi',TRUE),
		'juknsi' 			=> $this->input->post('juknsi',TRUE),
		'izin' 			=> $this->input->post('izin',TRUE),
		'alamat' 			=> $this->input->post('alamat',TRUE),
		'email' 			=> $this->input->post('email',TRUE),
		'telpon' 			=> $this->input->post('telpon',TRUE),
	    );

            $this->Landing_model->insert($data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama ." telah menambah data pada landing";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect(site_url('landing'),'refresh');
        }
    }
    
    public function update($id) 
    {
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('Anda tidak punya akses di halaman ini');
		}
		else
		{
			$this->data['usr'] = $this->ion_auth->user()->row();
			
			$row = $this->Landing_model->get_by_id($id);

			if ($row) {
				$this->data['button']		= 'Ubah';
				$this->data['action']		= site_url('landing/update_action');
			    $this->data['id'] = array(
					'name'			=> 'id',
					'type'			=> 'hidden',
					'value'			=> $this->form_validation->set_value('id', $row->id),
					'class'			=> 'form-control',
				);
			    $this->data['nama_perusahaan'] = array(
					'name'			=> 'nama_perusahaan',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('nama_perusahaan', $row->nama_perusahaan),
					'class'			=> 'form-control',
				);
			    $this->data['deskripsi'] = array(
					'name'			=> 'deskripsi',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('deskripsi', $row->deskripsi),
					'class'			=> 'form-control',
				);
			    $this->data['tentang'] = array(
					'name'			=> 'tentang',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('tentang', $row->tentang),
					'class'			=> 'form-control',
				);
			    $this->data['visi'] = array(
					'name'			=> 'visi',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('visi', $row->visi),
					'class'			=> 'form-control',
				);
			    $this->data['misi'] = array(
					'name'			=> 'misi',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('misi', $row->misi),
					'class'			=> 'form-control',
				);
			    $this->data['juknsi'] = array(
					'name'			=> 'juknsi',
					'type'			=> 'file',
					'value'			=> $this->form_validation->set_value('juknsi', $row->juknsi),
					'class'			=> 'form-control',
				);
			    $this->data['izin'] = array(
					'name'			=> 'izin',
					'type'			=> 'file',
					'value'			=> $this->form_validation->set_value('izin', $row->izin),
					'class'			=> 'form-control',
				);
			    $this->data['alamat'] = array(
					'name'			=> 'alamat',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('alamat', $row->alamat),
					'class'			=> 'form-control',
				);
			    $this->data['email'] = array(
					'name'			=> 'email',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('email', $row->email),
					'class'			=> 'form-control',
				);
			    $this->data['telpon'] = array(
					'name'			=> 'telpon',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('telpon', $row->telpon),
					'class'			=> 'form-control',
				);
				$this->data['img_about'] = array(
					'name'			=> 'img_about',
					'type'			=> 'file',
					'value'			=> $this->form_validation->set_value('telpon', $row->telpon),
					'class'			=> 'form-control',
				);
				$this->data['link_video'] = array(
					'name'			=> 'link_video',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('telpon', $row->telpon),
					'class'			=> 'form-control',
				);
	   
				$this->data['title'] = 'landing';
				$this->get_Meta();
				$this->data['_view'] = 'landing/landing_form';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('landing'));
			}
		}
    }
    
    public function update_action() 
    {
        // $this->_rules();

        $juknsi = 	$this->upload_juknsi();
		$izin 	= 	$this->upload_izin();
		$img_about 	= 	$this->upload_img_about();

		$data = array(
			'nama_perusahaan' 					=> $this->input->post('nama_perusahaan',TRUE),
			'deskripsi' 					=> $this->input->post('deskripsi',TRUE),
			'tentang' 					=> $this->input->post('tentang',TRUE),
			'visi' 					=> $this->input->post('visi',TRUE),
			'misi' 					=> $this->input->post('misi',TRUE),
			'alamat' 					=> $this->input->post('alamat',TRUE),
			'email' 					=> $this->input->post('email',TRUE),
			'telpon' 					=> $this->input->post('telpon',TRUE),
			'link_video' 					=> $this->input->post('link_video',TRUE),
		);
		if($izin['file_name'] !=''){
			$data += array(
				'izin' 						=> $izin['file_name'],
			);
		}
		if($juknsi['file_name'] !=''){
			$data += array(
				'juknsi' 					=> $juknsi['file_name'],
			);
		}
		if($img_about['file_name'] !=''){
            $data += array(
				'img_about'		=> $img_about['file_name'],
	    	);
		}
			$this->Landing_model->update($this->input->post('id',TRUE), $data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama . " telah mengubah data pada landing";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
			redirect(site_url('landing'),'refresh');
			// var_dump($data);
        // }
    }
    
    public function delete($id) 
    {
        $row = $this->Landing_model->get_by_id($id);

        if ($row) {
            $this->Landing_model->delete($id);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah menghapus data pada landing";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('landing'),'refresh');
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('landing'),'refresh');
        }
    }
	
	function upload_juknsi(){
		$config['upload_path']          = './assets/file';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->upload->do_upload('juknsi');
		return $this->upload->data();
	}

	function upload_izin(){
		$config['upload_path']          = './assets/file';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->upload->do_upload('izin');
		return $this->upload->data();
	}
	
	function upload_img_about(){
		$config['upload_path']          = './assets/file';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->upload->do_upload('img_about');
		return $this->upload->data();
	}

	public function get_Meta(){
		
		$rows = $this->Identitas_web_model->get_all();
		foreach ($rows as $row) {			
			$this->data['web_name'] 		= $this->form_validation->set_value('nama_web',$row->nama_web);
			$this->data['meta_description']= $this->form_validation->set_value('meta_deskripsi',$row->meta_deskripsi);
			$this->data['meta_keywords'] 	= $this->form_validation->set_value('meta_keyword',$row->meta_keyword);
			$this->data['copyrights'] 		= $this->form_validation->set_value('copyright',$row->copyright);
			$this->data['logos'] 		= $this->form_validation->set_value('logo',$row->logo);
	    }
	}
	
	public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
    }
    
    /*
    public function edit_foto_action()
	{
	$foto = $this->upload_foto();
		if($foto['file_name']==''){
			$data = array(
		'foto'      => 'default.jpg');
		}else{
			$data = array(
			'foto'        =>$foto['file_name'],);
			// ubah foto profil yang aktif
			// $this->session->set_userdata('foto',$foto['file_name']);
		}
		$this->Users_model->update($this->input->post('id', TRUE), $data);
		$this->session->set_flashdata('message', 'Update Foto profil Success');
		// var_dump($this->input->post('id'));
		// var_dump($data);
		redirect(site_url());
	}
	*/
	
		function upload_foto(){
			$config['upload_path']          = './assets/foto_';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
			$config['max_size']             = 100000;
			$config['max_width']            = 4024;
			$config['max_height']           = 3368;
			$this->load->library('upload', $config);
			$this->upload->do_upload('images');
			return $this->upload->data();
		}

		function upload_file(){
			$config['upload_path']          = './assets/file';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
			$config['max_size']             = 100000;
			// $config['max_width']            = 4024;
			// $config['max_height']           = 3368;
			$this->load->library('upload', $config);
			$this->upload->do_upload('file');
			return $this->upload->data();
		}
	
	
    public function _rules() 
    {
	$this->form_validation->set_rules('nama_perusahaan', 'nama perusahaan', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('tentang', 'tentang', 'trim|required');
	$this->form_validation->set_rules('visi', 'visi', 'trim|required');
	$this->form_validation->set_rules('misi', 'misi', 'trim|required');
	$this->form_validation->set_rules('juknsi', 'juknsi', 'trim|required');
	$this->form_validation->set_rules('izin', 'izin', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('telpon', 'telpon', 'trim|required');
	$this->form_validation->set_rules('img_about', 'img_about', 'trim|');
	$this->form_validation->set_rules('link_video', 'link_video', 'trim|');
	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "landing.xls";
        $judul = "landing";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Perusahaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Tentang");
	xlsWriteLabel($tablehead, $kolomhead++, "Visi");
	xlsWriteLabel($tablehead, $kolomhead++, "Misi");
	xlsWriteLabel($tablehead, $kolomhead++, "Juknsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Izin");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Telpon");

	foreach ($this->Landing_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_perusahaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tentang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->visi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->misi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->juknsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->izin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->telpon);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=landing.doc");

        $data = array(
            'landing_data' => $this->Landing_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('landing/landing_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'landing_data' => $this->Landing_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('landing/landing_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('landing.pdf', 'D'); 
    }

}

/* End of file Landing.php */
/* Location: ./application/controllers/Landing.php */
