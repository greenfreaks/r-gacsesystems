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

   /* ------- Preparando función para enviar el mail al administrador -------- */
   $sendAdminMail = new clsMail();
   $bodyHTMLAdmin = "
   <h1>¡Dr Reminder tiene un nuevo usuario!</h1>
   ¡Felicidades Dr. Reminder está siendo un éxito! Tienes un nuevo usaurio
   <p>Nombre del nuevo usuario: <b> {$name_medico}</p>
   <p>Email del nuevo usuario: <b> {$email_medico} </b> </p>
   ";

   /* ------- Preparando función para enviar el mail al usuario -------- */
   $sendUserMail = new clsMail();
   $bodyHTMLUser ="
   <h1>¡Qué tal {$name_medico}!</h1>
   <h4>¡Muchas Gracias por registrarte en Dr. Reminder!</h4>
   <p>Nos alegra mucho saber que has confiado en esta aplicación para poder llevar el control de tus citas :,)</p>
   <p>Te aseguramos que fue una de las mejores desiciones que has tomado, a partir de ahora podrás disfrutar de las
   increíbles funciones de este sistema de agenda de citas, ¡Nunca más volverás a olvidar una! y siempre contarás
   con el historial de todas tus citas de cada paciente al alcance de un click ;)</p>
   <p>Puedes iniciar tu sesión en el siguiente enlace:</p>
   <a target='_blank' class='mailBtnRed' href = 'https://drreminder.000webhostapp.com/index.php'>Iniciar sesión</a>
   ";


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

  // Envío de correo a usuario
  $userSent = $sendUserMail->metEnviarUser(
    "Bienvenido a Dr. Reminder", 
    "Tu registro ha sido exitoso",
    "Querido usuario",
    $email_medico,
    $bodyHTMLUser); 

    //Envío de correo a administrador
    $adminSent = $sendAdminMail->metEnviarAdmin(
      "Nuevo usuario", 
      "¡Dr. Reminder tiene un nuevo usuario!",
      "Acerca del usuario",
      "contacto@techbusiness.com.mx",
      $bodyHTMLAdmin);

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
