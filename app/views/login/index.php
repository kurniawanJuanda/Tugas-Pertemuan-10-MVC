<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">

    <title>Login Sistem | PBWL Project10</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-6 shadow p-5 rounded">

                <h2>Login Sistem</h2>
                <form action="<?php echo URL; ?>/login/proses" method="post">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
                    <div class="alert alert-danger mt-3">
                        Login tidak ditemukan
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>