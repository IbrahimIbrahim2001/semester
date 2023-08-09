<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/about.css">
    <title>Document</title>
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
                            <a class="nav-link " href="../home/index.php">
                                <i class="fa-solid fa-house"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../profile-doc/index.php">
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
                            <a class="nav-link active " href="../about/index.php">
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
                                <a class="nav-link" href="../profile-doc/index.php">
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
                                <a class="nav-link active" href="../about/index.php">
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
        <!------------------------------- -->
        <div class="cover d-flex justify-content-center align-items-center text-light">
            <div class="bg-img"></div>
            <div class="container-fluid">
                <div class="intro text-center">
                    <h1 class="display-2 mb-5">اسمح لنا بتقديم أنفسنا</h1>
                    <div class="round">
                        <a href="#about" class="text-white fs-1">
                            <i class="fa-solid fa-circle-arrow-down fa-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section id="about" class="position-relative">
            <div class="container-fluid text-white d-flex align-items-center p-5" style="min-height: 100vh">
                <div class="row">
                    <p class="fs-5 col-lg-7 col-md-10 mt-3 mt-sm-0">
                        تتيح هذه الشركة تنسيق العمل بين المخبر والطبيب المعالج لضمان أن يحصل المرضى على التعويضات السنية
                        المناسبة
                        والتي تتناسب
                        مع حالاتهم الصحية.
                        <br>
                        <br> يمكن للشركة تقديم خدمات التواصل بين المخبر والطبيب المعالج ، والتحقق من جودة التعويضات
                        المنتجة ،
                        وتقديم الدعم اللازم لأطباء الأسنان و المخابر .
                        <br>
                        <br>
                        يمكن للشركة أيضًا توفير خدمات المساعدة في تقديم التعويضات السنية لتلبية احتياجات المرضى ، وتحديد
                        التكاليف .
                        <br>
                        <br>
                        بالإضافة إلى ذلك ، تعمل الشركة على تسهيل وتحسين تجربة الأطباء والحد من احتمالية الخطأ الطبي
                        وتوفير الوقت
                        والجهد لكل من
                        المرضى والمختصين.
                        <br>
                        <br>
                        بشكل عام ، تساعد الشركة على تحسين جودة الرعاية الصحية السنية وتسهيل الوصول إلى العناية الصحية
                        للمرضى.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>