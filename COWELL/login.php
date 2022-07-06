<?php

var_dump($_POST);
$errors=[];

if($_POST){
    //validate
    if($_POST['email']){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==false){
            $errors['email']=$_POST['email'];
            $errors['email'].='Đây có phải email đâu trời !';
        }else{
            $errors['email']="email is required";
        }

        if(strlen($_POST['pass'])===0){
            $errors['pass']="Chưa nhập mật khẩu b êi";
        }
        if($errors){
            $_SESSION['errors']=$errors;
            $_SESSION['olds']=$_POST;
            header('location:sign-in.php');
            exit();
        }
    }
    $_SESSION['user']='admin';
    header('location:./admin/Dashboard.php');
}else{// khi vào không qua submit login trở về login 
    header('location:sign-in.php');
    exit(1);
}
?>