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

    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); */
    * {
      font-family: 'Poppins', sans-serif;
    }

    body1 {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #131313;
    }

    .container {
      position: relative;
    }

    .container .card {
      position: relative;
      width: 320px;
      height: 450px;
      background: #232323;
      border-radius: 20px;
      overflow: hidden;
    }

    .container .card:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #9bdc28;
      clip-path: circle(150px at 80% 20%);
      transition: 0.5s ease-in-out;
    }

    .container .card:hover:before {
      clip-path: circle(300px at 80% -20%);
    }

    .container .card:after {
      content: '';
      position: absolute;
      top: 30%;
      left: -20%;
      font-size: 12em;
      font-weight: 800;
      font-style: italic;
      color: rgba(255, 255, 25, 0.05)
    }

    .container .card .imgBx {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 10000;
      width: 100%;
      height: 220px;
      transition: 0.5s;
    }

    .container .card:hover .imgBx {
      top: 0%;
      transform: translateY(0%);

    }

    .container .card .imgBx img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) rotate(-25deg);
      width: 270px;
    }

    .container .card .contentBx {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 100px;
      text-align: center;
      transition: 1s;
      z-index: 10;
    }

    .container .card:hover .contentBx {
      height: 210px;
    }

    .container .card .contentBx h2 {
      position: relative;
      font-weight: 600;
      letter-spacing: 1px;
      color: #fff;
      margin: 0;
    }

    .container .card .contentBx .size,
    .container .card .contentBx .color {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 8px 20px;
      transition: 0.5s;
      opacity: 0;
      visibility: hidden;
      padding-top: 0;
      padding-bottom: 0;
    }

    .container .card:hover .contentBx .size {
      opacity: 1;
      visibility: visible;
      transition-delay: 0.5s;
    }

    .container .card:hover .contentBx .color {
      opacity: 1;
      visibility: visible;
      transition-delay: 0.6s;
    }

    .container .card .contentBx .size h3,
    .container .card .contentBx .color h3 {
      color: #fff;
      font-weight: 300;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-right: 10px;
    }

    .container .card .contentBx .size span {
      width: 26px;
      height: 26px;
      text-align: center;
      line-height: 26px;
      font-size: 14px;
      display: inline-block;
      color: #111;
      background: #fff;
      margin: 0 5px;
      transition: 0.5s;
      color: #111;
      border-radius: 4px;
      cursor: pointer;
    }

    .container .card .contentBx .size span:hover {
      background: #9bdc28;
    }

    .container .card .contentBx .color span {
      width: 20px;
      height: 20px;
      background: #ff0;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
    }

    .container .card .contentBx .color span:nth-child(2) {
      background: #9bdc28;
    }

    .container .card .contentBx .color span:nth-child(3) {
      background: #03a9f4;
    }

    .container .card .contentBx .color span:nth-child(4) {
      background: #e91e63;
    }

    .container .card .contentBx a {
      display: inline-block;
      padding: 10px 20px;
      background: #fff;
      border-radius: 4px;
      margin-top: 10px;
      text-decoration: none;
      font-weight: 600;
      color: #111;
      opacity: 0;
      transform: translateY(50px);
      transition: 0.5s;
      margin-top: 0;
    }

    .container .card:hover .contentBx a {
      opacity: 1;
      transform: translateY(0px);
      transition-delay: 0.75s;

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
      <div class="container-fluid">
        <li>
          <p style="margin-top:13px; margin-left:10px; color:pink;">Thai Run</p>
        <li>
          <a href="/welcome_message.php">หน้าแรก</a>
        <li><a href="\adddataregister" class="btn btn-warning" style="margin-top:7px; color:white;">ลงทะเบียนวิ่ง</a></li>
        <li>
          <?php $session = session(); ?>
          <h5 class="user me-3" style="margin-top:13px; margin-left:780px; color:white;">Name :
            <?php echo $session->get('name') ?>
          </h5>
        </li>
        <li><a href="/index.php" class="btn btn-danger" style="margin-top:7px; margin-left:10px;">ออกจากระบบ</a></li>
      </div>
    </nav>
  </ul>

  <div class="container" style="margin-top: 20px;">
    <div class="card">
      <div class="imgBx">
        <img src="https://images.pexels.com/photos/618612/pexels-photo-618612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
      </div>
      <div class="contentBx">
        <h2>Category</h2>
        <div class="size">
          <h3>ID : 1</h3>
        </div>
        <div class="color">
          <h3>Name : FUN RUN</h3>
        </div>
        <div class="color">
          <h3>Lenght : 3K</h3>
        </div>
        <div class="color">
          <h3>Price : 550</h3>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-center text-lg-start" style="margin-top: 40px;">
    <div class="text-center p-3" style="background-color:dark; color:white;">Chotika 010 :
      <a class="text-white" href="http://pgm.npru.ac.th/se/">http://pgm.npru.ac.th/se/</a>
    </div>
  </footer>

</body>

</html>