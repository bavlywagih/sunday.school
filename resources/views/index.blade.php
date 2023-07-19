@extends('template.template')
@section('content')
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>مدارس احد عمود الدين</h1>
                <p>اول موقع الكتروني لتنظيم خدمه مدارس الاحد</p>
            </div>
            <div class="image">
                <img src="{{ asset('image/logo.png') }}"  alt="" />
            </div>
        </div>
        <a href="#aboat" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>

    <div class="work-steps" id="aboat">
        <div class="container" id="">
            <img decoding="async" src="{{ asset('image/kkk.png') }}"  alt="" class="" />
            <div class="info">
                <div class="box">
                    <div class="text">
                        <h3>خدمه عمود الدين</h3>
                        <p>أول موقع كنسي لتنظيم الخدمة بين الخدام و المخدومين</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spikes"></div>
    <div class="services" id="services">
        <h2 class="main-title text-center">المميزات الموجوده في الموقع</h2>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="box">
                <div class="fa-solid  fa-4x  "></div>
                <h3>درس اليوم</h3>
                <div class="info">
                    <h5 >ومعه جميع ملحقاته</h5>
                </div>
            </div>
            <div class="box">
                <div class=" fa-solid fa-4x "></div>
                <h3>المكتبه الالكترونية</h3>
                <div class="info">
                    <h5>تضم اكثر من 3000 كتاب </h5>
                </div>
            </div>
            <div class="box">
                <div class="fa-solid fa-4x "></div>
                <h3>الحضور والغياب</h3>
                <div class="info">
                    <h5>ومتابعه الافتقاد</h5>
                </div>
            </div>
            <div class="box">
                <div class=" fa-solid fa-4x "></div>
                <h3>منشورات المجتمع</h3>
                <div class="info">
                    <h5>لمتابعه اخبار الخدمه</h5>
                </div>
            </div>
            <div class="box">
                <div class=" fa-solid fa-4x "></div>
                <h3>طايو المكافئه</h3>
                <div class="info">
                    <h5>لتحفيز المخدومين</h5>
                </div>
            </div>
            <div class="box">
                <div class=" fa-solid fa-4x "></div>
                <h3>معلومات المخدوم </h3>
                <div class="info">
                    <h5>لتسهيل التواصل معه</h5>
                </div>
            </div>
        </div>
    </div>


@endsection



