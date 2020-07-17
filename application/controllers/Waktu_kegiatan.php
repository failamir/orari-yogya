<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Waktu_kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model(array('Waktu_kegiatan_model','Identitas_web_model'));
        $this->load->model('Log_aktivitas_model');
        $this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url', 'html'));
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'waktu_kegiatan/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'waktu_kegiatan/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'waktu_kegiatan/';
            $config['first_url'] = base_url() . 'waktu_kegiatan/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Waktu_kegiatan_model->total_rows($q);
        $waktu_kegiatan = $this->Waktu_kegiatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);
            
        $this->data['waktu_kegiatan_data'] = $waktu_kegiatan;
        $this->data['q'] = $q;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['total_rows'] = $config['total_rows'];
        $this->data['start'] = $start;
		
        $this->data['usr'] = $this->ion_auth->user()->row();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['title'] = 'waktu_kegiatan';
		$this->get_Meta();
			
        $this->data['_view'] = 'waktu_kegiatan/waktu_kegiatan_list';
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
			
			$row = $this->Waktu_kegiatan_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['id_tanggal'] = $this->form_validation->set_value('id_tanggal',$row->id_tanggal);
				$this->data['mulai'] = $this->form_validation->set_value('mulai',$row->mulai);
				$this->data['selesai'] = $this->form_validation->set_value('selesai',$row->selesai);
				$this->data['detail'] = $this->form_validation->set_value('detail',$row->detail);
	    
				$this->data['title'] = 'waktu_kegiatan';
				$this->get_Meta();
				$this->data['_view'] = 'waktu_kegiatan/waktu_kegiatan_read';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('waktu_kegiatan'));
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
			$this->data['action'] = site_url('waktu_kegiatan/create_action');
		    $this->data['id'] = array(
				'name'			=> 'id',
				'type'			=> 'hidden',
				'value'			=> $this->form_validation->set_value('id'),
				'class'			=> 'form-control',
			);
		    $this->data['id_tanggal'] = array(
				'name'			=> 'id_tanggal',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('id_tanggal'),
				'class'			=> 'form-control',
			);
		    $this->data['mulai'] = array(
				'name'			=> 'mulai',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('mulai'),
				'class'			=> 'form-control',
			);
		    $this->data['selesai'] = array(
				'name'			=> 'selesai',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('selesai'),
				'class'			=> 'form-control',
			);
		    $this->data['detail'] = array(
				'name'			=> 'detail',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('detail'),
				'class'			=> 'form-control',
			);
	
			$this->data['title'] = 'waktu_kegiatan';
			$this->get_Meta();
			$this->data['_view'] = 'waktu_kegiatan/waktu_kegiatan_form';
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
		'id_tanggal' 			=> $this->input->post('id_tanggal',TRUE),
		'mulai' 			=> $this->input->post('mulai',TRUE),
		'selesai' 			=> $this->input->post('selesai',TRUE),
		'detail' 			=> $this->input->post('detail',TRUE),
	    );

            $this->Waktu_kegiatan_model->insert($data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama ." telah menambah data pada waktu_kegiatan";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect(site_url('waktu_kegiatan'),'refresh');
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
			
			$row = $this->Waktu_kegiatan_model->get_by_id($id);

			if ($row) {
				$this->data['button']		= 'Ubah';
				$this->data['action']		= site_url('waktu_kegiatan/update_action');
			    $this->data['id'] = array(
					'name'			=> 'id',
					'type'			=> 'hidden',
					'value'			=> $this->form_validation->set_value('id', $row->id),
					'class'			=> 'form-control',
				);
			    $this->data['id_tanggal'] = array(
					'name'			=> 'id_tanggal',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('id_tanggal', $row->id_tanggal),
					'class'			=> 'form-control',
				);
			    $this->data['mulai'] = array(
					'name'			=> 'mulai',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('mulai', $row->mulai),
					'class'			=> 'form-control',
				);
			    $this->data['selesai'] = array(
					'name'			=> 'selesai',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('selesai', $row->selesai),
					'class'			=> 'form-control',
				);
			    $this->data['detail'] = array(
					'name'			=> 'detail',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('detail', $row->detail),
					'class'			=> 'form-control',
				);
	   
				$this->data['title'] = 'waktu_kegiatan';
				$this->get_Meta();
				$this->data['_view'] = 'waktu_kegiatan/waktu_kegiatan_form';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('waktu_kegiatan'));
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
			'id_tanggal' 					=> $this->input->post('id_tanggal',TRUE),
			'mulai' 					=> $this->input->post('mulai',TRUE),
			'selesai' 					=> $this->input->post('selesai',TRUE),
			'detail' 					=> $this->input->post('detail',TRUE),
	    );

            $this->Waktu_kegiatan_model->update($this->input->post('id', TRUE), $data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama . " telah mengubah data pada waktu_kegiatan";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect(site_url('waktu_kegiatan'),'refresh');
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Waktu_kegiatan_model->get_by_id($id);

        if ($row) {
            $this->Waktu_kegiatan_model->delete($id);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah menghapus data pada waktu_kegiatan";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('waktu_kegiatan'),'refresh');
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('waktu_kegiatan'),'refresh');
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
	$this->form_validation->set_rules('id_tanggal', 'id tanggal', 'trim|required');
	$this->form_validation->set_rules('mulai', 'mulai', 'trim|required');
	$this->form_validation->set_rules('selesai', 'selesai', 'trim|required');
	$this->form_validation->set_rules('detail', 'detail', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "waktu_kegiatan.xls";
        $judul = "waktu_kegiatan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Mulai");
	xlsWriteLabel($tablehead, $kolomhead++, "Selesai");
	xlsWriteLabel($tablehead, $kolomhead++, "Detail");

	foreach ($this->Waktu_kegiatan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->mulai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->selesai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->detail);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=waktu_kegiatan.doc");

        $data = array(
            'waktu_kegiatan_data' => $this->Waktu_kegiatan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('waktu_kegiatan/waktu_kegiatan_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'waktu_kegiatan_data' => $this->Waktu_kegiatan_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('waktu_kegiatan/waktu_kegiatan_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('waktu_kegiatan.pdf', 'D'); 
    }

}

/* End of file Waktu_kegiatan.php */
/* Location: ./application/controllers/Waktu_kegiatan.php */
