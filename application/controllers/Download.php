<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->model(array('Download_model','Identitas_web_model'));
		$this->load->model('Log_aktivitas_model');
        $this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url', 'html'));
    }

    public function index()
    {
        //fungsi untuk index (default dari setiap controller)
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'download/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'download/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'download/';
            $config['first_url'] = base_url() . 'download/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Download_model->total_rows($q);
        $download = $this->Download_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);
            
        $this->data['download_data'] = $download;
        $this->data['q'] = $q;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['total_rows'] = $config['total_rows'];
        $this->data['start'] = $start;
		
		$this->data['user'] = $this->ion_auth->user()->row();
        $this->data['usr'] = $this->ion_auth->user()->row();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['title'] = 'download';
		$this->get_Meta();
			
        $this->data['_view'] = 'download/download_list';
        $this->_render_page('layouts/main', $this->data);
    }

    public function printing($id) 
    {
		//fungsi untuk printing halaman berisi data
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
			$this->data['user'] = $this->ion_auth->user()->row();
            $this->data['usr'] = $this->ion_auth->user()->row();
			
			$row = $this->Download_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['callsign'] = $this->form_validation->set_value('callsign',$row->callsign);
				$this->data['checkin'] = $this->form_validation->set_value('checkin',$row->checkin);
				$this->data['kategori'] = $this->form_validation->set_value('kategori',$row->kategori);
				$this->data['counter'] = $this->form_validation->set_value('counter',$row->counter);
				$this->data['file'] = $this->form_validation->set_value('file',$row->file);
				$this->data['status'] = $this->form_validation->set_value('status',$row->status);
	    
				$this->data['title'] = 'download';
				$this->get_Meta();
				$this->data['_view'] = 'download/download_print';
				$this->_render_page('layouts/print',$this->data);
			} else {
				$this->data['message'] = 'Data tidak ditemukan';
				redirect(site_url('download'));
			}
		}
    }

    public function read($id) 
    {
		//fungsi untuk melihat data
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
			$this->data['user'] = $this->ion_auth->user()->row();
            $this->data['usr'] = $this->ion_auth->user()->row();
			
			$row = $this->Download_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['callsign'] = $this->form_validation->set_value('callsign',$row->callsign);
				$this->data['checkin'] = $this->form_validation->set_value('checkin',$row->checkin);
				$this->data['kategori'] = $this->form_validation->set_value('kategori',$row->kategori);
				$this->data['counter'] = $this->form_validation->set_value('counter',$row->counter);
				$this->data['file'] = $this->form_validation->set_value('file',$row->file);
				$this->data['status'] = $this->form_validation->set_value('status',$row->status);
	    
				$this->data['title'] = 'download';
				$this->get_Meta();
				$this->data['_view'] = 'download/download_read';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->data['message'] = 'Data tidak ditemukan';
				redirect(site_url('download'));
			}
		}
    }

    public function create() 
    {
		//fungsi untuk menuju halaman create (tambah data)
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
			$this->data['user'] = $this->ion_auth->user()->row();
            $this->data['usr'] = $this->ion_auth->user()->row();
			
			$this->data['button'] = 'Tambah';
			$this->data['action'] = site_url('download/create_action');
		    $this->data['id'] = array(
				'name'			=> 'id',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('id'),
				'class'			=> 'form-control',
			);
		    $this->data['callsign'] = array(
				'name'			=> 'callsign',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('callsign'),
				'class'			=> 'form-control',
			);
		    $this->data['checkin'] = array(
				'name'			=> 'checkin',
				'type'			=> 'date',
				'value'			=> $this->form_validation->set_value('checkin'),
				'class'			=> 'form-control',
			);
		    $this->data['kategori'] = array(
				'name'			=> 'kategori',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('kategori'),
				'class'			=> 'form-control',
			);
		    $this->data['counter'] = array(
				'name'			=> 'counter',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('counter'),
				'class'			=> 'form-control',
				'readonly'		=> 'readonly',
			);
		    $this->data['file'] = array(
				'name'			=> 'file',
				'type'			=> 'file',
				'value'			=> $this->form_validation->set_value('file'),
				'class'			=> 'form-control',
			);
		    $this->data['status'] = array(
				'name'			=> 'status',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('status'),
				'class'			=> 'form-control',
			);
	
			$this->data['title'] = 'download';
			$this->get_Meta();
			$this->data['_view'] = 'download/download_form';
			$this->_render_page('layouts/main',$this->data);
		}
    }
    
    public function create_action() 
    {
		//fungsi untuk aksi menambah data ke database
        // $this->_rules();

		$file = $this->upload_file();
		if($file['file_name']==''){
			$data = array(
		'file'      => 'default.pdf',
		'callsign' 			=> $this->input->post('callsign',TRUE),
		'checkin' 			=> $this->input->post('checkin',TRUE),
		'kategori' 			=> $this->input->post('kategori',TRUE),
		'counter' 			=> '1',
		'status' 			=> $this->input->post('status',TRUE),
	);
		}else{
			$data = array(
		'callsign' 			=> $this->input->post('callsign',TRUE),
		'checkin' 			=> $this->input->post('checkin',TRUE),
		'kategori' 			=> $this->input->post('kategori',TRUE),
		'counter' 			=> '1',
		'file'        		=> $file['file_name'],
		'status' 			=> $this->input->post('status',TRUE),
			);
	}
			$this->Download_model->insert($data);
			$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama ." telah menambah data pada download";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
			redirect(site_url('download'),'refresh');
			// var_dump($data);
        // }
    }
    
    public function update($id) 
    {
		//fungsi untuk menuju halaman edit data
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
			$this->data['user'] = $this->ion_auth->user()->row();
            $this->data['usr'] = $this->ion_auth->user()->row();
			
			$row = $this->Download_model->get_by_id($id);

			if ($row) {
				$this->data['button']		= 'Ubah';
				$this->data['action']		= site_url('download/update_action');
			    $this->data['id'] = array(
					'name'			=> 'id',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('id', $row->id),
					'class'			=> 'form-control',
				);
			    $this->data['callsign'] = array(
					'name'			=> 'callsign',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('callsign', $row->callsign),
					'class'			=> 'form-control',
				);
			    $this->data['checkin'] = array(
					'name'			=> 'checkin',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('checkin', $row->checkin),
					'class'			=> 'form-control',
				);
			    $this->data['kategori'] = array(
					'name'			=> 'kategori',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('kategori', $row->kategori),
					'class'			=> 'form-control',
				);
			    $this->data['counter'] = array(
					'name'			=> 'counter',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('counter', $row->counter),
					'class'			=> 'form-control',
				);
			    $this->data['file'] = array(
					'name'			=> 'file',
					'type'			=> 'file',
					'value'			=> $this->form_validation->set_value('file', $row->file),
					'class'			=> 'form-control',
				);
			    $this->data['status'] = array(
					'name'			=> 'status',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('status', $row->status),
					'class'			=> 'form-control',
				);
	   
				$this->data['title'] = 'download';
				$this->get_Meta();
				$this->data['_view'] = 'download/download_form';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('download'),'refresh');
			}
		}
    }
    
    public function update_action() 
    {
		//fungsi untuk aksi merubah isi data pada database
        // $this->_rules();

		$file = $this->upload_file();
		if($file['file_name']==''){
			$data = array(
		'file'      => 'default.pdf',
		'callsign' 			=> $this->input->post('callsign',TRUE),
		'checkin' 			=> $this->input->post('checkin',TRUE),
		'kategori' 			=> $this->input->post('kategori',TRUE),
		'counter' 			=> $this->input->post('counter',TRUE),
		'status' 			=> $this->input->post('status',TRUE),
	);
		}else{
			$data = array(
		'callsign' 			=> $this->input->post('callsign',TRUE),
		'checkin' 			=> $this->input->post('checkin',TRUE),
		'kategori' 			=> $this->input->post('kategori',TRUE),
		'counter' 			=> $this->input->post('counter',TRUE),
		'file'        		=> $file['file_name'],
		'status' 			=> $this->input->post('status',TRUE),
			);
	}

			$this->Download_model->update($this->input->post('id', TRUE), $data);
			$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama . " telah mengubah data pada download";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect(site_url('download'),'refresh');
        
    }
	
	public function count($id,$file) 
    {
		//fungsi untuk aksi merubah isi data pada database
        // $this->_rules();
		$id_terbaru = $this->Download_model->get_by_id($id);
		// var_dump($id_terbaru);
		$idnya = $id_terbaru->counter + 1;
			$data = array(
		'counter' 			=> $idnya,
		);
			$this->Download_model->update($id, $data);
			redirect(base_url().'./assets/file/'.$file,'refresh');
			$zul = './assets/file/'.$file;
			var_dump($zul);
	
	}

	
    public function delete($id) 
    {
		//fungsi untuk menghapus isi data pada database
        $row = $this->Download_model->get_by_id($id);

        if ($row) {
			$this->Download_model->delete($id);
			$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah menghapus data pada download";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('download'),'refresh');
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('download'),'refresh');
        }
    }
	
	public function get_Meta(){
		//fungsi untuk mendapatkan data meta web
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
		//fungsi untuk merender view dan page menjadi satu halaman utuh
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
		function upload_file(){
			$config['upload_path']          = './assets/file';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
			// $config['max_size']             = 1000;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			$this->upload->do_upload('file');
			return $this->upload->data();
		}
	
    public function _rules() 
    {
		//fungsi untuk menetapkan rules untuk setiap field
	$this->form_validation->set_rules('callsign', 'callsign', 'trim|required');
	$this->form_validation->set_rules('checkin', 'checkin', 'trim|required');
	$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
	$this->form_validation->set_rules('counter', 'counter', 'trim|required');
	$this->form_validation->set_rules('file', 'file', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
		//fungsi untuk mencetak file excel
		$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah mengunduh data pada  format excel";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
        $this->load->helper('exportexcel');
        $namaFile = "download.xls";
        $judul = "download";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Callsign");
	xlsWriteLabel($tablehead, $kolomhead++, "Checkin");
	xlsWriteLabel($tablehead, $kolomhead++, "Kategori");
	xlsWriteLabel($tablehead, $kolomhead++, "Counter");
	xlsWriteLabel($tablehead, $kolomhead++, "File");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Download_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->callsign);
	    xlsWriteLabel($tablebody, $kolombody++, $data->checkin);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kategori);
	    xlsWriteNumber($tablebody, $kolombody++, $data->counter);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
		//fungsi untuk mencetak file word document
		$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
		$waktu = date('d-m-Y H:i:s');
		$aktivitas = $nama . " telah mengunduh data pada  format word";
		$data_log = array(
			'id_user' => $id,
			'aktivitas' => $aktivitas,
			'time' => $waktu, 
		);
		$this->Log_aktivitas_model->insert($data_log);
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=download.doc");

        $data = array(
            'download_data' => $this->Download_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('download/download_doc',$data);
    }

}

/* End of file Download.php */
/* Location: ./application/controllers/Download.php */
