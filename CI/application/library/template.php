<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template
{
	 function __construct()
	{
		$this->ci =&get_instract();
	}

	function web ($template, $data=''){
		$data->['contents'] = $this->ci->load->view($template, $data, TRUE);
		

		$this->ci->load->view('template/home', $data);
	}
}