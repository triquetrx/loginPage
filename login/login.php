<?php
$host="localhost";
$user="root";
$password="";
$db="login";
$connect=new mysqli($host,$user,$password, $db) or die("Unable to connect to Database");
//used to check the process.php
/*if($connect->connect_error){
    echo "Unable to Connect Database"
}
else{
    echo "Connected sucessfully"
}*/
if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where username='".$uname."' AND pass='".$password."' LIMIT 1";
    $result=mysqli_query($connect,$sql);
    $data=mysqli_fetch_array($result);
    if($data['username'] == $uname && $data['pass'] == $password){
        echo '<h1>You Have Successfully logged-in</h1>';
        exit();
    }
    elseif($data['username'] == $uname && $data['pass'] != $password){
        echo "<script>alert('Incorrect Password')</script>";
        echo "<script>location.replace('login.php')</script>";
        exit();
    }
    else{
        echo "<script>alert('Invalid Entry')</script>";
        echo "<script>location.replace('login.php')</script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="login.js"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</head>
<body>
    <div class="container h-100" id="mainback">
        <div class="d-flex justify-content-center h-100">
            <div class ="user_card">
                <div class="d-flex justify-content-center" style="margin-bottom:60px">
                    <div class="brand_logo_container">
                        <img src="temp logo.jpg" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class ="d-flex justify-content-center form_container mt-5">
                    <form method="POST" action="#">
                        <div class="input-group mb-3 mt-5">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control input_pass" value="" placeholder="userid" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" name="password" class="form-control input_pass"value="" placeholder="password" id="userPass" required>
                                <span class="input-group-text" onclick="showpassw()" id="showpass" style="border-radius: 9px; background: linear-gradient(145deg, #d80014, #b60011);box-shadow:  1px 1px 20px #b60011,-1px -1px 5px #de0015;"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline" style="color: #F4FAFF;">Remember Me</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center login_container" style="margin-top:20px;margin-bottom:10px">
                            <button type="submit" name="submit" class="btn login_btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="d-flex justify-content-center"style="bottom:0px; postion:fixed; margin-top:30px">
                    <div class="d-flex justify-content-center col-sm links">
                        <a class="disabled1" href="create_new_account.php" class="mt-4">First Time?</a>
                    </div>
                    <div class="d-flex justify-content-center col-sm">
                        <a class="disabled2" class="mt-4" style="color: #F4FAFF;">OR</class>
                    </div>
                    <div class="d-flex justify-content-center col-sm">
                        <a class="disabled" href="#" class="mt-4">Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    body{
        margin-top: 100px;
        padding: 0;
        height: 100%;
        background: #F4FAFF;
        color: #040404;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .user_card {
        height: 475px;
        width: 425px;
        box-shadow: 10px 10px 15px #6d000a, -7px -7px 15px #ff001c;
        -webkit-box-shadow: 10px 10px 15px #6d000a, -7px -7px 15px #ff001c;;
        -moz-box-shadow: 10px 10px 15px #6d000a, -7px -7px 15px #ff001c;;
        margin-top: auto;
        margin-bottom: auto;
        background: linear-gradient(145deg, #b60011, #d80014);
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
    .title_container{
        position: 0px 100px ;
        height: 46px;
        width: 375px;
        background: #A63446;
        box-shadow: inset 8px 8px 15px #5a1c26,inset -8px -8px 15px #f24c66;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
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
        margin-top: 10px;
    }
    .login_btn {
        width: 100%;
        border-radius: 24px;
        background: linear-gradient(145deg, #ffffff, #dce1e6);
        box-shadow: 3px 3px 8px #84878a, -3px -3px 8px #ffffff;
        color:black;
        transition: 0.1s ease-in;
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
    a.disabled{
        color: #F8FFF4;
        font-size: small;
        padding-bottom: 10px;
    }
    a.disabled1{
        color:#F8FFF4;
        font-size: small;
        padding-bottom: 10px;
    }
    a.disabled2{
        color: #F8FFF4;
        font-size: small;
        padding-bottom: 10px;
    }
    .passhol{
        width: 200px;
    }
    #showpass:focus{
        border-radius: 9px;
        background: linear-gradient(145deg, #b60011, #d80014);
        box-shadow:  5px 5px 10px #b60011,
             -5px -5px 10px #de0015
    }
</style>