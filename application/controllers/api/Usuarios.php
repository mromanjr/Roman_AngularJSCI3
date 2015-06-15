<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once('./application/libraries/REST_Controller.php');


class Usuarios extends REST_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	}

	public function logar_post()
	{		
		$aUser =  json_decode(file_get_contents("php://input"));
		
		if($aUser->usuario == 'marcelo.junior@prnewswire.com.br' && $aUser->senha == '1234'){
			echo "Sucesso";
		}
		else{
			echo "Erro";
		}
	}
}

/* End of file Projects.php */
/* Location: ./application/controllers/api/Projects.php */