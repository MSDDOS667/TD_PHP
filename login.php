<?php
$username="msd";
$password="imake";

$error = "";

if(isset($_POST["login"])){
  if(isset($_POST["username"]) && isset($_POST["password"])){
              $input_username = $_POST["username"];
              $input_password = $_POST["password"];
              if($username = $input_username && $password == $input_password){
                  $_SESSION["user"] = $username ;
                  header("Location : index.php");
                  var_dump($_SESSION);
  }else{
      $error = "Don't play wimme man just write the password";
  }
}else{
  $error = "Merci de bien vouloir renseigner tous les champs";
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
  <form action="login.php" method="post">
    <input name="username" type="text" 
    placeholder="Nom d'utilisateur" >
    <br><br>
    <input name="password" type="text" placeholder="Mot de passe">
    <br><br>
    <input name="login" type="submit"
     value="connexion">
    </form> 

    <p><?php echo $error; ?></p> 
</body>

</html>