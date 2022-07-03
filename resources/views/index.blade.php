@extends('master')

@section('title')
    B.inspire
@endsection

@section('content')
    <section class="slideShow_section">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="{{ URL::to('src/images/1.jpeg') }}" style="width:50%">
                <img src="{{ URL::to('src/images/4.jpg') }}" style="width:50%">
            </div>
            <div class="mySlides fade">
                <img src="{{ URL::to('src/images/1.jpeg') }}" style="width:50%">
                <img src="{{ URL::to('src/images/1.jpeg') }}" style="width:50%">
            </div>
            <div class="mySlides fade">
                <img src="{{ URL::to('src/images/1.jpeg') }}" style="width:50%">
                <img src="{{ URL::to('src/images/1.jpeg') }}" style="width:50%">
            </div>
            <!-- <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a> -->
            <div class="dots" id="dots" style="text-align:center">
                <span class="dot" id="dot"></span>
                <span class="dot" id="dot"></span>
                <span class="dot" id="dot"></span>
            </div>
        </div>
    </section>
    <!-- end slide show -->
    <!-- best seller -->
    <section class="bestseller">
        <div class="container_best">
            <div class="big_img">
                <img src="{{ URL::to('src/images/8.jpg') }}" alt="">
                <div class="title">bestseller</div>
                <div class="btn_bg">
                    <button class="btn" id="btn"><span class="btn-inner">view all</span></button>
                </div>
            </div>
            <div class="small_imgs">
                <div class="row">
                    <div class="card">
                        <img src="{{ URL::to('src/images/11.jpeg') }}" alt="">
                        <p class="title">test test</p>
                        <p class="price">110 LE</p>
                    </div>
                    <div class="card">
                        <img src="{{ URL::to('src/images/5.jpg') }}" alt="">
                        <p class="title">test test</p>
                        <p class="price">110 LE</p>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img src="{{ URL::to('src/images/4.jpg') }}" alt="">
                        <p class="title">test test</p>
                        <p class="price">110 LE</p>
                    </div>
                    <div class="card">
                        <img src="{{ URL::to('src/images/7.webp') }}" alt="">
                        <p class="title">test test</p>
                        <p class="price">110 LE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end best seller -->
    <!-- our collection -->
    <section class="collection">
        <h2>our collection</h2>
        <div class="container_collection">
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">nails</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">face</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">eyes</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">lips</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">skin</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">body</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">make up</p>
            </div>
            <div class="card">
                <img src="{{ URL::to('src/images/1.jpeg') }}" alt="">
                <p class="title">beauty line</p>
            </div>
        </div>
        <button class="btn" id="btn"><span class="btn-inner">view all</span></button>
    </section>
    <!-- end -->
    <section class="end">
        <div class="content">
            <h1 style="margin-top: 100px">Our B.inspire Ecommerce website </h1>
            <h2>Welcome here yes welcome </h2>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="footer_page">
            <div class="card">
                <img src="{{ URL::to('src/images/10.jpeg') }}" alt="">
            </div>
            <div class="card">
                <h3>hello</h3>
                <span>test</span>
                <span>test</span>
                <span>test</span>
            </div>
            <div class="card">
                <h3>hello</h3>
                <span>test</span>
                <span>test</span>
                <span>test</span>
            </div>
            <div class="card">
                <h3>hello</h3>
                <span>test</span>
                <span>test</span>
                <span>test</span>
            </div>
        </div>
        <div class="copyRight">
            <p> Eng\Salsabil Mohamed </p>
        </div>
    </footer>
    <!-- end footer -->
@endsection
