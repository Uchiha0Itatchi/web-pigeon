<?php
  require_once "controllerUserData.php";
	/*if(!isset($_SESSION['unique_id'])) {
		header("location: login.php");
	}*/

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$id}");

  if(mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
  }

    if($row['img'] == 1) {
        $image = "default.webp";
    }else {
        $image = $row['img'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message | Web Pigeon</title>
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
                    <a class="link" href="profile.php"><i class="fa fa-user"></i> Profile</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container profile">
        <section class="user-data">
            <div class="img-container">
                <div class="cover"></div>
                <img src="images/<?php echo $image?>">
            </div>
            <div class="text-container">
                <div>
                    <h1><?php echo $row['username']?></h1>
                    <p><?php echo $row['bio']?></p>
                </div>
            </div>
        </section>

        <section class="msg-receiver">
            <form method="POST" autocomplete="">
                <p>Enter your message here</p>
                <input type="text" name="incoming_id" value="<?php echo $row['unique_id']; ?>" hidden>
                <textarea placeholder="Message" name="message"></textarea>
                <input type="submit" value="Send" name="send_message">
            </form>
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
        <a class="" href="profile.php"><i class="fa fa-user"></i></a>
    </div>

    <button onclick="" class="btn-floating"><i class="fa fa-magic"></i></button>
</body>
<script src="script.js"></script>
</html>