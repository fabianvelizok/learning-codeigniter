<?php
	
	$this->load->view('layouts/header', $title);
	$this->load->view('pages/'.$content);
	$this->load->view('layouts/footer');

?>