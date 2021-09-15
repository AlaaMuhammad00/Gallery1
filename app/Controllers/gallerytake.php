<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Img;
class gallerytake extends BaseController
{   
    public function __construct()
    {
        helper(['form', 'url']);
    }
	public function index()
	{   
        echo view('templates/header');
      #  echo view('retrieve',$data);
      echo view('galleryview');
        echo view('templates/footer');
		
	}
    public function index1()
	{   
        #   echo view('templates/header', $data);
        echo view('templates/header');
        #  echo view('retrieve',$data);
          echo view('retrieve');
          echo view('templates/footer');
		
	}

    public function create()
    {
          $inputs = $this->validate([
                'price' => [
                    'label' => 'price',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'Please enter the price.',
                        'min_length' => 'price must be atleast 3 characters long.'
                    ]
                    ],
                    
                'type' => [
                    'label' => 'type',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Enter your bag type.'
                        
                    ]
                    ],
                    'fimage' => [ 
                       
                        'uploaded[fimage]',
                        #'mime_in[jpg,jpeg,gif,png]',
                        #'max_size[image,4096]',
                        
                    ],

                        'bimage' => [ 
                            #'label' => 'backtimage',
                            #'rules' => 'required',
                           'uploaded[bimage]',
                            #'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                            #'max_size[image,4096]',
                            #'errors' => [
                             #   'required' => 'Enter your bag back picture.'
                                
                            #]
                            ]
 ]);
    
            if (!$inputs) {
            
                return view('galleryview', [
                    'validation' => $this->validator
                               ]);
            }
            else{ 
                $frontfile = $this->request->getFile('fimage');
                $backfile = $this->request->getFile('bimage');
                $fname=$frontfile->getRandomName();
                $bname=$backfile->getRandomName();
                $frontfile->move('./cloud',$fname);
                $backfile->move('./cloud',$bname);
                $user = new Img();
                $user->save([
                    'price' => $this->request->getVar('price'),
                    'type'  => $this->request->getVar('type'),
                    'front_image' => $fname,
                    'back_image' => $bname
                ]);
               
            }
        }
        
}
