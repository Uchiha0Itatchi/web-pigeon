<?php
  require_once "controllerUserData.php";
	if(!isset($_SESSION['unique_id'])) {
		header("location: login.php");
	}

  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");

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
    <title>Edit Profile | Web Pigeon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/popup.css">
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

    <main class="container profile">
        <section class="user-data">
            <div class="img-container">
                <div class="cover"></div>
                <img src="images/<?php echo $image?>">
                
            </div>
            <div class="text-container">
                <div>
                    <h1><?php echo $row['username']?></h1>
                    <p>Hello, I'm using Web Pigeon</p>
                </div>
                <div class="profile-btns">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <button type="button" id="myBtn"><i class="fa fa-plus-circle"></i> Upload Picture</button>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span class="close">&times;</span>
                                </div>
                                <div class="modal-body">
                                    <input type="file" name="image" class="imgfile" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                    <button type="submit" name="upload" class="next action-button" >Upload</button> <button type="button" name="previous" class="previous action-button-previous">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button><i class="fa fa-image"></i> Use an avatar</button>
                </div>
            </div>
        </section>

        <section class="container edit">
            <section>
                <form method="POST" autocomplete="">
                    <h1>Edit Profile</h1>
                    <p>Change your account information.</p>
                    <label>Enter your username:</label>
                    <input type="text" class="txt" placeholder="Username" value="<?php echo $row['username']?>" name="username">
                    <label>Enter your bio:</label>
                    <input type="text" class="txt" placeholder="Bio" value="<?php echo $row['bio']?>" name="bio">
                    <label>Enter your email:</label>
                    <input type="email" class="txt" placeholder="Email" value="<?php echo $row['email']?>" name="email">
                    <input type="submit" class="btn" value="Save" name="profile_edit">
                </form>
            </section>
        </section>
    </main>

    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="by">
                <span>© 2022 Copyright : Ahmed Saber</span>
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
<script src="js/popup.js"></script>
</html>