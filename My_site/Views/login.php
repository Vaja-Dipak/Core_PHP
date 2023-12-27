<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="<?php echo $this->assetsurl; ?>/css/formDesign.css">
  <title>Login</title>
</head>
<style>
  .container {
    max-width: 500px;
  }

  .reglink {
    text-align: center;
    margin: 20px 0;
  }
</style>

<body>
  <section class="container">
    <header><b>Login</b></header>
    <form method="post" class="form">
      <div class="input-box">
        <input type="text" name="username" placeholder="Username  or  Email  or  Mobile" required />
      </div>
      <div class="input-box">
        <input type="password" name="pass" placeholder="Password" required />
      </div>
      <div class="reglink">
        <a href="sendotp">Forgot Password?</a>
      </div>
      <div class="input-box">
        <div class="btn">
          <input type="submit" name="login" value="Login">
        </div>
      </div>
      <div class="reglink">
        <p>Not a member? <a href="registration">Register</a></p>
      </div>
    </form>
  </section>
</body>

</html>