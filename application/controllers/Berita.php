<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model(array('Berita_model','Identitas_web_model'));
        $this->load->model('Log_aktivitas_model');
        $this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url', 'html'));
		$this->load->library('pagination');
    }
    
    public function Lihat_Berita()
    {
        
        $config['base_url'] = base_url('Berita/Lihat_berita'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 9;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		
		$this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
		$data['berita'] = $this->Berita_model->get_berita_list($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('berita',$data);
	}
	
	public function detail_berita($id) 
    {
			$row = $this->Berita_model->get_by_id($id);
			if ($row) {
				$data['id'] = $this->form_validation->set_value('id',$row->id);
				$data['judul'] = $this->form_validation->set_value('judul',$row->judul);
				$data['isi'] = $this->form_validation->set_value('isi',$row->isi);
				$data['date'] = $this->form_validation->set_value('date',$row->date);
				$data['gambar'] = $this->form_validation->set_value('gambar',$row->gambar);
				$this->load->view('detail_berita',$data);
			}
	}

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'berita/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'berita/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'berita/';
            $config['first_url'] = base_url() . 'berita/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->total_rows($q);
        $berita = $this->Berita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);
            
        $this->data['berita_data'] = $berita;
        $this->data['q'] = $q;
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['total_rows'] = $config['total_rows'];
        $this->data['start'] = $start;
		
        $this->data['usr'] = $this->ion_auth->user()->row();
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['title'] = 'berita';
		$this->get_Meta();
			
        $this->data['_view'] = 'berita/berita_list';
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
			
			$row = $this->Berita_model->get_by_id($id);
			if ($row) {
				$this->data['id'] = $this->form_validation->set_value('id',$row->id);
				$this->data['judul'] = $this->form_validation->set_value('judul',$row->judul);
				$this->data['isi'] = $this->form_validation->set_value('isi',$row->isi);
				$this->data['date'] = $this->form_validation->set_value('date',$row->date);
				$this->data['gambar'] = $this->form_validation->set_value('gambar',$row->gambar);
	    
				$this->data['title'] = 'berita';
				$this->get_Meta();
				$this->data['_view'] = 'berita/berita_read';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('berita'));
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
			$this->data['action'] = site_url('berita/create_action');
		    $this->data['id'] = array(
				'name'			=> 'id',
				'type'			=> 'hidden',
				'value'			=> $this->form_validation->set_value('id'),
				'class'			=> 'form-control',
			);
		    $this->data['judul'] = array(
				'name'			=> 'judul',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('judul'),
				'class'			=> 'form-control',
			);
		    $this->data['isi'] = array(
				'name'			=> 'isi',
				'type'			=> 'text',
				'value'			=> $this->form_validation->set_value('isi'),
				'class'			=> 'form-control',
			);
		    $this->data['date'] = array(
				'name'			=> 'date',
				'type'			=> 'date',
				'value'			=> $this->form_validation->set_value('date'),
				'class'			=> 'form-control',
			);
		    $this->data['gambar'] = array(
				'name'			=> 'gambar',
				'type'			=> 'file',
				'value'			=> $this->form_validation->set_value('gambar'),
				'class'			=> 'form-control',
			);
	
			$this->data['title'] = 'berita';
			$this->get_Meta();
			$this->data['_view'] = 'berita/berita_form';
			$this->_render_page('layouts/main',$this->data);
		}
    }
    
    public function create_action() 
    {
         // $this->_rules();
		$foto = $this->upload_foto();
// 		var_dump($foto);
		if($foto['file_name']==''){
			$data = array(
		'gambar'      => 'default.jpg',
		'judul' 			=> $this->input->post('judul',TRUE),
		'isi' 			=> $this->input->post('isi',TRUE),
		'date' 			=> $this->input->post('date',TRUE),);
		}else{
			$data = array(
			'gambar'        =>$foto['file_name'],
			'judul' 			=> $this->input->post('judul',TRUE),
		'isi' 			=> $this->input->post('isi',TRUE),
		'date' 			=> $this->input->post('date',TRUE),
		);
			// ubah foto profil yang aktif
			// $this->session->set_userdata('foto',$foto['file_name']);
		}

        // if ($this->form_validation->run() == FALSE) {
        //     $this->create();
        // } else {
        

			$this->Berita_model->insert($data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama ." telah menambah data pada berita";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect(site_url('berita'),'refresh');
            // var_dump($data);
        // }
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
			
			$row = $this->Berita_model->get_by_id($id);

			if ($row) {
				$this->data['button']		= 'Ubah';
				$this->data['action']		= site_url('berita/update_action');
			    $this->data['id'] = array(
					'name'			=> 'id',
					'type'			=> 'hidden',
					'value'			=> $this->form_validation->set_value('id', $row->id),
					'class'			=> 'form-control',
				);
			    $this->data['judul'] = array(
					'name'			=> 'judul',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('judul', $row->judul),
					'class'			=> 'form-control',
				);
			    $this->data['isi'] = array(
					'name'			=> 'isi',
					'type'			=> 'text',
					'value'			=> $this->form_validation->set_value('isi', $row->isi),
					'class'			=> 'form-control',
				);
			    $this->data['date'] = array(
					'name'			=> 'date',
					'type'			=> 'date',
					'value'			=> $this->form_validation->set_value('date', $row->date),
					'class'			=> 'form-control',
				);
			    $this->data['gambar'] = array(
					'name'			=> 'gambar',
					'type'			=> 'file',
					'value'			=> $this->form_validation->set_value('gambar', $row->gambar),
					'class'			=> 'form-control',
				);
	   
				$this->data['title'] = 'berita';
				$this->get_Meta();
				$this->data['_view'] = 'berita/berita_form';
				$this->_render_page('layouts/main',$this->data);
			} else {
				$this->session->set_flashdata('message', 'Data tidak ditemukan');
				redirect(site_url('berita'));
			}
		}
    }
    
    public function update_action() 
    {
        // $this->_rules();

		$foto = $this->upload_foto();
		// var_dump($foto);
		if($foto['file_name']==''){
			$data = array(
		// 'gambar'      => 'default.jpg',
		'judul' 			=> $this->input->post('judul',TRUE),
		'isi' 			=> $this->input->post('isi',TRUE),
		'date' 			=> $this->input->post('date',TRUE),);
		}else{
			$data = array(
			'gambar'        =>$foto['file_name'],
			'judul' 			=> $this->input->post('judul',TRUE),
		'isi' 			=> $this->input->post('isi',TRUE),
		'date' 			=> $this->input->post('date',TRUE),
		);
		}
			$this->Berita_model->update($this->input->post('id', TRUE), $data);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$aktivitas = $nama . " telah mengubah data pada berita";
			$waktu = date('d-m-Y H:i:s');
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect(site_url('berita'),'refresh');
        // }
    }
    
    public function delete($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $this->Berita_model->delete($id);
            $temp = $this->ion_auth->user()->row();
			$id = $temp->id;
			$nama = $temp->first_name;
			$waktu = date('d-m-Y H:i:s');
			$aktivitas = $nama ." telah menghapus data pada berita";
			$data_log = array(
				'id_user' => $id,
				'aktivitas' => $aktivitas,
				'time' => $waktu, 
			);
			$this->Log_aktivitas_model->insert($data_log);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect(site_url('berita'),'refresh');
        } else {
            $this->session->set_flashdata('message', 'Data tidak ditemukan');
            redirect(site_url('berita'),'refresh');
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
			$config['upload_path']          = './assets/foto_berita';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|webp|tiff|pdf';
			$config['max_size']             = 100000;
			$config['max_width']            = 4024;
			$config['max_height']           = 3368;
			$this->load->library('upload', $config);
			$this->upload->do_upload('gambar');
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
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('isi', 'isi', 'trim|required');
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "berita.xls";
        $judul = "berita";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Isi");
	xlsWriteLabel($tablehead, $kolomhead++, "Date");
	xlsWriteLabel($tablehead, $kolomhead++, "Gambar");

	foreach ($this->Berita_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->date);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gambar);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=berita.doc");

        $data = array(
            'berita_data' => $this->Berita_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('berita/berita_doc',$data);
    }

    function pdf()
    {
        $data = array(
            'berita_data' => $this->Berita_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('berita/berita_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('berita.pdf', 'D'); 
    }

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
