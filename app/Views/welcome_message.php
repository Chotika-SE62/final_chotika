<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link href="index.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <title>RUN</title>

  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      border: 1px solid #e7e7e7;
      background-color: #31272733;
    }

    body {
      padding: 0px 0px;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: rgb(255, 255, 255);
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;

    }

    li a:hover:not(.active) {
      background-color: #ddd;
    }

    li a.active {
      color: rgb(15, 13, 13);
      background-color: #04AA6D;
    }

    body {
      margin: 0;
      padding: 2rem 5rem;
      text-align: center;
      background-image: url(https://images.pexels.com/photos/3763869/pexels-photo-3763869.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
      width: 100%;
      height: 100%;
      color: rgb(0, 0, 0);
      font-family: "helvetica neue", sans-serif;
      font-weight: 100;
      font-size: 16px;
    }

    footer {
      background-color: #31272733;
      padding: 10px;
      text-align: center;
      color: rgb(0, 0, 0);
    }
  </style>

</head>

<body>
  <ul>
    <nav class="nav navbar-dark bg-dark">
      <li>
        <p style="margin-top:13px; margin-left:10px; color:pink;">Thai Run</p>
      <li>
      <li><a href="welcome_message.php">หน้าแรก</a></li>
      <li><a href="\adddataregister" class="btn btn-warning" style="margin-top:7px; color:white;">ลงทะเบียนวิ่ง</a></li>
      <li><a href="\login" class="btn btn-success" style="margin-top:7px; color:white; margin-left:850px;">เข้าสู่ระบบ</a></li>
      <li><a href="\register" class="btn btn-primary" style="margin-top:7px; color:white; margin-left:10px;">สมัครสมาชิก</a></li>
    </nav>
  </ul>

  <div class="container">
    <center>
      <div style="width:1000px; height:500px;">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>
          <br></br>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.pexels.com/photos/1571939/pexels-photo-1571939.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card__image" alt="" class="d-block" style="width:1000px; height:450px;">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/2526878/pexels-photo-2526878.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card__image" alt="" class="d-block" style="width:1000px; height:450px;">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/2083500/pexels-photo-2083500.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card__image" alt="" class="d-block" style="width:1000px; height:450px;">
              <div class="carousel-caption">
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
    </center>
  </div>
  <br>

  <footer class="bg-dark text-center text-lg-start" style="margin-top: 40px;">
    <div class="text-center p-3" style="background-color:dark; color:white;">Chotika 010 :
      <a class="text-white" href="http://pgm.npru.ac.th/se/">http://pgm.npru.ac.th/se/</a>
    </div>
  </footer>

</body>

</html>
