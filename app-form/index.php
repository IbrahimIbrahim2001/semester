<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app-form.css">
    <title>Document</title>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center">
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
                            <a class="nav-link active" href="../home/index.php">
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
        <nav class="navbar d-sm-none  bg-body-tertiary fixed-top">
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
                                <a class="nav-link active" href="../home/index.php">
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
        <div class="container ">
            <h4 class="w-50 m-auto mb-3">استمارة الطلب:</h4>
            <form action="order.php" method="post" class="needs-validation w-75 m-auto" novalidate>
                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control" id="doc_name" name="doc_name" placeholder=" اسم الطبيب"
                        required style="background-position: calc(.375em + .1875rem);">
                    <label for="doc_name">اسم الطبيب</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pat_name" name="pat_name" placeholder="ادخل اسم المريض"
                        required style="background-position: calc(.375em + .1875rem);">
                    <label for="pat_name">اسم المريض</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lab_name" name="lab_name" placeholder="اسم المخبر"
                        required style="background-position: calc(.375em + .1875rem);">
                    <label for="lab_name">اسم المخبر</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="lab_type" id="lab_type" class="form-select" required>
                        <option value="ثابتة">تعويضات ثابتة</option>
                        <option value="متحركة">تعويضات متحركة</option>
                        <option value="ثابتة ومتحركة">تعويضات ثابتة / متحركة</option>
                    </select>
                    <label for="lab_type">نوع المخبر</label>
                </div>
                <div class="form-group">
                    <h4> يرجى تحديد المواد المطلوبة: </h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <input class="form-check-input" type="checkbox" name="materials[]" value="صب الطبعة"
                                    id="material1">
                                <label class="form-check-label" for="صب الطبعة">
                                    <h6> صب الطبعة $12</h6>
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" name="materials[]" value="تجربة المعدن"
                                    id="material2">
                                <label class="form-check-label" for="تجربة المعدن">
                                    <h6> تجربة المعدن $15</h6>
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" name="materials[]" value="التخزيف"
                                    id="material3">
                                <label class="form-check-label" for="التخزيف">
                                    <h6> التخزيف $22</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value="تلبيسة"
                                    id="material4">
                                <label class="form-check-label" for="تلبيسة">
                                    <h6> تلبيسة $22</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value="تلبيسة معدن"
                                    id="material25">
                                <label class="form-check-label" for="تلبيسة معدن">
                                    <h6> تلبيسة معدن $12</h6>
                                </label>
                            </div>
                            <!-- <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material5">
                                <label class="form-check-label" for="material5">
                                    <h6> تلبيسة خزف $12</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material6">
                                <label class="form-check-label" for="material6">
                                    <h6> onlay حشوة مصبوبة $18 </h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material7">
                                <label class="form-check-label" for="material7">
                                    <h6> inlay حشوة مصبوبة $11 </h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material8">
                                <label class="form-check-label" for="material8">
                                    <h6> صب وتد $12</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material9">
                                <label class="form-check-label" for="material9">
                                    <h6> قلب وتد $26</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material10">
                                <label class="form-check-label" for="material10">
                                    <h6> وجه تجميلي خزف $19</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material11">
                                <label class="form-check-label" for="material11">
                                    <h6> وجه تجميلي زيركون $17</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material12">
                                <label class="form-check-label" for="material12">
                                    <h6> وجه تجميلي كومبوست $20</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material13">
                                <label class="form-check-label" for="material13">
                                    <h6> جهاز تقويمي ثابت $21</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material14">
                                <label class="form-check-label" for="material14">
                                    <h6> حافظة مسافة ثابتة $16</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material15">
                                <label class="form-check-label" for="material15">
                                    <h6> طابع افرادي علوي $12</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material16">
                                <label class="form-check-label" for="material16">
                                    <h6> طابع افرادي سفلي $13</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material17">
                                <label class="form-check-label" for="material17">
                                    <h6> طابع افرادي ع+س $23</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material18">
                                <label class="form-check-label" for="material18">
                                    <h6> صفيحة قاعدية علوية $16</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material19">
                                <label class="form-check-label" for="material19">
                                    <h6> صفيحة قاعدية سفلية $19</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material20">
                                <label class="form-check-label" for="material20">
                                    <h6> صفيحة قاعدية ع+س $26</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material21">
                                <label class="form-check-label" for="material21">
                                    <h6> تنضيد الأسنان علوي $13</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material22">
                                <label class="form-check-label" for="material22">
                                    <h6> تنضيد الأسنان سفلي $11</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material23">
                                <label class="form-check-label" for="material23">
                                    <h6> تنضيد الأسنان ع+س $25</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material24">
                                <label class="form-check-label" for="material24">
                                    <h6> تشميع الجهاز علوي $13</h6>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material26">
                                <label class="form-check-label" for="material26">
                                    <h6> تشميع الجهاز سفلي $13</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material27">
                                <label class="form-check-label" for="material27">
                                    <h6> تشميع الجهاز ع+س $24</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material28">
                                <label class="form-check-label" for="material28">
                                    <h6> طبخ الجهاز علوي $13</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material29">
                                <label class="form-check-label" for="material29">
                                    <h6> طبخ الجهاز سفلي $16</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material30">
                                <label class="form-check-label" for="material30">
                                    <h6> طبخ الجهاز ع+س $28</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material31">
                                <label class="form-check-label" for="material31">
                                    <h6> بدلة اكريلية كاملة علوية $25</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material32">
                                <label class="form-check-label" for="material32">
                                    <h6> بدلة اكريلية كاملة سفلية $23</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material33">
                                <label class="form-check-label" for="material33">
                                    <h6> بدلة اكريلية كاملة ع+س $49</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material34">
                                <label class="form-check-label" for="material34">
                                    <h6> تصليب الجهاز علوي $12</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material35">
                                <label class="form-check-label" for="material35">
                                    <h6> تصليب الجهاز سفلي $11</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material36">
                                <label class="form-check-label" for="material36">
                                    <h6> تصليب الجهاز ع+س $22</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material37">
                                <label class="form-check-label" for="material37">
                                    <h6> بدلة معدنية كاملة علوية $25</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material38">
                                <label class="form-check-label" for="material38">
                                    <h6> بدلة معدنية كاملة سفلية $23</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material39">
                                <label class="form-check-label" for="material39">
                                    <h6> بدلة معدنية كاملة ع+س $40</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material40">
                                <label class="form-check-label" for="material40">
                                    <h6> ضمات علوية $10</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material41">
                                <label class="form-check-label" for="material41">
                                    <h6> ضمات سفلية $8</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material42">
                                <label class="form-check-label" for="material42">
                                    <h6> ضمات ع+س $20</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material43">
                                <label class="form-check-label" for="material43">
                                    <h6> بدلة اكريلية جزئية علوية $15</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material44">
                                <label class="form-check-label" for="material44">
                                    <h6> بدلة اكريلية جزئية سفلية $12</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material45">
                                <label class="form-check-label" for="material45">
                                    <h6> بدلة اكريلية جزئية ع+س $27</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material46">
                                <label class="form-check-label" for="material46">
                                    <h6> بدلة معدنية جزئية علوية $26</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material47">
                                <label class="form-check-label" for="material47">
                                    <h6> بدلة معدنية جزئية سفلية $23</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material48">
                                <label class="form-check-label" for="material48">
                                    <h6> بدلة معدنية جزئية ع+س $46</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material49">
                                <label class="form-check-label" for="material49">
                                    <h6> جهاز تقويمي متحرك $30</h6>
                                </label>
                            </div>
                            <div class="">
                                <input class="form-check-input" type="checkbox" name="materials[]" value=""
                                    id="material50">
                                <label class="form-check-label" for="material50">
                                    <h6> حافظة مسافة متحركة $32</h6>
                                </label>
                            </div>
                        </div> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rec_date">
                            <h4>تاريخ الاستلام</h4>
                        </label>
                        <input type="rec_date" name="rec_date" class="form-control mb-3" id="rec_date"
                            placeholder="31-7-2023">
                    </div>
                    <h5 class="mb-3">في حال الموافقة على الطلب سيتم ابلاغك بموعد ارسال الطبعة</h5>
                    <button type="submit" class="btn btn-primary w-25 border-0 text-white mb-3">ارسال الطلب</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>