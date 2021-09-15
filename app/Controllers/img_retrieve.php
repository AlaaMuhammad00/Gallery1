<?php 

namespace App\Controllers; 
use CodeIgniter\Controller;
use App\Models\get;

class img_retrieve extends BaseController {
    
    public function get_table(){
        
     #   $model = new get();

       # $data ['title'] = 'gallery';
      #  $data['users'] = $model->getUsers();
        
     #   echo view('templates/header', $data);
       echo view('templates/header');
      #  echo view('retrieve',$data);
        echo view('retrieve');
        echo view('templates/footer');
    }
    
}
?>