<?php require_once "controllerUserData.php";?>

<?php 
  if(isset($_SESSION['unique_id'])){
    header("location: profile.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | Web Pigeon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a><span>W</span>eb <span>P</span>igeon</a>
            </div>
            <div class="links">
                <div>
                    <a class="link" href="index.php"><i class="fa fa-home"></i> Home</a>
                    <a class="link" href="search.php"><i class="fa fa-search"></i> Search</a>
                    <a class="link active" href="profile.php"><i class="fa fa-user"></i> Profile</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container login">
        <section>
            <form method="POST" autocomplete="">
                <h1>Login Form</h1>
                <p>Enter your account login data to continue.</p>
                <label>Enter your email:</label>
                <input type="text" class="txt" placeholder="Email" name="user">
                <label>Enter your password:</label>
                <input type="password" class="txt" placeholder="Password" name="password">
                <input type="submit" class="btn" value="Log in" name="login">
            </form>
            <label>Don't have account ? <a href="signup.php">Create one</a></label><br>
        </section>
    </main>

    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="by">
                <span>?? 2022 Copyright : Ahmed Saber</span>
            </div>
            <div>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>

    <div class="bottom-nav hide-on-large-only">
        <a class="" href="search.php"><i class="fa fa-search"></i></a>
        <a class="" href="index.php"><i class="fa fa-home"></i></a>
        <a class="active" href="profile.php"><i class="fa fa-user"></i></a>
    </div>

    <button onclick="" class="btn-floating"><i class="fa fa-magic"></i></button>
</body>
<script src="js/script.js"></script>
</html>