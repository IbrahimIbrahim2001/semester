<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>الحساب الشخصي</title>
</head>

<body>
    <main>
        <!-- first navbar will be visible on all screens except small screen -->
        <nav class="navbar d-none d-sm-flex navbar-expand navbar-fixed-right align-items-start">
            <div class="container-fluid  p-0 flex-column align-items-start">
                <a class="navbar-brand" href="#">عنوان</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav flex-column gap-1 p-0 me-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../home/index.php">
                                <i class="fa-solid fa-house"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fa-solid fa-user"></i>
                                الحساب الشخصي
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Order list/index.php">
                                <i class="fa-solid fa-bag-shopping"></i>
                                قائمة الطلبات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about/index.php">
                                <i class="fa-solid fa-circle-question"></i>
                                حول
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../home/logout.php">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                تسجيل الخروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- second navbar will be visible on small screen only -->
        <nav class="navbar d-sm-none bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">عنوان</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">عنوان</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="../home/index.php">
                                    <i class="fa-solid fa-house"></i>
                                    الرئيسية
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fa-solid fa-user"></i>
                                    الحساب الشخصي
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../Order list/index.php">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    قائمة الطلبات
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about/index.php">
                                    <i class="fa-solid fa-circle-question"></i>
                                    حول
                                </a>
                            <li class="nav-item">
                                <a class="nav-link" href="../home/logout.php">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    تسجيل الخروج
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!---------------------------------->
        <div class="container">
            <h1 class="text-center">Edit Your Profile</h1>
            <!-- <form action="" class="needs-validation w-50 m-auto" novalidate>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="name-doc" name="name-doc"
                        placeholder="Your name" style="background-position: calc(.375em + .1875rem);">
                    <label for="name-doc">user name</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="name-doc" name="name-doc"
                        placeholder="Your name" style="background-position: calc(.375em + .1875rem);">
                    <label for="name-doc">your Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Your password" style="background-position: calc(.375em + .1875rem);">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control is-invalid " id="phone" name="phone"
                        placeholder="Your phone number" style="background-position: calc(.375em + .1875rem);">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="clinic-name" name="clinic-name"
                        placeholder="Your clinic name" style="background-position: calc(.375em + .1875rem);">
                    <label for="clinic-name">Clinic Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="clinic-address" name="clinic-address"
                        placeholder="Your clinic address" style="background-position: calc(.375em + .1875rem);">
                    <label for="clinic-address">Clinic Address</label>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form> -->
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="doc_info.js"></script>
</body>

</html>