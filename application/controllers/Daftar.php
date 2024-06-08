<?php 

use Orm\User;

class Daftar extends CI_Controller{
    public function DftrUser($name, $password){
       $user = new User();
       $user->username = $user;
       $user->password = $password;
       if($user->save()) {
        echo "User dengan nama ". $name . "berhasil";
       } else {
        echo "Erorr";
       }
    }
}