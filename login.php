<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Jars of Joy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="styles/core-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <body>
    
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-3 pt-1" style="display : hidden">
            </div>
            <div class="col-3 text-center">
                <a class="blog-header-logo text-dark" href="#">Jars of Joy</a>
            </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="index.php">Our Poducts</a>
            </nav>
        </div>

        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <a onclick="document.getElementById('register_form').style.display='none';document.getElementById('login_form').style.display='inline';" class="btn btn-outline-primary"> Login</a>
            <a onclick="document.getElementById('login_form').style.display='none';document.getElementById('register_form').style.display='inline';" class="btn btn-outline-primary"> Register</a>
        </div>
        <br/>
        <br/>
        <div class="card">
            <div id="login_form">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="loginfunc.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                            <div id="emailHelp" class="form-text">Enter your username to login</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>

            <div style="display:none" id="register_form">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!--Insert data to user table | Function to register new user-->
                            <?php
                                $con=mysqli_connect("localhost","root","","ecommerce");
                                if(isset($_POST['register_user'])){
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    $query1 = "INSERT INTO users(username, password) VALUES('$username','$password')";
                                    $result=mysqli_query($con,$query1);
                                    if($result){
                                        echo "<script>alert('New user registered successfully')</script>";
                                    }else{
										echo "<script>alert('Somthing Went Wrong')</script>";
									}
                                }
                            ?>
                            <!--End of register user function-->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                                <div id="emailHelp" class="form-text">Enter your username to login to register</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <button type="submit" name="register_user" class="btn btn-primary">Register</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <br/>
    <footer class="blog-footer">
        <p>There is so much more to being a Chefs than simply knowing the techniques. Our chefs possess the passion and flair to make ordinary ingredient’s taste extraordinary Many of our chefs excel in their own disciplinaries and have achieved many awards and accolades within the local and international culinary arena.</p>
        <center>
            <img class="bd-placeholder-img" width="50" height="50" src="images/logo.jpeg"/>
        </center>
    </footer>
</body>
</html>