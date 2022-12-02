<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <link href="css/w3s.css" rel="stylesheet" />

  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }

      .home{
        text-decoration: none;
        border: 1px solid #404F5E;
        margin-top: 20px;
        padding: 5px !important;
        border-radius: 10px;
        cursor: pointer;
      }

      .home:hover{
        background-color: #9ABC66;
        transition: 0.3s ease-in-out;
      }
    </style>
    <body>
      <div class="card w3-animate-zoom">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Successfully Registered</p>
        <div class="home" onclick="home();">Home</div>
      </div>

      <script>
        function home(){
          window.location = "index.php";
        }
      </script>
    </body>
</html>
