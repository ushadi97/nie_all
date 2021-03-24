
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<style>
    ol.breadcrumb li a {
        color: #F1C40F;
        text-decoration: none;
    }
    ol.breadcrumb li a:hover {
        color: #F7DC6F;
        text-decoration: underline;
    }
</style>


<body>

<!--===========navbar================-->
<?php include '../main/headerNav.html';?>

<!--===========Breadcrumb==========-->

<ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="http://localhost:63342/HCI/index.php?_ijt=e5rkeree1jicgnpa2aadj947t4#">Home</a></li>
    <li class="breadcrumb-item active">Login</li>
</ol>

<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="img/logo1.png" class="brand_logo" alt="Log in logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>

            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="button" name="button" id="login" onclick="validation()" class="btn login_btn">Login</button>
            </div>
            </form>

            <div class="d-flex justify-content-center">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

    function validation(){
        var user = document.getElementById('username').value;
        var pass = document.getElementById('password').value;


        if(user == ""){
            alert("Please fill the Username field");
            //document.getElementById('username').innerHTML = "!! Please fill the Username field";
            return false;
        }

        if((user.length <= 2) || (user.length > 20)){
            alert("User Name length must be between 2 and 20");
            //document.getElementById('username').innerHTML = "!! User Name length must be between 2 and 20";
            return false;
        }

        if(/^[a-zA-Z0-9 _]*$/.test(user)  == false){
            alert("Only characters are Allowed");
            //document.getElementById('username').innerHTML = "!! Only characters are Allowed";
            return false;
        }

        if(user == "admin"){
            alert("Please Enter correct user name, Username: admin is not Allowed.");
            //document.getElementById('username').innerHTML = "!! Please Enter correct user name";
            return false;
        }

        if(pass == ""){
            alert("Please Enter your Password");
            //document.getElementById('password').innerHTML = "!! Please Enter your Password";
            return false;
        }

        if((pass.length <= 4) || (pass.length > 10)){
            alert("Password length must be between 5 and 10");
            //document.getElementById('password').innerHTML = "!! Password length must be between 5 and 10";
            return false;
        }

        if(pass == "admin"){
            alert("Please Enter valid password, password: admin is not Allowed.");
            //document.getElementById('password').innerHTML = "!! Please Enter correct user name";
            return false;
        }
        alert("Login Successful! page is redirecting to Homepage.");
        window.location.href = "headerNav.html";



    }

</script>

<!--==========footer===============-->
<?php include '../main/footer.html';?>



</body>
</html>