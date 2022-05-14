function admin_login(){

         let admin_email =$("#Admin_login_email").val();
         let admin_pass =$("#Admin_Login_pass").val();

         $.ajax({
           url:"admin/admin.php",
           type:"POST",
           data:{
            email : admin_email,
            pass : admin_pass,
           },
           success:function(data){
            if(data == 0){
                $("#adminSlog").html("<small class='alert alert-danger '>Envalid Email and Password</small>");
            }else if(data == 1 ){
               $("#adminSlog").html("<small class='spinner-border text-success' role='status' ></small>");
               setTimeout(()=>{
                   window.location.href="admin/admin_dash_board.php";
               },1000)
            };
            
           }
       })
   }