<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_Row_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Browse
	 */

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');

		$this->load->model('admin_model/delete_record_model'); 
	}

	public function deleteGenre($id)
	{
		$this->delete_record_model->deleteGenre($id); 
        redirect('admin'); 
	}

    public function deleteActor($id)
	{
		$this->delete_record_model->deleteActor($id); 
        redirect('admin'); 
	}

    public function deleteDirector($id)
	{
		$this->delete_record_model->deleteDirector($id); 
        redirect('admin'); 
	}

    public function deleteYear($id)
	{
		$this->delete_record_model->deleteYear($id); 
        redirect('admin'); 
	}

    public function deleteMovie($id)
	{
		$this->delete_record_model->deleteMovie($id); 
        redirect('admin'); 
	}
}
