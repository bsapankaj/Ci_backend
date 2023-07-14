<?php

namespace App\Controllers;

use App\Models\AdminModels;

class admin extends BaseController
{
   public function Dashboard()
   {
      echo view("includes/header");
      echo view("includes/left");
      echo view("admin_ecom/Dashboard");
      echo view("includes/footer");
   }

   public function login()
   {
      $data = [];
      helper(['form']);

      if ($this->request->getMethod() == 'post') {
         //let's do the validation here
         $rules = [

            'username' => 'required|min_length[3]|max_length[20]',
            //'email' => 'required|min_length[5]|max_length[50]|valid_email',
            'password' => 'required|min_length[1]|max_length[255]|validateUser[username,password]',

         ];

         $errors = [
            'password' => [
               'validateUser' => 'Email or Password don\'t match'
            ]
         ];

         if (!$this->validate($rules, $errors)) {
            $data['validation'] = $this->validator;
         } else {
            $model = new AdminModels();

            $user = $model->where('username', $this->request->getVar('username'))
               ->first();

            $this->setUserSession($user);
            // $session->setFlashdata('success', 'Successful Registration');
            return redirect()->to('/Dashboard');
         }
      }


      echo view("includes/header", $data);
      echo view("admin_ecom/login");
      echo view("includes/footer");
   }

   private function setUserSession($user)
   {
   $data = [
      'id' => $user['id'],
      'username' => $user['username'],
      'mobile' => $user['mobile'],
      'email' => $user['email'],
      'isLoggedIn' => true,
   ];

   session()->set($data);
   return true;

   }

   public function sinin()
   {
      $data = [];
      helper(['form']);

      if ($this->request->getMethod() == 'post') {
         //let's do the validation here
         $rules = [
            'username' => 'required|min_length[3]|max_length[20]',
            // 'required|min_length[3]|max_length[20]',
            'mobile' => ["label" => "mobile", "rules" => "required|min_length[10]|max_length[50]"],
            //'required|min_length[6]|max_length[50]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admin_users.email]',
            //'required|min_length[6]|max_length[50]|valid_email|is_unique[admin_users.email]',
            'password' => 'required|min_length[8]|max_length[225]',
            //'required|min_length[8]|max_length[255]',
            'password_confirm' => 'matches[password]',
         ];

         if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
         } else {
            $model = new AdminModels();

            $newData = [
               'username' => $this->request->getVar('username'),
               'mobile' => $this->request->getVar('mobile'),
               'email' => $this->request->getVar('email'),
               'password' => $this->request->getVar('password'),
            ];
            $model->save($newData);
            $session = session();
            $session->setFlashdata('success', 'Successful Registration');
            return redirect()->to('/login');
         }
      }


      echo view("includes/header", $data);
      echo view("admin_ecom/sinin");
      echo view("includes/footer");
   }
   
   public function category()
   {
      echo view("includes/header");
      echo view("includes/left");
      echo view("admin_ecom/category");
      echo view("includes/footer");
   }
   
   public function add_category()
   {
      echo view("includes/header");
      echo view("includes/left");
      echo view("admin_ecom/add_category");
      echo view("includes/footer");
   }
   
   public function product()
   {
      echo view("includes/header");
      echo view("includes/left");
      echo view("admin_ecom/product");
      echo view("includes/footer");
   }
   
   public function add_product()
   {
      echo view("includes/header");
      echo view("includes/left");
      echo view("admin_ecom/add_product");
      echo view("includes/footer");
   }

   public function logout()
   {
      session()->destroy();
      return redirect()->to('/login');
   }
}
