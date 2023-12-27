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

    .note {
        padding: 35px 25px 0 25px;
        text-align: center;
        font-size: 17px;
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

    .reglink {
        text-align: center;
        font-size: 16px;
        margin: 20px 0;
    }

    .row {
        display: flex;
    }

    .col {
        width: 50%;
    }
</style>

<body>
    <section class="container">
        <header><b>Forgot Password</b></header>
        <p class="note">
            Enter your email address and we'll send you an email with instructions to reset your password.
        </p>
        <form method="post" class="form">
            <div class="input-box">
                <input type="text" name="otp" placeholder="Enter OTP" required />
                <input type="text" name="password" placeholder="Enter New Password" required />
                <input type="text" name="repassword" placeholder="Re Enter password" required />
            </div>
            <div class="input-box">
                <div class="fbtn">
                    <input type="submit" name="login" value="Reset Password">
                </div>
            </div>
        </form>
    </section>
</body>

</html>