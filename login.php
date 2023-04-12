<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        html, 
        body {
        height: 100%;
        }
        body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex; -ms-flex-align: center; -ms-flex-pack: center; -webkit-box-align: center;
        align-items: center; -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        }
        .form-signin {
        width: 100%;
        max-width: 620px;
        padding: 15px;
        margin: 0 auto;
        }
        </style>
    </head>
    <body>
        <form class="form-signin" action="cek_login.php" method="POST">
            <h4>Login Form</h4>
            <hr>
            <div class="alert alert-primary" role="alert"> Silahkan masukan userna dan password untuk login </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" palceholder="username" class="form-control">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" placeholder="password" class="form-control"></div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ingat Saya</label></div>
            <button type="submit" class="btn btn-primary">Masuk Sistem</button>
            </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0- alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384- w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>