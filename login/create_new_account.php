<!DOCTYPE html>
<head>
    <title>Create New Account</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script src="login.js"></script>
    </title>
</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center" style="margin-bottom: 45px; border-top-left-radius: 7px; border-top-right-radius: 7px;background: linear-gradient(145deg, #b60011, #d80014); box-shadow: inset 18px 18px 36px #98000e,inset -18px -18px 36px #fd0018; color: #F4FAFF;">
                    <div class="title_container">
                        <div class="d-flex justify-content-center">
                            <h2 class="title">Create Account</h32>
                        </div>
                    </div>    
                </div>
                <div class ="d-flex justify-content-center h-100">
                    <form>
                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control input_pass" value="" placeholder="User_Name" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control input_pass" value="" placeholder="FirstName LastName" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-mail-bulk"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_pass" value="" placeholder="email-id" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" name="phoneNumber" class="form-control input_pass" value="" placeholder="Phone Number" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" name="password1" class="form-control input_pass" data-toggle="password" value="" placeholder=" create password" alt="passhol" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4 login_container">
                            <button type="button" name="button" class="btn login_btn" style="margin-top: 20px;">Register</button>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <div class="d-flex justify-content-center col-sm links" style="color: #F4FAFF; ">
                                <a class="reroute" href="login.php" class="mt-4">Existing User</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    body{
        margin-top: 50px;
        padding: 0;
        height: auto;
        width:100%;
        background: #F4FAFF;
        color: #040404;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .user_card {
        height: 520px;
        width: 425px;
        box-shadow: 10px 10px 15px #6d000a, -7px -7px 15px #ff001c;
        -webkit-box-shadow: 10px 10px 15px #6d000a, -7px -7px 15px #ff001c;;
        -moz-box-shadow: 10px 10px 15px #6d000a, -7px -7px 15px #ff001c;;
        margin-top: auto;
        margin-bottom: auto;
        background: #CA0013;
        color: #040404;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 0px;
        border-radius: 7px;
    }

    .title{
        color: white;
        padding-top: 5px;
    }
    .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #F4FAFF;
        padding: 10px;
        text-align: center;
    }
    .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid #F8FFF4;
    }
    .form_container {
        margin-top: 100px;
    }
    .login_btn {
        width: 100%;
        border-radius: 24px;
        background: linear-gradient(145deg, #ffffff, #dce1e6);
        box-shadow: 3px 3px 8px #84878a, -3px -3px 8px #ffffff;
        color:black;
        transition: 0.2s ease-in;
    }
    .login_btn:focus {
        background: linear-gradient(145deg, #dce1e6, #ffffff);
        box-shadow: 3px 3px 8px #84878a, -3px -3px 8px #ffffff;
        outline: 0px;
    }
    .login_container {
        padding: 0 2rem;
    }
    .input-group-text {
        background: #CA0013;
        box-shadow: inset 8px 8px 15px #6d000a, inset -8px -8px 15px #ff001c;;
        color: white ;
        border: 0;
        border-radius: 0.25rem 0 0 0.25rem ;
    }
    .passrem{
        color: white;
        font: caption;
    }
    .input_user,
    .input_pass{
        background: #F4FAFF;
        box-shadow: inset 8px 8px 15px #84878a,inset -8px -8px 15px #ffffff;
        outline: 0px;
    }
    .input_user,
    .input_pass:focus{
        background: #F4FAFF;
        box-shadow: inset 8px 8px 15px #84878a,inset -8px -8px 15px #ffffff;
        outline: 0px;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #071a46 ;
    }
    a.reroute{
        color: #F8FFF4;
        font-size: small;
        padding-bottom: 10px;
    }
   .passhol{
        width: 200px;
    }
    #show:focus{
        border-radius: 9px;
        background: linear-gradient(145deg, #d80014, #b60011);
        box-shadow:  10px 10px 20px #b60011,
             -10px -10px 20px #de0015;
    }
    
</style>
