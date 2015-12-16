<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
      <link rel="icon" type="image/png" href="../img/favicon.png">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="/Proyecto_Web/login/css/style.css">

    
    
    
  </head>

  <body>
    <a href="/Proyecto_Web/index.php">INICIO</a>
   
    <div class="container">

  <div id="login-form">

    <h3>Login</h3>

    <fieldset>

      <form action="javascript:void(0);" method="get">

        <input type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

        <input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

        <input type="submit" value="Login">

        <footer class="clearfix">

          <p><span class="info">?</span><a href="/Proyecto_Web/index.php">Forgot Password</a></p>

        </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>
    
    
    
   
    
  </body>
</html>
