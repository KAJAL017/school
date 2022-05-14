$(document).ready(function () {
    // Already Exists Email Validation

    $("#email").on("keypress blur", function () {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var Stu_email = $("#email").val();
        $.ajax({
            url: 'student/addstudent.php',
            type: "POST",
            data: {
                checkmail: "checkmail",
                email: Stu_email,
            },
            success: function (data) {

                if (data != 0) {
                    $(".statusMsg5").html("<small style='color:red;margin-left:2%'>Email Address Already Taken</small>");
                    $("#signup_btn").attr("disabled", true);

                }
                else if(data == 0 ){
                    $(".statusMsg2").html("<small style='color:green;margin-left:2%'>There We go</small>");
                    $("#signup_btn").attr("disabled", false);
                }
                else if (data == "") {
                    $(".statusMsg2").html("<small style='red:green;margin-left:2%'>Enter Email</small>");
                    $("#signup_btn").attr("disabled", false);
                }

            }

        })
    })
})





function addStu() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var uname = $("#uname").val();
    var email = $("#email").val();
    var upass = $("#upass").val();

    // Form Validation on submission

    if (uname.trim() == "") {
        $(".statusMsg1").html("<small style='color:red;margin-left:2%'>Please Enter Your Name</small>");
        $("#uname").focus();
        return false;
    } else if (email.trim() == "") {
        $(".statusMsg2").html("<small style='color:red;margin-left:2%'>Please Enter Your Email</small>");
        $("#email").focus();
        return false;
    } else if (email.trim() != "" && !reg.test(email)) {
        $(".statusMsg2").html("<small style='color:red;margin-left:2%'>Please Enter Valid Email</small>");
        $("#email").focus();
        return false;
    } else if (upass.trim() == "") {
        $(".statusMsg3").html("<small style='color:red;margin-left:2%'>Please Enter Your Password</small>");
        $("#upass").focus();
        return false;
    } else {

        $.ajax({
            url: 'student/addstudent.php',
            dataType: "json",
            method: 'POST',
            data: {
                stusignup: "signup",
                Stuname: uname,
                Stuemail: email,
                Stupass: upass,
            },
            success: function (data) {
                console.log(data);
                if (data == "OK") {
                    $("#success_msg").html("<span class='alert alert-success'>Registration Successful</span>");
                    emptyFields();
                } else if (data == "Failed") {
                    $("#success_msg").html("<span class='alert alert-success>Registration Unsuccessful</span>");
                }
            }
        })
    }




}

// Empty Fields

function emptyFields() {
    $(".RegModal").trigger("reset");
    $(".statusMsg1").html("");
    $(".statusMsg2").html("");
    $(".statusMsg3").html("");
   
}
// Student Login In Ajax 

function SignIn_btn() {
    var Stu_email = $("#Login_email").val();
    var Stu_pass = $("#Login_pass").val();
    $.ajax({
        url: 'student/addstudent.php',
        type: "POST",
        data: {
            checkLogmail:"checkLogmail",
            Log_email :Stu_email,
            Log_pass :Stu_pass,
        },
        success:function(data){
         if(data == 0){
             $("#statuslog").html("<small class='alert alert-danger '>Envalid Email and Password</small>");
         }else if(data == 1 ){
            $("#statuslog").html("<small class='spinner-border text-success' role='status' ></small>");
            setTimeout(()=>{
                window.location.href="index.php";
            },1000)
         };
         
        }
    })
}