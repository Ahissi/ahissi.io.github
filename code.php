<?php 
    $con=mysqli_connect('localhost','root','','bdtest') ;
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];

    $req="INSERT INTO participant (nomp,prenomp,telp,emailp)
    VALUES ('$nom','$prenom','$tel','$email')";

    $res=mysqli_query($con,$req);
    if($res){
        header("location:Page2.php");
    }
?>