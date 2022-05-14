<?php
if(!isset($_SESSION)){
  session_start();
}

include_once ("../db.php");



if(!isset($_SESSION['admin_login_session'])){

    if(isset($_POST['email']) && isset($_POST['pass'])){
                $Stuemail = $_POST['email'];
                $Stupass = $_POST['pass'];
    
                $sql="SELECT admin_email,admin_pass FROM admin WHERE admin_email='".$Stuemail."' AND admin_pass='".$Stupass."' ";
        
                 $result =$conn->query($sql);
                 $row = $result->num_rows;
                 if($row === 1){
                    $_SESSION['admin_login_session']="true";
                    $_SESSION['Stuemail']=$Stuemail;
                    echo json_encode($row);
                 }
                 else if($row===0){
                   echo json_encode($row);
    
                 }
    
    }
    }
  
?>