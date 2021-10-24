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
            <li><a href="\login" class="btn btn-success" style="margin-top:7px; color:white; margin-left:960px;">เข้าสู่ระบบ</a></li>
        </nav>
    </ul>
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1 style="color:white">สมัครสมาชิก</h1>
                <br>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label" style="color:white">ID Card Number</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label" style="color:white">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label" style="color:white">Age</label>
                        <input type="text" name="age" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label" style="color:white">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label" style="color:white">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label" style="color:white">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">สมัคร</button>
                    <a href="/index.php" class="btn btn-danger me-1" style="margin-left: 10px">ยกเลิก</a>
                </form>
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
