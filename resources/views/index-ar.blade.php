<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EQUIVALENCE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="{{ asset('assets/css/style-ar.css') }}" rel="stylesheet">



</head>

<body>

    <!-- ======= Header ======= -->
    <!-- شريط التنقل لسطح المكتب (مخفي على الأجهزة المحمولة) -->
    <header id="header" class="fixed-top d-flex align-items-center d-none d-lg-flex">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="{{ route('welcome') }}">Equivalence</a></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}#hero">الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}#about">حول</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}#Features">الميزات</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}#howItWorks">كيفية الاستخدام</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            تسجيل الدخول
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="loginDropdown"
                            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%)">
                            <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">تسجيل
                                    الدخول</a></li>
                            <li><a class="dropdown-item text-white"
                                    href="{{ route('applicant.register') }}">التسجيل</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}#faq">الأسئلة الشائعة</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDrobdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            اللغة
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="languageDrobdown"
                            style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%) ">
                            <li><a class="dropdown-item text-white" href="{{ route('welcome') }}">الإنجليزية</a></li>
                            <li><a class="dropdown-item text-white" href="{{ route('welcome.ar') }}">العربية</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <nav id="mobile-navbar" class="d-lg-none navbar fixed-top shadow-lg rounded-4 rounded-top-0"
        style="background-color: #131c41">
        <div class="container-fluid w-100 d-flex flex-column align-items-center">
            <a class="navbar-brand text-center" href="{{ route('welcome') }}">
                <h1>Equivalence</h1>
            </a>

            <div class="w-100">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide nav-item">
                            <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#hero">الرئيسية</a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#about">حول</a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#Features">الميزات</a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#howItWorks">كيفية
                                الاستخدام</a>
                        </div>

                        <div class="swiper-slide nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-center" href="#" id="loginDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                تسجيل الدخول
                            </a>
                            <ul class="dropdown-menu text-center" aria-labelledby="loginDropdown"
                                style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%);">
                                <li><a class="dropdown-item text-white" href="{{ route('applicant.login') }}">تسجيل
                                        الدخول</a></li>
                                <li><a class="dropdown-item text-white"
                                        href="{{ route('applicant.register') }}">التسجيل</a></li>
                            </ul>
                        </div>

                        <div class="swiper-slide nav-item">
                            <a class="nav-link text-center scrollto" href="{{ route('welcome') }}#faq">الأسئلة
                                الشائعة</a>
                        </div>

                        <div class="swiper-slide nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="mobileLanguageDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                اللغة
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="mobileLanguageDropdown"
                                style="background: linear-gradient(0deg, rgb(42, 44, 57) 0%, rgb(51, 54, 74) 100%)">
                                <li><a class="dropdown-item text-white" href="{{ route('welcome') }}">الإنجليزية</a>
                                </li>
                                <li><a class="dropdown-item text-white" href="{{ route('welcome.ar') }}">العربية</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center"
        style="background-image: url({{ asset('assets/img/hero.png') }});background-size: cover">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade"
            data-bs-ride="carousel">


            <!-- Slide 1 -->
            <div class="carousel-item active ">
                <div class="carousel-container">
                    <div class="mb-3"> <img src="{{ asset('assets/img/logo.png') }}" alt="logo"></div>
                    <h3 class="animate__animated animate__fadeInDown fw-bold text-white">MINISTRY OF HIGHER EDUCATION
                        AND SCIENTIFIC RESEARCH</h3>
                    <p class="animate__animated fanimate__adeInUp fs-3  m-0 p-0" id="arabic">وزارة التعليم العالي و
                        البحث
                        العلمي
                    </p>
                    <p class="animate__animated fanimate__adeInUp fs-5 m-0 p-0" id="arabic"> ⴰⵖⵍⵉⴼ ⵏ ⵓ ⵙⴻⵍⵎⴻⴷ ⵓⵏⵏⵉⴳ
                        ⴷ
                        ⵓⵏⴰⴷⵉ
                        ⵓⵙⵙⵏⴰⵏ
                    </p>
                    <a href="#about"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto text-decoration-none">Read
                        More</a>
                </div>
            </div>



            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    <h2 class="animate__animated animate__fadeInDown">Equivalence</h2>
                    <p class="animate__animated animate__fadeInUp">"منصتنا تبسط عملية تقييم واعتماد مؤهلاتك الأكاديمية،
                        مما يضمن تجربة سلسة لسيرتك التعليمية والمهنية."






                    </p>
                    <a href="#about"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto text-decoration-none">اعرف
                        المزيد</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d=" M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about my-5">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>عن</h2>
                    <p>من نحن</p>
                </div>

                <div class="row content " data-aos="fade-up">
                    <div class="col-lg-6">
                        <p>
                            EQUIVALENCE هي منصة تم تطويرها لصالح وزارة التعليم العالي والبحث العلمي، مكرسة لتبسيط عملية
                            معادلة الد diplomas للطلاب والخريجين والمهنيين. مهمتنا هي تقديم منصة آمنة وسهلة وفعالة تنسق
                            تقييم والاعتراف بالمؤهلات الأكاديمية محليًا ودوليًا.
                        </p>
                        <ul>
                            <li>
                                {{-- <i class="ri-check-double-line"></i> --}}
                                تسهيل التنقل: نعتقد في تسهيل التنقل التعليمي
                                والمهني من خلال تقديم نظام موثوق للتحقق ومقارنة الد diplomas.
                            </li>
                            <li>
                                {{-- <i class="ri-check-double-line"></i> --}}
                                الخبرة في التعليم والتكنولوجيا: فريقنا يتكون من
                                خبراء في التعليم والتكنولوجيا وأمن البيانات.
                            </li>
                            <li>
                                {{-- <i class="ri-check-double-line"></i> --}}
                                الابتكار وتجربة المستخدم: من خلال التركيز على
                                الابتكار وتجربة المستخدم، نهدف إلى جعل رحلة الاعتراف بالد diplomas سلسة وقابلة للوصول
                                قدر الإمكان.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            الابتكار وتجربة المستخدم: من خلال التركيز على الابتكار وتجربة المستخدم، نهدف إلى جعل رحلة
                            الاعتراف بالد diplomas سلسة وقابلة للوصول قدر الإمكان.
                        </p>
                        <a href="https://www.mesrs.dz/index.php/en/home/" class="btn-learn-more">اعرف المزيد</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <div class="features " data-aos="fade-up" id="Features">

            <div class="container text-center w-75">
                <div class="section-title text-end" data-aos="zoom-out">
                    <h2>رئيسي</h2>
                    <p>الميزات</p>
                    <p class="text-muted fs-5">
                        الميزات الرئيسية لمنصة معادلة الد diplomas لدينا
                    </p>
                </div>

                <div class="row mb-5 pb-5 g-4">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="features--card d-flex justify-content-center align-items-center p-3 py-5 text-decoration-none">
                            <div class="text-center">
                                <i class="fa-brands fa-uikit"
                                    style="font-size: 64px; font-family: 'Raleway' !important,
                                    sans-serif;"></i>
                                <p class="mt-3">واجهة <br />مستخدم سهلة</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="features--card d-flex justify-content-center align-items-center p-3 py-5 text-decoration-none">
                            <div class="text-center">
                                <i class="fa-solid fa-user-lock features-icon" style="font-size: 64px"></i>
                                <p class="mt-3">
                                    نظام تحقق <br />
                                    آمن
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="features--card d-flex justify-content-center align-items-center p-3 py-5 text-decoration-none">
                            <div class="text-center">
                                <i class="fa-solid fa-graduation-cap features-icon" style="font-size: 64px"></i>
                                <p class="mt-3">تقييم <br />معادلة تلقائي</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ======= كhowItWorks ====== -->
        <section id="howItWorks" class="features">
            <div class="container">
                <ul class="nav nav-tabs row d-flex justify-content-center pb-3">
                    <li class="nav-item col-3" data-aos="zoom-in">
                        <a class="nav-link active show rounded-3" data-bs-toggle="tab" href="#tab-1">
                            <h4 class="d-none d-lg-block">الخطوة</h4>
                            <i class="fa-solid fa-0"></i>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link rounded-3" data-bs-toggle="tab" href="#tab-2">
                            <h4 class="d-none d-lg-block">الخطوة</h4>
                            <i class="fa-solid fa-1"></i>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link rounded-3" data-bs-toggle="tab" href="#tab-3">
                            <h4 class="d-none d-lg-block">الخطوة</h4>
                            <i class="fa-solid fa-2"></i>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link rounded-3" data-bs-toggle="tab" href="#tab-4">
                            <h4 class="d-none d-lg-block">الخطوة</h4>
                            <i class="fa-solid fa-3"></i>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>إنشاء حساب</h3>
                                <p>
                                    للقيام بأي عمليات على المنصة، يجب على المتقدم أولاً إنشاء حساب للحصول على اسم مستخدم
                                    وكلمة مرور. تضمن هذه الخطوة الأولية الوصول الآمن إلى جميع الخدمات والميزات الشخصية
                                    المتاحة على المنصة.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        اضغط على <a href="{{ route('applicant.register') }}">زر التسجيل</a> في العنوان
                                        للتسجيل
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        تحقق من بريدك الإلكتروني بعد التسجيل لتفعيل حسابك
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">تحليل مشكلات الوصول:</span> إذا لم تتلقَ رسالة التفعيل،
                                        تحقق من مجلد الرسائل غير المرغوب فيها أو تحقق من عنوان البريد الإلكتروني المقدم
                                        أثناء التسجيل. إذا كنت لا تزال تواجه مشكلة في الوصول إلى حسابك (مثل عدم تلقي
                                        رابط التفعيل، أو عدم تفعيل الحساب)، اتصل بخدمة المعادلة على sde@mesrs.dz.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>تسجيل الدخول</h3>
                                <p>
                                    بعد إنشاء حسابك وتفعيله، ستحتاج إلى تسجيل الدخول إلى المنصة للوصول إلى ميزاتها
                                    وخدماتها. تسجيل الدخول يضمن لك إدارة معلوماتك الشخصية بأمان وتتبع طلباتك.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">تسجيل الدخول إلى حسابك:</span> استخدم اسم المستخدم
                                        (البريد الإلكتروني) وكلمة المرور لتسجيل الدخول.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        إذا واجهت مشكلة في الوصول إلى حسابك، اتصل بخدمة المعادلة على sde@mesrs.dz.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>املأ النماذج المطلوبة</h3>
                                <p>
                                    بعد تسجيل الدخول وتقديم معلوماتك الشخصية، الخطوة التالية هي تعبئة جميع النماذج
                                    المطلوبة وتقديم طلب المعادلة الخاص بك. تشمل هذه العملية تقديم معلومات مفصلة عن
                                    دبلومك وتحميل المستندات اللازمة بالتنسيق المحدد.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">المعلومات الشخصية والنماذج:</span> قم بتعبئة جميع
                                        التفاصيل الشخصية بدقة وأكمل جميع النماذج الإلزامية المقدمة من المنصة.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">طلب جديد:</span> انقر على زر "طلب جديد".
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">معلومات الدبلوم:</span> قدم معلومات مفصلة عن الدبلوم الذي
                                        سيتم تقييمه للمعادلة.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">المستندات المطلوبة:</span> قدم المستندات اللازمة وفقاً
                                        للمرسوم. استشر المرسوم عبر الرابط:
                                        http://equiv.mesrs.dz:8080/ext-equiv/images/Circulaire_n_1260_fr.pdf.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">تنسيق PDF:</span> تأكد من تقديم جميع المستندات المطلوبة
                                        بصيغة PDF، بما في ذلك المعلومات الواردة في النماذج لكل مستند.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">تأكيد وطباعة:</span> قم بتأكيد تقديم طلبك واطبع إيصال
                                        تقديم الطلب.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>المعالجة والإشعارات</h3>
                                <p>
                                    بعد تقديم طلب المعادلة الخاص بك، ستقوم خدمات المعادلة في المنصة بمعالجة والتحقق من
                                    طلبك. بعد ذلك، سيتم إبلاغك بحالة ونتيجة طلبك.
                                </p>
                                <ul>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">معالجة الطلب:</span> يتم معالجة الطلبات والتحقق منها
                                        بواسطة خدمات المعادلة.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">إشعار الحالة:</span> بعد المعالجة، سيتم إشعارك بحالة طلبك
                                        عبر منصة المعادلة.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">موعد:</span> بمجرد توقيع طلب المعادلة، سيتم إعلامك
                                        بالموعد المقترح.
                                    </li>
                                    <li>
                                        <i class="ri-check-double-line"></i>
                                        <span class="fw-bold">تقديم المستندات:</span> عند استلام شهادة المعادلة، قدم
                                        النسخ الأصلية لجميع دبلوماتك.
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/features-4.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- نهاية قسم المميزات -->

        <!-- ======= قسم الدعوة للإجراء ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-out">
                    <div class="col-lg-9 text-center text-lg-end">
                        <h3>Equivalence</h3>
                        <p> قدم طلب معادلة شهادتك الآن</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ route('applicant.register') }}">سجل الآن</a>
                    </div>
                </div>

            </div>
        </section><!-- نهاية قسم الدعوة للإجراء -->

        <!-- ======= قسم الأسئلة الشائعة ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>الأسئلة الشائعة</h2>
                    <p>الأسئلة المتكررة</p>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">كم من الوقت يستغرق
                            تقييم دبلومي؟ <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                يتم تحديد المدة بناءً على عدد الطلبات والمستندات المقدمة. عادةً ما يتم معالجة الطلبات
                                خلال فترة زمنية معقولة.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">ما هي المستندات
                            المطلوبة لتقييم المعادلة؟ <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                تشمل المستندات المطلوبة عادةً الشهادات الدراسية الأصلية وصور عنها، وأي مستندات أخرى
                                تحددها المنصة وفقاً للمرسوم.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">هل يمكنني تتبع حالة
                            طلب التقييم؟ <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                نعم، يمكنك تتبع حالة طلبك عبر المنصة. ستتلقى إشعارات عبر البريد الإلكتروني أو من خلال
                                حسابك على المنصة.
                            </p>
                        </div>
                    </li>
                </ul>

            </div>
        </section><!-- نهاية قسم الأسئلة الشائعة -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-white fw-bold ">© 2024 المعادلة,<br> <span class=" fw-light">
                        وزارة
                        التعليم العالي
                        والبحث العلمي</span>
                </p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="/" class="nav-link px-2 text-white">الرئيسية</a></li>
                    <li class="nav-item"><a href="https://www.mesrs.dz/index.php/en/home/"
                            class="nav-link px-2 text-white">الوزير</a></li>
                    <li class="nav-item"><a href="https://www.mesrs.dz/index.php/en/ethics-and-deontology/"
                            class="nav-link px-2 text-white">الأخلاقيات</a></li>
                    <li class="nav-item"><a href="https://www.mesrs.dz/index.php/en/international-cooperation/"
                            class="nav-link px-2 text-white">
                            التعاون الدولي</a></li>
                </ul>

            </footer>
            <div class="nav-item"><a href="#" class="nav-link px-2 text-white">العنوان: 11، طريق دودو مختار،
                    بن عكنون – الجزائر – الجزائر</a></div>

            <div class="text-white">
                +213 (0) 23-23-80-77 | +213 (0) 23-23-80-57
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://kit.fontawesome.com/cbd9fa1bec.js" crossorigin="anonymous"></script>
    <!--  Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: '4',
            spaceBetween: 5,
            freeMode: true,
            grabCursor: true,
        });
    </script>

</body>

</html>
