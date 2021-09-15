<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class get extends Model
{
    protected $table = 'gallery';
    protected $allowedFields        = ['price','type','front_image','back_image'];

    public function getUsers() {
    
        return $this->findAll();
      
      
    }
    
}
?>