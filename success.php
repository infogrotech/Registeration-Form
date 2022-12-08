<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IGT Internship</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/logo_1.ico">


  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

  <style>
    body {
      text-align: center;
      padding: 40px 0;
      background: rgb(238, 174, 202);
      background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
    }

    h1 {
      color: #005d89;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-weight: 900;
      font-size: 40px;
      margin-bottom: 10px;
    }

    p {
      color: #404F5E;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-size: 20px;
      margin: 0;
    }

    i {
      color: #005d89;
      font-size: 100px;
      line-height: 200px;
      margin-left: -15px;
    }

    .card {
      background: white;
      padding: 60px;
      border-radius: 4px;
      box-shadow: 0 2px 3px #C8D0D8;
      display: inline-block;
      margin: 0 auto;
    }

    .home {
      text-decoration: none;
      border: 1px solid #005d89;
      margin-top: 20px;
      padding: 5px !important;
      border-radius: 10px;
      cursor: pointer;
    }

    .home:hover {
      background-color: #005d89;
      color: #fff;
      transition: 0.3s ease-in-out;
    }

    .card {
      box-shadow: rgba(148, 187, 233, 0.25) 0px 30px 60px -12px inset, rgba(148, 187, 233, 0.3) 0px 18px 36px -18px inset;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center h-100 mt-5">
    <div class="col-md-4 col-lg-5 col-xl-6">

      <div class="card w3-animate-zoom">
        <a class="navbar-brand " href="index.php"><img src="images/logo_1.png" alt="logo" width="250" height="200"></a>
        <div style="border-radius:200px; height:170px; width:190px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>Successfully Registered</p>
        <div class="home" onclick="home();">Home</div>
      </div>

    </div>
  </div>
</body>

<script>
  function home() {
    window.location = "index.php";
  }
</script>

</html>
