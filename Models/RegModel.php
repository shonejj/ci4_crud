<?php 
namespace App\Models;
use CodeIgniter\Model;
class RegModel extends Model
{
    protected $table = 'register';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uname', 'email', 'pswd'];
}



