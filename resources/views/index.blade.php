<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DiGi Solution</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <section class="header">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <img src="{{ URL::asset('/images/logo_digiso.png') }}" alt="">
                    </div>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="#">OUR CLIENTS</a></li>
                        <li><a href="#">ARTICLE</a></li>
                        <li><a href="#">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>

    <section class="banner">
        <div class="banner-images">
            <img src="{{ URL::asset('/images/banner.jpg') }}" alt="">
        </div>
    </section>

    <section class="what-wedo">
        <div class="container">
            <div class="what-wedo-core">
                <div class="what-wedo-info">
                    <div class="what-wedo-title">
                        <span class="what">What</span><span class="wedo">we do</span>
                    </div>
                    <div class="what-wedo-content">
                        <p>
                            ให้บริการทางด้าน Technology และ Digital Innovation แบบครบวงจรให้แก่ลูกค้าอาทิเช่น
                            พัฒนาระบบ System Online, Website, Custom ERP System, และ Digital
                            Transformation Solution รวมถึง Digital Media และ Events ทั้ง Online และ Offline
                            ทุกประเภท เพื่อให้สามารถ ตอบโจทย์ ตามความต้องการของลูกค้าทุกกลุ่มทุกประเภท
                        </p>
                    </div>
                    <div class="what-wedo-btn">
                        <a href="#" class="readmore">Read More</a>
                    </div>
                </div>
                <div class="what-wedo-images">
                    <img src="{{ URL::asset('/images/what-wedo-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="our-service">
        <div class="container">
            <div class="our-service-title">
                <span class="our">OUR </span><span class="service">SERVICE</span>
            </div>
            <div class="our-service-core">
                <div class="our-service-info-left">
                    <div class="our-service-images-left">
                        <img src="{{ URL::asset('/images/our-service-img-left.svg') }}" alt="">
                    </div>
                    <div class="our-service-title-left">
                        <span class="our-serv-tl">บริการออกแบบเว็บไซต์ และระบบเฉพาะ<br />ตามความต้องการ</span>
                    </div>
                    <div class="our-service-content-left">
                        <p>
                            ออกแบบและพัฒนาเว็บไซต์ ระบบออนไลน์ โดย ออก
                            แบบตามรายละเอียดงานที่ลูกค้าต้องการ เพื่อให้ตรง
                            ตามความต้องการมากที่สุด รวมถึงการดูแลหลังการ
                            ขายที่ครบครัน
                        </p>
                    </div>
                </div>
                <div class="our-service-info-center">
                    <div class="our-service-title-center">
                        <span class="our-serv-tl">บริการทำแอปพลิเคชันทุกแพลตฟอร์ม</span>
                    </div>
                    <div class="our-service-content-center">
                        <p>
                            ตอบโจทย์ทุกความต้องการจากลูกค้าโดยโปรเกมมิ่ง
                            ผู้เชี่ยวชาญด้านการพัฒนาสื่อดิจิทัลที่ได้รับความไว้
                            วางใจจากบริษัทชั้นนำ
                        </p>
                    </div>
                    <div class="our-service-images-center">
                        <img src="{{ URL::asset('/images/our-service-img-center.svg') }}" alt="">
                    </div>
                </div>
                <div class="our-service-info-right">
                    <div class="our-service-images-right">
                        <img src="{{ URL::asset('/images/our-service-img-right.svg') }}" alt="">
                    </div>
                    <div class="our-service-title-right">
                        <span class="our-serv-tr">บริการดูแล Social Marketing และ Digital Media Design</span>
                    </div>
                    <div class="our-service-content-right">
                        <p>
                            ให้บริการทำ Social Marketing อาทิเช่นFacebook,
                            Instagram รวมไปถึงทำ Digital Media Design
                            ทั้ง Online และ Offline ทั้งหมด
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-client">
        <div class="container">
            <div class="our-client-core">

                <div class="our-client-header-title">
                    <span class="our-hct">OUR </span><span class="service-hct">CLIENT</span>
                </div>

                <div class="our-client-menu">
                    <ul>
                        <li><a href="#">WEBSITE DESIGN</a></li>
                        <li><a href="#">APPLICATION DESIGN</a></li>
                        <li><a href="#">ONLINE MARKETING </a></li>
                    </ul>
                </div>

                <div class="our-client-product">

                    <div class="our-client-product-left-top">
                        <div class="our-client-images-left-top">
                            <img src="{{ URL::asset('/images/our-client-img-lt.png') }}" alt="">
                        </div>
                        <div class="our-client-title-left-top">
                            <span class="our-ctlt">บริษัท แพลน บี มีเดีย จำกัด (มหาชน)</span>
                        </div>
                    </div>

                    <div class="our-client-product-center-top">
                        <div class="our-client-images-center-top">
                            <img src="{{ URL::asset('/images/our-client-img-ct.png') }}" alt="">
                        </div>
                        <div class="our-client-title-center-top">
                            <span class="our-ctct">Major Group : Movie Happiness</span>
                        </div>
                    </div>

                    <div class="our-client-product-right-top">
                        <div class="our-client-images-right-top">
                            <img src="{{ URL::asset('/images/our-client-img-rt.png') }}" alt="">
                        </div>
                        <div class="our-client-title-right-top">
                            <span class="our-ctrt">jorakay E-commerce</span>
                        </div>
                    </div>

                    <div class="our-client-product-left-down">
                        <div class="our-client-images-left-down">
                            <img src="{{ URL::asset('/images/our-client-img-ld.png') }}" alt="">
                        </div>
                        <div class="our-client-title-left-down">
                            <span class="our-ctld">โรงแรม ศรีพันวา ภูเก็ต</span>
                        </div>
                    </div>

                    <div class="our-client-product-center-down">
                        <div class="our-client-images-center-down">
                            <img src="{{ URL::asset('/images/our-client-img-cd.png') }}" alt="">
                        </div>
                        <div class="our-client-title-center-down">
                            <span class="our-ctcd">GMM Concert</span>
                        </div>
                    </div>

                    <div class="our-client-product-right-down">
                        <div class="our-client-images-right-down">
                            <img src="{{ URL::asset('/images/our-client-img-rd.png') }}" alt="">
                        </div>
                        <div class="our-client-title-right-down">
                            <span class="our-ctrd">Campaign Teapot</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="logo-Client">
        {{-- <div class="logo-Client-images-1">
            <img src="{{ URL::asset('/images/logo-Client-img-major1.png') }}" alt="">
        </div> --}}
        <div class="logo-Client-images-2">
            <img src="{{ URL::asset('/images/logo-Client-img-planB.png') }}" alt="">
        </div>
        <div class="logo-Client-images-3">
            <img src="{{ URL::asset('/images/logo-Client-img-3.png') }}" alt="">
        </div>
        <div class="logo-Client-images-4">
            <img src="{{ URL::asset('/images/logo-Client-img-4.png') }}" alt="">
        </div>
        <div class="logo-Client-images-5">
            <img src="{{ URL::asset('/images/logo-Client-img-5.png') }}" alt="">
        </div>

    </section>

    <section class="knowledge-sharing">
        <div class="knowledge-sharing-title">
            <span class="knowledge-st">KNOWLEDGE </span><span class="sharing-st">SHARING</span>
        </div>

    </section>

</body>

</html>
