<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/admin_signin.css" />
    <title>Document</title>
</head>

<body>
    <main class="overflow-hidden position-relative">
        <div class="container position-relative">
            <div class="row justify-content-center align-items-center row-custom">
                <div class="col-11 col-sm-8 col-md-6 col-lg-5 border border-3 rounded p-4 signin">
                    <h1 class="h1">EXAMPLE</h1>
                    <h3 class="h3 fw-semibold fs-3">Hey , welcome back admin ..</h3>
                    <form action="admin_login.php" method="post" class="needs-validation" novalidate>
                        <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
                        <p style="color: red;">Incorrect username or password. Please try again.</p>
                        <?php } ?>
                        <div class="mb-2 mb-md-3">
                            <label for="user_name" class="form-label">Username</label>
                            <input type="text" name="user_name" id="user_name" class="form-control" required />
                            <div class="invalid-feedback">
                                We're sorry, but the username you entered is invalid .
                            </div>
                        </div>
                        <div class="mb-2 mb-md-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required />
                            <div class="invalid-feedback">
                                We're sorry, but the password you entered is incorrect.
                            </div>
                        </div>
                        <div class="form-check mb-2 mb-md-3">
                            <input type="checkbox" name="remember_me" id="remember" class="form-check-input" />
                            <label for="remember" class="form-check-label">Remember me</label>
                        </div>
                        <button class="btn custom w-100 border-0 text-white" type="submit">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="position-absolute setting-right">
            <img src="images/settings.svg" alt="error" class="img-fluid" />
        </div>
        <div class="position-absolute setting-left">
            <img src="images/wrench-svgrepo-com.svg" alt="error" class="img-fluid" />
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>