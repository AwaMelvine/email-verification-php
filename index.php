<?php include 'controllers/authController.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>User verification system PHP</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 home-wrapper">

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          You need to verify your email address!
          Sign into your email account and click
          on the verification link we just emailed you
          at <strong><?php echo $_SESSION['email']; ?></strong>
        </div>

        <button class="btn btn-lg btn-primary btn-block">I'm verified!!!</button>
      </div>
    </div>
  </div>
</body>
</html>
