<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo $this->assetsurl; ?>/css/formDesign.css">
</head>
<style>
    .container {
        max-width: 390px;
        padding: 25px 40px 35px 40px;
        text-align: center;
    }

    .fbtn input {
        height: 45px;
        width: 100%;
        color: #fff;
        font-size: 1.4rem;
        font-weight: 400;
        border: 2px solid #ccc;
        cursor: pointer;
        transition: all 0.2s ease;
        background: linear-gradient(135deg, hsl(204, 70%, 67%), hsl(283, 39%, 53%));
    }

    .fbtn input:hover {
        background: rgb(88, 56, 250);
    }

</style>
<script>
    var check = function () {
        if (document.getElementById('password').value != document.getElementById('repassword').value) {
            alert("Please Enter Same Password.");
            document.getElementById('password').value="";
            document.getElementById('repassword').value="";
        }
    }
</script>

<body>
    <section class="container">
        <header><b>Reset Password</b></header>
        <form method="post" class="form">
            <div class="input-box">
                <input type="text" name="inputotp" placeholder="Enter OTP" required />
                <input type="text" name="password" id="password" placeholder="Enter New Password" required/>
                <input type="text" onblur="check()" name="repassword" id="repassword" placeholder="Re Enter password" required/>
            </div>
            <div class="input-box">
                <div class="fbtn">
                    <input type="submit" name="resetpass" value="Reset Password">
                </div>
            </div>
        </form>
    </section>
</body>

</html>