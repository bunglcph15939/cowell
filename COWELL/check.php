<?php
session_start();

$errors=[];


if($_POST){
    if($_POST['ho']==''){
       $errors['ho']='mời nhập họ';
    }
    if($_POST['ten']==''){
        $errors['ten']='mời nhập tên';
       }   
       if($_POST['sdt']==''){
        $errors['sdt']='mời nhập sdt';
       }
       if($_POST['password']==''){
        $errors['password']='mời nhập pass';
       }  
       if($_POST['ngay']==''){
        $errors['ngay']='mời nhập ngay';
       }  
       if($_POST['thang']==''){
        $errors['thang']='mời nhập thang';
       }  
       if($_POST['nam']==''){
        $errors['nam']='mời nhập nam';
       } 
       if(empty($_POST['customRadioInline1'])){
        $errors['customRadioInline1']='mời nhập gt';
       } 
    if($errors){
        $_SESSION['errors']=$errors;
        $_SESSION['old']=$_POST;
        header('location:register.php');
     } 
     
     
    else{
       session_unset();
       header('location:./admin/Dashboard.php');
    }
    
     
   
} else{
    header('location:register.php');
}
?>