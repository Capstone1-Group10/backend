<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("register.php");
}

?>