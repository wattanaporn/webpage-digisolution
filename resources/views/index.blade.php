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
                        <span class="our-serv-tl">บริการออกแบบเว็บไซต์ และระบบเฉพาะ<br/>ตามความต้องการ</span>
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
                        <span class="our-serv-tl">บริการออกแบบเว็บไซต์ และระบบเฉพาะตามความต้องการ</span>
                    </div>
                    <div class="our-service-content-center">
                        <p>
                            ตอบโจทย์ทุกความต้องการจากลูกค้าโดยโปรเกมมิ่ง
                            ผู้เชี่ยวชาญด้านการพัฒนาสื่อดิจิทัลที่ได้รับความ
                            ไว้วางใจจากบริษัทชั้นนำ
                        </p>
                    </div>
                    <div class="our-service-images-center">
                        <img src="{{ URL::asset('/images/our-service-img-center.svg') }}" alt="">
                    </div>
                </div>

                <div class="our-service-info-right">
                    <div class="our-service-title-right">
                        <span class="our-serv-tl">บริการออกแบบเว็บไซต์ และระบบเฉพาะตามความต้องการ</span>
                    </div>
                    <div class="our-service-content-right">
                        <p>
                            ตอบโจทย์ทุกความต้องการจากลูกค้าโดยโปรเกมมิ่ง
                            ผู้เชี่ยวชาญด้านการพัฒนาสื่อดิจิทัลที่ได้รับความ
                            ไว้วางใจจากบริษัทชั้นนำ
                        </p>
                    </div>
                    <div class="our-service-images-right">
                        <img src="{{ URL::asset('/images/our-service-img-right.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>

    </section>

</body>

</html>
