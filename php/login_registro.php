<?php
require "connection.php";

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $con;

  $name_medico = $_POST["name_medico"];
  $email_medico = $_POST["email_medico"];
  $pwd_medico = $_POST["pwd_medico"];

  if(empty($name_medico) || empty($email_medico) || empty($pwd_medico)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($con, "SELECT * FROM medicos WHERE email_medico = '$email_medico'");
  if(mysqli_num_rows($user) > 0){
    echo "User Has Already Taken";
    exit;
  }

  $query = "INSERT INTO `medicos` (`id_medico`, `name_medico`, `email_medico`, `pwd_medico`, `createdAT`, `modifiedAt`) VALUES (NULL, '$name_medico', '$email_medico', '$pwd_medico', current_timestamp(), NULL);";
  mysqli_query($con, $query);
  echo "Registration Successful";
  exit;
}

// LOGIN
function login(){
  global $con;

  $email_medico = $_POST["email_medico"];
  $pwd_medico = $_POST["pwd_medico_log"];

  $user = mysqli_query($con, "SELECT * FROM medicos WHERE email_medico = '$email_medico'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($pwd_medico == $row['pwd_medico']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id_medico"] = $row["id_medico"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>
