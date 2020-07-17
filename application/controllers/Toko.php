<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->model(array('Toko_model','Identitas_web_model'));
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
            $config['base_url'] = base_url() . 'toko/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'toko/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'toko/';
            $config['first_url'] = base_url() . 'toko/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Toko_model->total_rows($q);
        $toko = $this->Toko_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);
            
        $this->data['toko_data'] = $toko;
        $this->data['q'] = $q;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['total_rows'] = $config['total_rows'];
        $this->data['start'] = $start;
		
		$this->data['user'] = $this->ion_auth->user()->row();
        $this->data['usr'] = $this->ion_auth->user()->row();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['title'] = 'toko';
		$this->get_Meta();
			
        $this->data['_view'] = 'toko/toko_list';
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
			
			$row = $this->Toko_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['kodetoko'] = $this->form_validation->set_value('kodetoko',$row->kodetoko);
				$this->data['namatoko'] = $this->form_validation->set_value('namatoko',$row->namatoko);
				$this->data['nama'] = $this->form_validation->set_value('nama',$row->nama);
				$this->data['nik'] = $this->form_validation->set_value('nik',$row->nik);
				$this->data['jabatan'] = $this->form_validation->set_value('jabatan',$row->jabatan);
	    
				$this->data['title'] = 'toko';
				$this->get_Meta();
				$this->data['_view'] = 'toko/toko_print';
				$this->_render_page('layouts/print',$this->data);
			} else {
				$this->data['message'] = 'Data tidak ditemukan';
				redirect(site_url('toko'));
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
			
			$row = $this->Toko_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['kodetoko'] = $this->form_validation->set_value('kodetoko',$row->kodetoko);
				$this->data['namatoko'] = $this->form_validation->set_value('namatoko',$row->namatoko);
				$this->data['nama'] = $this->form_validation->set_value('nama',$row->nama);
				$this->data['nik'] = $this->form_validation->set_value('nik',$row->nik);
				$this->data['jabatan'] = $this->form_validation->set_value('jabatan',$row->jabatan);
	    
				$this->data['title'] = 'toko';
				$this->get_Meta();
				$this->data['_view'] = 'toko/toko_read';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->data['message'] = 'Data tidak ditemukan';
				redirect(site_url('toko'));
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
			$this->data['action'] = site_url('toko/create_action');
		    $this->data['id'] = array(
				'name'			=> 'id',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('id'),
				'class'			=> 'form-control',
			);
		    $this->data['kodetoko'] = array(
				'name'			=> 'kodetoko',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('kodetoko'),
				'class'			=> 'form-control',
			);
		    $this->data['namatoko'] = array(
				'name'			=> 'namatoko',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('namatoko'),
				'class'			=> 'form-control',
			);
		    $this->data['nama'] = array(
				'name'			=> 'nama',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('nama'),
				'class'			=> 'form-control',
			);
		    $this->data['nik'] = array(
				'name'			=> 'nik',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('nik'),
				'class'			=> 'form-control',
			);
		    $this->data['jabatan'] = array(
				'name'			=> 'jabatan',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('jabatan'),
				'class'			=> 'form-control',
			);
	
			$this->data['title'] = 'toko';
			$this->get_Meta();
			$this->data['_view'] = 'toko/toko_form';
			$this->_render_page('layouts/main',$this->data);
		}
    }
    
    public function create_action() 
    {
		//fungsi untuk aksi menambah data ke database
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kodetoko' 			=> $this->input->post('kodetoko',TRUE),
		'namatoko' 			=> $this->input->post('namatoko',TRUE),
		'nama' 			=> $this->input->post('nama',TRUE),
		'nik' 			=> $this->input->post('nik',TRUE),
		'jabatan' 			=> $this->input->post('jabatan',TRUE),
	    );

			$this->Toko_model->insert($data);
			$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama ." telah menambah data pada toko";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect(site_url('toko'),'refresh');
        }
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
			
			$row = $this->Toko_model->get_by_id($id);

			if ($row) {
				$this->data['button']		= 'Ubah';
				$this->data['action']		= site_url('toko/update_action');
			    $this->data['id'] = array(
					'name'			=> 'id',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('id', $row->id),
					'class'			=> 'form-control',
				);
			    $this->data['kodetoko'] = array(
					'name'			=> 'kodetoko',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('kodetoko', $row->kodetoko),
					'class'			=> 'form-control',
				);
			    $this->data['namatoko'] = array(
					'name'			=> 'namatoko',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('namatoko', $row->namatoko),
					'class'			=> 'form-control',
				);
			    $this->data['nama'] = array(
					'name'			=> 'nama',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('nama', $row->nama),
					'class'			=> 'form-control',
				);
			    $this->data['nik'] = array(
					'name'			=> 'nik',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('nik', $row->nik),
					'class'			=> 'form-control',
				);
			    $this->data['jabatan'] = array(
					'name'			=> 'jabatan',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('jabatan', $row->jabatan),
					'class'			=> 'form-control',
				);
	   
				$this->data['title'] = 'toko';
				$this->get_Meta();
				$this->data['_view'] = 'toko/toko_form';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('toko'),'refresh');
			}
		}
    }
    
    public function update_action() 
    {
		//fungsi untuk aksi merubah isi data pada database
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
			'kodetoko' 					=> $this->input->post('kodetoko',TRUE),
			'namatoko' 					=> $this->input->post('namatoko',TRUE),
			'nama' 					=> $this->input->post('nama',TRUE),
			'nik' 					=> $this->input->post('nik',TRUE),
			'jabatan' 					=> $this->input->post('jabatan',TRUE),
	    );

			$this->Toko_model->update($this->input->post('id', TRUE), $data);
			$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama . " telah mengubah data pada toko";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect(site_url('toko'),'refresh');
        }
    }
    
    public function delete($id) 
    {
		//fungsi untuk menghapus isi data pada database
        $row = $this->Toko_model->get_by_id($id);

        if ($row) {
			$this->Toko_model->delete($id);
			$temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah menghapus data pada toko";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('toko'),'refresh');
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('toko'),'refresh');
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

		function upload_foto(){
			$config['upload_path']          = './assets/foto_profil';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf|zip|rar|doc|docx|xls|xlsx';
			// $config['max_size']             = 1000;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			$this->upload->do_upload('images');
			return $this->upload->data();
		}
	*/
    public function _rules() 
    {
		//fungsi untuk menetapkan rules untuk setiap field
	$this->form_validation->set_rules('kodetoko', 'kodetoko', 'trim|required');
	$this->form_validation->set_rules('namatoko', 'namatoko', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

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
        $namaFile = "toko.xls";
        $judul = "toko";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kodetoko");
	xlsWriteLabel($tablehead, $kolomhead++, "Namatoko");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Nik");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");

	foreach ($this->Toko_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kodetoko);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namatoko);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteNumber($tablebody, $kolombody++, $data->nik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan);

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
        header("Content-Disposition: attachment;Filename=toko.doc");

        $data = array(
            'toko_data' => $this->Toko_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('toko/toko_doc',$data);
    }

}

/* End of file Toko.php */
/* Location: ./application/controllers/Toko.php */
