<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model(array('Kategori_model','Identitas_web_model'));
        $this->load->model('Log_aktivitas_model');
        $this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url', 'html'));
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kategori/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kategori/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kategori/';
            $config['first_url'] = base_url() . 'kategori/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kategori_model->total_rows($q);
        $kategori = $this->Kategori_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);
            
        $this->data['kategori_data'] = $kategori;
        $this->data['q'] = $q;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['total_rows'] = $config['total_rows'];
        $this->data['start'] = $start;
		
        $this->data['usr'] = $this->ion_auth->user()->row();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['title'] = 'kategori';
		$this->get_Meta();
			
        $this->data['_view'] = 'kategori/kategori_list';
        $this->_render_page('layouts/main', $this->data);
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
			
			$row = $this->Kategori_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['nama'] = $this->form_validation->set_value('nama',$row->nama);
				$this->data['status'] = $this->form_validation->set_value('status',$row->status);
	    
				$this->data['title'] = 'kategori';
				$this->get_Meta();
				$this->data['_view'] = 'kategori/kategori_read';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('kategori'));
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
			$this->data['action'] = site_url('kategori/create_action');
		    $this->data['id'] = array(
				'name'			=> 'id',
				'type'			=> 'hidden',
				'value'			=> $this->form_validation->set_value('id'),
				'class'			=> 'form-control',
			);
		    $this->data['nama'] = array(
				'name'			=> 'nama',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('nama'),
				'class'			=> 'form-control',
			);
		    $this->data['status'] = array(
				'name'			=> 'status',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('status'),
				'class'			=> 'form-control',
			);
	
			$this->data['title'] = 'kategori';
			$this->get_Meta();
			$this->data['_view'] = 'kategori/kategori_form';
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
		'nama' 			=> $this->input->post('nama',TRUE),
		'status' 			=> $this->input->post('status',TRUE),
	    );

            $this->Kategori_model->insert($data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama ." telah menambah data pada kategori";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect(site_url('kategori'),'refresh');
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
			
			$row = $this->Kategori_model->get_by_id($id);

			if ($row) {
				$this->data['button']		= 'Ubah';
				$this->data['action']		= site_url('kategori/update_action');
			    $this->data['id'] = array(
					'name'			=> 'id',
					'type'			=> 'hidden',
					'value'			=> $this->form_validation->set_value('id', $row->id),
					'class'			=> 'form-control',
				);
			    $this->data['nama'] = array(
					'name'			=> 'nama',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('nama', $row->nama),
					'class'			=> 'form-control',
				);
			    $this->data['status'] = array(
					'name'			=> 'status',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('status', $row->status),
					'class'			=> 'form-control',
				);
	   
				$this->data['title'] = 'kategori';
				$this->get_Meta();
				$this->data['_view'] = 'kategori/kategori_form';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('kategori'));
			}
		}
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
			'nama' 					=> $this->input->post('nama',TRUE),
			'status' 					=> $this->input->post('status',TRUE),
	    );

            $this->Kategori_model->update($this->input->post('id', TRUE), $data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama . " telah mengubah data pada kategori";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect(site_url('kategori'),'refresh');
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kategori_model->get_by_id($id);

        if ($row) {
            $this->Kategori_model->delete($id);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah menghapus data pada kategori";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('kategori'),'refresh');
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('kategori'),'refresh');
        }
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
	/*
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
	*/
	
    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kategori.xls";
        $judul = "kategori";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");

	foreach ($this->Kategori_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kategori.doc");

        $data = array(
            'kategori_data' => $this->Kategori_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kategori/kategori_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'kategori_data' => $this->Kategori_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('kategori/kategori_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('kategori.pdf', 'D'); 
    }

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */
