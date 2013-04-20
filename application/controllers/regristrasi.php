<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regristrasi extends CI_Controller {

	function Regristrasi(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
		$this->load->library(array('template'));	
	}

	public function index()
	{
		$this->template->write('title', 'Barbekost-Regristrasi');
		$this->template->write('title_desc', 'There is text for promoted Barbe-Kost to everyones');
		$this->template->write('header', 'Cloud Circle');	
		$this->template->write_view('navigation', '/layout/navigation');
		$attributes = array('id' => 'inputs');
		//form
		$form=array();
		array_push($form,form_open('email/send',$attributes));
				
		$attr = array(
		        'name'        => 'firstname',
		        'id'          => 'firstname',
		        'class'       => 'username long',
		        'type'        => 'text',
		        'value'       => 'Chester',
		        'title'   	  => 'Isilah dengan nama terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Nama Depan',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'lastname',
		        'id'          => 'lastname ',
		        'class'       => 'username long',
		        'type'        => 'text',
		        'value'       => 'Bennington',
		        'title'   	  => 'Isilah dengan nama terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Nama Belakang',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'email',
		        'id'          => 'email',
		        'class'       => 'email long',
		        'type'        => 'email',
		        'value'       => 'chester.bennington@mail.com',
		        'title'   	  => 'Isilah E-Mail terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'E-Mail',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'password',
		        'id'          => 'password',
		        'class'       => 'password',
		        'type'        => 'password',
		        'value'       => '*******',
		        'title'   	  => 'Isilah Password terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Password',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'nohp',
		        'id'          => 'nohp',
		        'class'       => 'nohp',
		        'type'        => 'text',
		        'value'       => '0826780973XX',
		        'title'   	  => 'Isilah No HP terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'No. HP',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'alamat',
		        'id'          => 'alamat',
		        'class'       => 'alamat long',
		        'type'        => 'text',
		        'value'       => 'Jl. Umpama No. 7',
		        'title'   	  => 'Isilah Alamat terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Alamat',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'kota',
		        'id'          => 'kota',
		        'class'       => 'kota short',
		        'type'        => 'text',
		        'value'       => 'Malang',
		        'title'   	  => 'Isilah Kota terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Kota',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'provinsi',
		        'id'          => 'provinsi',
		        'class'       => 'provinsi medium',
		        'type'        => 'text',
		        'value'       => 'Jawa Timur',
		        'title'   	  => 'Isilah Provinsi terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Provinsi',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'noktp',
		        'id'          => 'noktp',
		        'class'       => 'noktp',
		        'type'        => 'text',
		        'value'       => '3519...',
		        'title'   	  => 'Isilah Nomer KTP terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Nomer KTP',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'tipe',
		        'id'          => 'tipe',
		        'class'          => 'tipe',
		        'type'        => 'text',
		        'value'       => 'Tipe',
		        'title'   	  => 'Isilah Tipe terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Tipe',
		);
		array_push($form,"<br>".form_input($attr) );

		$attr = array(
		        'name'        => 'nim',
		        'id'          => 'nim',
		        'class'       => 'nim',
		        'type'        => 'text',
		        'value'       => '08560778',
		        'title'   	  => 'Isilah NIM terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'NIM',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'universitas',
		        'id'          => 'universitas',
		        'class'       => 'universitas',
		        'type'        => 'text',
		        'value'       => 'Universitas',
		        'title'   	  => 'Isilah Universitas terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Universitas',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'tahunlulus',
		        'id'          => 'tahunlulus',
		        'class'       => 'tahunlulus',
		        'type'        => 'date',
		        'value'       => '2008',
		        'title'   	  => 'Isilah Tahun Lulus terlebih dahulu',
		        'required'	  => 'true',
		        'placeholder' => 'Tahun Lulus',
		);
		array_push($form,"<br>".form_input($attr) );
		
		$attr = array(
		        'name'        => 'save',
		        'type'        => 'submit',
		        'content'     => 'save',
		        'class'       => 'button save',
		);
		array_push($form,"<br>".form_button($attr));
		array_push( $form,form_close());
		$data["form"]= $form;
		$this->template->write_view('content', 'tampilan_regristrasi',$data);
		//$this->template->write_view('sidebar', '/layout/sidebar');
		//$this->template->write_view('footer', '/layout/footer');
		$this->template->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */