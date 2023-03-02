<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RegModel;

$this->session = \Config\Services::session();

$uname=$this->session->get('logname');
$un=$uname['uname'];

$model = new RegModel();


 return view ('dash',$uname);




// // Redirect to MyController's myFunction
//     helper('url');
//     redirect('Reg/redirect4');

?>