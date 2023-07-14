<?php
namespace App\Validation;
use App\Models\AdminModels;

class AdminRole
{

  public function validateUser(string $str, string $fields, array $data){
    $model = new AdminModels();
    //$user = $model->where('email', $data['email']) ->first(); 
    $user = $model->where('username', $data['username']) ->first();

    if(!$user)
      return false;

    return password_verify($data['password'], $user['password']);
  }
}

