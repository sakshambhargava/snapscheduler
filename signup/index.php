
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>SnapScheduler - Join Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      a:link, a:hover {
        text-decoration: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="../">
          <img src="../img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          SnapScheduler
        </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div> 




        <?php 

if((isset($_SESSION['userid']) and strlen($_SESSION['userid']) > 5)){


  echo "<button onclick="window.location.href = 'logout.php';" type="button" class="btn btn-primary">Logout</button>";
 
 }else{
 
 echo "<button onclick="window.location.href = '../login/';" type="button" class="btn btn-primary">Login</button>";
 
 }


?>

        <?php if( $_SESSION['user_logged_in']): ?>
          
<?php else: ?>
  <button onclick="window.location.href = '../login/';" type="button" class="btn btn-primary">Login</button>
<?php endif; ?>




        </div>
      </nav>

 <div class="text-center">
<main class="form-signin w-100 m-auto">
  
<form onsubmit = "return validation()"  name="login" action = "authentication.php" method="POST">
    <img class="mb-4" src="../img/logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">CREATE YOUR FREE ACCOUNT</h1>

    

    <div class="form-floating">
      <input type="username" class="form-control" name="username" id="username" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"><btn-txt>CREATE ONE</btn-txt></button>
    
    <hr class="my-4">

    <button class="w-100 btn btn-lg btn-block  dhoori" style="background-color: #dd4b39;"
    type="submit"><i class="fab fa-google" ></i><btn-txt>SIGN IN WITH GOOGLE</btn-txt></button>

  <button class="w-100 btn btn-lg btn-block dhoori2" style="background-color: #007bb6;"
    type="submit"><i class="fab fa-windows"></i><btn-txt>SIGN IN WITH MICROSOFT</btn-txt></button>

    <a>Have an account?</a><a href="../login/"> Sign in</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 - Made With ❤️ In India</p>
  </form>

</main>
</div> 
  </body>
</html>
