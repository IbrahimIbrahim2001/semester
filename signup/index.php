<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <title>Document</title>

    <!-- Custom CSS -->
    <style>
    .container {
        margin-top: 50px;
    }

    @media (max-width: 575px) {
        .form-group {
            margin-bottom: 20px;
        }
    }

    button {
        position: relative;
        left: 50%;
        transform: translate(-50%, 0);
    }
    </style>

</head>

<body>
    <div class="container-sm">
        <h2 class="text-center mb-5">Signup Form</h2>
        <form action="signup.php" method="post" id="form">
            <div class="row mb-3 justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                        required minlength="4" pattern="[a-zA-Z0-9]*[a-zA-Z]+[a-zA-Z0-9]*" data-toggle="tooltip"
                        data-placement="top" title="Username must be unique" />
                </div>
                <div class=" col-sm-6 col-md-6 col-lg-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required minlength="8" data-toggle="tooltip" data-placement="top"
                        title="Password must be at least 8 characters long." />
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-3">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required
                        pattern="^\+9639[0-9]{8}$" data-toggle="tooltip" data-placement="top"
                        title="Phone number must start with +9639XXXXXXXX." />
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor Name"
                        required />
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-3">
                    <input type="text" class="form-control" id="clinic" name="clinic" placeholder="Clinic Name"
                        required />
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Clinic Address"
                        required />
                </div>
            </div>
            <div class="row mb-3 justify-content-md-center">
                <div class="col-sm-6 col-md-12 col-lg-8">
                    <div class="">
                        <label class="form-label align">Gender:</label>
                    </div>
                    <div class="">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                required />
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                                required />
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary align-self-center" id="submit">
                Submit
            </button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>