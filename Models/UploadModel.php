<?php 
namespace App\Models;
use CodeIgniter\Model;
class UploadModel extends Model
{
    protected $table = 'upload';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'discription','uname','file','category'];

}

