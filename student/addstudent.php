<?php
if(!isset($_SESSION)){
   session_start();
}

include_once ("../db.php");


// Email Validation

if(isset($_POST["email"])  && isset($_POST["checkmail"])){
   $stu_email = $_POST["email"];

   $sql="SELECT `student_email`FROM `student` WHERE student_email ='".$stu_email."'";
   
   $result = $conn->query($sql);
  $row = $result->num_rows;
  echo json_encode($row);
}

// Add Student Registration 

if(isset($_POST['stusignup']) && isset($_POST['Stuname']) && isset($_POST['Stuemail']) && isset($_POST['Stuemail']) && isset($_POST['Stupass'])){

   $Stuname = $_POST['Stuname'];
   $Stuemail = $_POST['Stuemail'];
   $Stupass = $_POST['Stupass'];
 
   
   $sql="INSERT INTO `student`( `student_name`, `student_email`, `student_pass`) VALUES (' $Stuname','$Stuemail','$Stupass')";
   
//    json data 

   if($conn->query($sql)== TRUE){
       echo json_encode("OK");
   }
   else{
       echo json_encode("Failed");
   }

}



// Student Login Verification

if(!isset($_SESSION['is_Login'])){

if(isset($_POST['Log_email']) && isset($_POST['Log_pass'])){
            $Stuemail = $_POST['Log_email'];
            $Stupass = $_POST['Log_pass'];

            $sql="SELECT admin_email,admin_pass FROM admin WHERE admin_email='".$Stuemail."' AND 	admin_pass='".$Stupass."' ";
    
             $result =$conn->query($sql);
             $row = $result->num_rows;
             if($row === 1){
                $_SESSION['is_Login']="true";
                $_SESSION['stu_log']=$Stuemail;
                echo json_encode($row);
             }
             else if($row===0){
               echo json_encode($row);

             }

}
}


?>