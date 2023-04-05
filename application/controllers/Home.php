<?php

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('halaman_utama');
	}

    public function kontak()
    {
        $this->load->view('halaman_kontak');
    }

    public function about()
    {
        $this->load->view('halaman_about');
    }

    public function kirim_data()
    {
        $this->form_validation->set_rules('txtnama','Nama','Required');
        $this->form_validation->set_rules('txtalamat','Alamat','Required');
        $this->form_validation->set_rules('txtnotelp','Handphone','Required');

        $data=[
            'nama'=>$this->input->post('txtnama'),
            'alamat'=>$this->input->post('txtalamat'),
            'notelp'=>$this->input->post('txtnotelp')
        ];

        if($this->form_validation->run() != false)  
        {
           $this->load->view('halaman_output', $data);
        }     
        else
        {
           $this->load->view('halaman_utama');
        }
    }   
 
}