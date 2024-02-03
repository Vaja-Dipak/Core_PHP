<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="<?php echo $this->assetsurl; ?>/css/formDesign.css">
  <script src="<?php echo $this->assetsurl; ?>lib/jquery.js"></script>
  <script src="<?php echo $this->assetsurl; ?>dist/jquery.validate.js"></script>
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
    <form method="post" name="login" id="loginform" onsubmit="lgn()" class="form">
      <div class="input-box">
        <input type="text" name="username" id="username" placeholder="Username  or  Email  or  Mobile" />
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" placeholder="Password" />
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
  <script>
    function lgn() {
      event.preventDefault()

      var data = {}
      $.each($(document.getElementById('loginform')).serializeArray(), function () {
        data[this.name] = this.value;
      })

      // console.log(username,password);

      fetch("http://localhost/My_site/lgn", {
        headers: { 'Accept': 'application/json' },
        method: 'POST',
        body: JSON.stringify({ data })
      }).then((res) => res.json()).then((result) => {
        console.log(result);
      
      if (result['data'].role_id == 1) {
        window.location.replace("location:dashboard");
      } else {
        window.location.replace("location:home");
      }
      
    })

    }
  </script>
</body>

</html>