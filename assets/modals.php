<!-- Start Student Registration Modal -->
    <!-- Modal -->
    <div class="modal fade" id="RegModal" tabindex="-1" aria-labelledby="RegModalLabel " aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="padding-bottom: 22px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="RegModalLabel">Stdudent Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-weight:bold;">
                    <!-- Student Form Modal -->
                    <form class="RegModal">
                        <div class="form-group">
                            <label for="uname"><i class="fas fa-user"></i></label>
                            <label for="uname" class=" pl-2">Name</label><small class="statusMsg1"></small>
                            <input type="text" class="form-control" id="uname" name="uname" aria-describedby="textHelp"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i></label>
                            <label for="email" class=" pl-2">Email address</label>
                            <small class="statusMsg2"></small>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="upass"><i class="fas fa-key"></i></label>
                            <label for="upass" class=" pl-2">Password</label>
                            <small class="statusMsg3"></small>
                            <input type="password" class="form-control" id="upass" name="upass"
                                placeholder="Enter Your Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <span id="success_msg"></span>
                    <button type="button" class="btn btn-primary" onclick="addStu()">Signup</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Student Registration Modal -->

    <!-- Start Student login Modal -->
    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel " aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="padding-bottom: 22px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">Student Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-weight:bold;">
                    <!-- Student Form Modal -->
                    <form class="LoginModal">
                        <div class="form-group">
                            <label for="login_email"><i class="fas fa-envelope"></i></label>
                            <label for="login_email" class=" pl-2">Email address</label>
                            <input type="email" class="form-control" id="login_email" name="login_email"
                                aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="Login_pass"><i class="fas fa-key"></i></label>
                            <label for="Login_pass" class=" pl-2">Password</label>
                            <input type="password" class="form-control" id="Login_pass" name="Login_pass"
                                placeholder="Enter Your Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Signin</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Student login Modal -->


    <!-- Start Admin login Modal -->
    <!-- Modal -->
    <div class="modal fade" id="AdminModal" tabindex="-1" aria-labelledby="#AdminModalLabel " aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="padding-bottom: 22px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="#AdminModalLabel">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-weight:bold;">
                    <!-- Student Form Modal -->
                    <form class="AdminModal">
                        <div class="form-group">
                            <label for="login_email"><i class="fas fa-envelope"></i></label>
                            <label for="login_email" class=" pl-2">Email address</label>
                            <input type="email" class="form-control" id="Admin_login_email" name="Admin_login_email"
                                aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="Login_pass"><i class="fas fa-key"></i></label>
                            <label for="Login_pass" class=" pl-2">Password</label>
                            <input type="password" class="form-control" id="Admin_Login_pass" name="Admin_Login_pass"
                                placeholder="Enter Your Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Signin</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- End Admin login Modal -->
