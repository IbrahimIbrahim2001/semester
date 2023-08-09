<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/add_clinic.css">
    <title>إضافة مخبر</title>
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
                            <a class="nav-link" href="../notification/index.php">
                                <i class="fa-solid fa-bell"></i>
                                اشعارات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-gear"></i>
                                تعديل قائمة المخابر
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fa-solid fa-circle-plus"></i>
                                اضافة مخبر
                            </a>
                        </li>
                        <!-- <li class="nav-item me-1">
              <a class="nav-link" href="#">
                <i class="fa-sharp fa-solid fa-dollar-sign"></i>
                تعديل قائمة الأسعار
              </a>
            </li> -->
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
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-bell"></i>
                                    اشعارات
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-gear"></i>
                                    تعديل قائمة المخابر
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    اضافة مخبر
                                </a>
                            </li>
                            <!-- <li class="nav-item me-1">
                                <a class="nav-link" href="#">
                                    <i class="fa-sharp fa-solid fa-dollar-sign"></i>
                                    تعديل قائمة الأسعار
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!------------------------------->
        <div class="container">
            <form action="addNewLab.php" method="post" class="needs-validation w-75 m-auto" novalidate>
                <div class="form-floating mb-3">
                    <!-- the style below is for the (!) in the invalid input .. it will go left instead of right -->
                    <input type="text" class="form-control is-invalid" id="clinic_name" name="clinic_name" required
                        placeholder="اسم المخبر" required style="background-position: calc(.375em + .1875rem);">
                    <label for="clinic_name">اسم المخبر</label>
                    <!-- <div class="invalid-feedback">
                        حدث خطأ ما ، الرجاء إدخال اسم صالح.
                    </div> -->
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="doc_name" name="doc_name" required
                        placeholder="اسم المخبري" required style="background-position: calc(.375em + .1875rem);">
                    <label for="doc_name">اسم المخبري</label>
                    <!-- <div class="invalid-feedback">
                        حدث خطأ ما ، الرجاء إدخال اسم صالح.
                    </div> -->
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="phone_number" name="phone_number" required
                        pattern="09\d{8}" placeholder="رقم الهاتف" required
                        style="background-position: calc(.375em + .1875rem);">
                    <label for="phone_number">رقم الهاتف</label>
                    <!-- <div class="invalid-feedback">
                        الرجاء ادخال رقم صالح .. يجب أن يبدأ ب 09 , و مؤلف من عشر أرقام .
                    </div> -->
                </div>
                <div class="row justify-content-between">
                    <div class="form-floating col-12 col-md-5 mb-3">
                        <select name="type" id="type" class="form-select" required>
                            <option value="ثابتة">تعويضات ثابتة</option>
                            <option value="متحركة">تعويضات متحركة</option>
                            <option value="ثابتة ومتحركة">تعويضات ثابتة / متحركة</option>
                        </select>
                        <label for="type">نوع المخبر</label>
                    </div>
                    <div class="form-floating col-12 col-md-5 mb-3">
                        <select name="location" id="location" class="form-select" required>
                            <option value="lattakia">اللاذقية</option>
                            <option value="tartus">طرطوس</option>
                            <option value="damascus">دمشق</option>
                            <option value="suwayda">السويداء</option>
                            <option value="hama">حماة</option>
                            <option value="homs">حمص</option>
                            <option value="aleppo">حلب</option>
                            <option value="raqqa">الرقة</option>
                            <option value="daraa">درعا</option>
                            <option value="deir_ezor">دير الزور</option>
                            <option value="hasakah">الحسكة</option>
                            <option value="idlib">ادلب</option>
                            <option value="quneitra">القنيطرة</option>
                            <option value="quneitra">ريف دمشق</option>
                        </select>
                        <label for="location">الموقع</label>
                    </div>
                </div>
                <button class="btn custom w-100 border-0 text-white" type="submit">
                    إضافة
                </button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>