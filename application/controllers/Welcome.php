<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model(array('Landing_model', 'Identitas_web_model', 'Berita_model', 'Download_model', 'Waktu_kegiatan_model', 'Tanggal_kegiatan_model'));
		$this->load->model('Log_aktivitas_model');
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'html'));
		$this->load->library('datatables');
		$this->load->library('phpmailer_library');
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	public function home() {
		$q=urldecode($this->input->get('q', TRUE));
		$start=intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url']=base_url() . 'download/?q='. urlencode($q);
			$config['first_url']=base_url() . 'download/?q='. urlencode($q);
		}

		else {
			$config['base_url']=base_url() . 'download/';
			$config['first_url']=base_url() . 'download/';
		}

		$config['per_page']=10;
		$config['page_query_string']=TRUE;
		$config['total_rows']=$this->Download_model->total_rows($q);
		// $download = $this->Download_model->get_limit_data($config['per_page'], $start, $q);
		$berita=$this->Berita_model->get_batas();
		$download_phone=$this->Download_model->get_join_phone();
		$download_cw=$this->Download_model->get_join_cw();
		$download_ft=$this->Download_model->get_join_ft();
		$download_m=$this->Download_model->get_join_m();
		$kegiatan=$this->Tanggal_kegiatan_model->get_join();
		// $kegiatan = $this->Waktu_kegiatan_model->get_join();

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$this->data['download_data_phone']=$download_phone;
		$this->data['download_data_cw']=$download_cw;
		$this->data['download_data_ft']=$download_ft;
		$this->data['download_data_m']=$download_m;
		$this->data['berita_data']=$berita;

		$this->data['kegiatan_data']=$kegiatan;
		$this->data['q']=$q;
		$this->data['pagination']=$this->pagination->create_links();
		$this->data['total_rows']=$config['total_rows'];
		$this->data['start']=$start;

		$row=$this->Landing_model->get_by_id('1');

		if ($row) {
			$this->data['id']=$this->form_validation->set_value('id', $row->id);
			$this->data['nama_perusahaan']=$this->form_validation->set_value('nama_perusahaan', $row->nama_perusahaan);
			$this->data['deskripsi']=$this->form_validation->set_value('deskripsi', $row->deskripsi);
			$this->data['tentang']=$this->form_validation->set_value('tentang', $row->tentang);
			$this->data['visi']=$this->form_validation->set_value('visi', $row->visi);
			$this->data['misi']=$this->form_validation->set_value('misi', $row->misi);
			$this->data['juknsi']=$this->form_validation->set_value('juknsi', $row->juknsi);
			$this->data['izin']=$this->form_validation->set_value('izin', $row->izin);
			$this->data['alamat']=$this->form_validation->set_value('alamat', $row->alamat);
			$this->data['email']=$this->form_validation->set_value('email', $row->email);
			$this->data['telpon']=$this->form_validation->set_value('telpon', $row->telpon);
			$this->data['img_about'] = $this->form_validation->set_value('img_about',$row->img_about);
				$this->data['link_video'] = $this->form_validation->set_value('link_video',$row->link_video);
		}

		$this->load->view('home', $this->data);
		// var_dump($download);
	}

	public function json() {
		header('Content-Type: application/json');
		echo $this->Download_model->json();
	}

	public function kirim_email() {
		$this->load->library('email');

// 		$this->email->from($this->input->post('email'), $this->input->post('name'));
// 		$this->email->to('admin@orarilokalyogyakarta.com');
// 		$this->email->cc('another@another-example.com');
// 		$this->email->bcc('them@their-example.com');

// 		$this->email->subject($this->input->post('subject'));
// 		$this->email->message($this->input->post('message'));

// 		$config['protocol']='sendmail';
// 		$config['mailpath']='/usr/sbin/sendmail';
// 		$config['charset']='iso-8859-1';
// 		$config['wordwrap']=TRUE;

// 		$this->email->initialize($config);

// 		$this->email->send();
		
		    $mail = $this->phpmailer_library->load(true);
			$mail->CharSet = "UTF-8";
            $mail->IsSMTP();
            $mail->SMTPSecure = 'tls';
            $mail->Host = "smtp.gmail.com"; //hostname masing-masing provider email
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;;
            $mail->Port = 587;
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPAuth = true;
            $mail->Username = "nandaroudhatul@gmail.com";//"info@nata.id"; //user email
			$mail->Password = "r12345nanda";//"nata234!!"; //password email
			$mail->SetFrom($this->input->post('email'), $this->input->post('name')); //set email pengirim
            $mail->Subject = $this->input->post('subject'); //subyek email
			$mail->AddAddress("fail.amir@students.amikom.ac.id","User"); //tujuan email
			$mail->isHTML(true);
			$mail->Body= $this->input->post('message');
// 			html_entity_decode('
// 			echo "'.$data['tanggal'].'	<br>";
// 				<p>BICKLN - BA VARIANCE</p>
// 											<p>BA PENGURANGAN BARANG HILANG</p>	
// 											<p>Toko     : Indomaret cabang Ceppogo</p>
// 											<p>Tanggal Variance :  '.$data['tanggal'].'</p>
// 											<p>Stasion          : '.$data['station'].'</p>
// 											<p>Shift            : '.$data['shift'].' </>
// 											<p>Nilai Varian Plus : Rp. '.$data['nilai'].'</p>
// 											<p>Nilai Varian Plus</p>
// 											<p>Jadi Pengurang NKL : Rp. '.$data['nilaivar'].'</p>
// 											<p>Penjelasan        : 	'.$data['keterangan'].' </p>
// 										');
            $result=array();
            if($mail->Send()){
                
                echo "masuk email";
                
            } 
            else{
                
                echo $this->email->print_debugger(array('headers'));
                echo "gagal masuk email";
                
			}
		// var_dump($this->email);
		redirect('welcome');
	}
}
