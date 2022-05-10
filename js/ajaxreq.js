function addStu() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var uname = $("#uname").val()
    var email = $("#email").val()
    var upass = $("#upass").val()

    // Form Validation on submission

    if(uname.trim() ==""){
        $(".statusMsg1").html("<small style='color:red;margin-left:2%'>Please Enter Your Name</small>");
        $("#uname").focus();
        return false;
    }
    else if(email.trim() ==""){
        $(".statusMsg2").html("<small style='color:red;margin-left:2%'>Please Enter Your Email</small>");
        $("#email").focus();
        return false;
    }
    else if(email.trim() !="" && !reg.test(email) ){
        $(".statusMsg2").html("<small style='color:red;margin-left:2%'>Please Enter Valid Email</small>");
        $("#email").focus();
        return false;
    }
    else if(upass.trim() ==""){
        $(".statusMsg3").html("<small style='color:red;margin-left:2%'>Please Enter Your Password</small>");
        $("#upass").focus();
        return false;
    }
    else{

        $.ajax({
            url: 'student/addstudent.php',
            dataType:"json",
            method: 'POST',
            data: {
                stusignup : "signup",
                Stuname: uname,
                Stuemail: email,
                Stupass: upass,
            },
            success: function (data) {
                console.log(data);
                if(data == "OK"){
                    $("#success_msg").html("<span class='alert alert-success'>Registration Successful</span>");
                    emptyFields();
                }
                else if(data =="Failed"){
                    $("#success_msg").html("<span class='alert alert-success>Registration Unsuccessful</span>");
                }
            }
        })
    }

    


}

// Empty Fields

function emptyFields(){
$(".RegModal").trigger("reset");
$(".statusMsg1").html("");
$(".statusMsg2").html("");
$(".statusMsg2").html("");
}