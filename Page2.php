<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device, initial-scale=1.0">
    <link rel="stylesheet" href="form2.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="cheatsheet.css">
    <link rel="stylesheet" >
    <title>Liste des participants</title>
</head>
<style>



body{
    background:url(./Images/im1.JPEG) center/cover ;
    backdrop-filter: blur(10px);
    margin: 00px;
    padding: 00px;
    height: 110vh;
}
.c{
  display:flex;
  align-items: center;
  justify-content:center ;
}
</style>
<body>
<div style="margin-left:30px" class="t">
<br><br><br><br><h1 class="en_tete"style="margin-left:500px" >Liste des Participants</h1><br><br>
<div class="c" >
        <table class="table table-striped table-bordered"  border="2px solid">
          <thead>
          <tr>
            <th width="70px" height="50px">NOM</th>
            <th width="270px" height="50px">PRENOMS</th>
            <th width="40px" height="50px">NUMERO</th>
            <th width="40px" height="50px">ADRESSE</th>

          </tr>
          </thead>
            <?php 
                $conn=mysqli_connect('localhost','root','','bdtest') ;
                $req="SELECT * FROM participant";
                $query=mysqli_query($conn,$req);
                while($res=mysqli_fetch_assoc($query))
                {
            ?>
            <tr>
            <td width="70px" height="50px"><?php echo $res["nomp"]?></td>
            <td width="40px" height="50px"><?php echo $res["prenomp"]?></td>
            <td width="170px" height="50px"><?php echo $res['telp'] ?></td>
            <td width="170px" height="50px"><?php echo $res['emailp'] ?></td>
          </tr>
            <?php 
        } ?>
                </table>
                </div>
</div>
</body>
</html>