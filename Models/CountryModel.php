<?php 
namespace App\Models;
use CodeIgniter\Model;
class CountryModel extends Model
{
    protected $table = 'country';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
}



