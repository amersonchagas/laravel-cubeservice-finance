@extends('site.layout.master')

@section('content')

    <!--================================
        START HERO AREA
    =================================-->
    <section class="hero-area">
        <div class="bg_image_holder ">
            <img src="{{asset('martplace/images/bg-home.png')}}" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">CubeCode</span>
                                    <span class="bold">Fabrica de Software!</span>
                                </h1>
                                <p class="tagline">
                            </p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                {{--  <a href="all-products.html" class="btn btn--round btn--lg">Para o Cliente</a>
                                <a href="all-products.html" class="btn btn--round btn--lg">Para Startups</a>  --}}
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        {{-- <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" placeholder="Search your products...">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="blah">
                                        <option value="">All Categories</option>
                                        <option value="">PSD</option>
                                        <option value="">HTML</option>
                                        <option value="">WordPress</option>
                                        <option value="">All Categories</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div> --}}
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
    =================================-->

    <!--================================
    START FEATURE AREA
    =================================-->
    <section class="section--padding pt-5 pb-5">
        <!-- start container -->
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1 class="bold color-secondary">Porque Trabalhar com a
                            <span class="bold highlighted color-primary">CUBE CODE</span>
                        </h1>
                        <p></p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>

            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img style='max-height: 100px' src="{{asset('custom/images/icon.png')}}"  >
                        </div>
                        <div class="feature__title">
                            <h3>Sobre Nós</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img style='max-height: 100px' src="{{asset('custom/images/icon.png')}}">
                        </div>
                        <div class="feature__title">
                            <h3>Nossa Missão e Visão</h3>
                        </div>
                        <div class="feature__desc">
                            <p> Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img style='max-height: 100px' src="{{asset('custom/images/icon.png')}}"  >
                        </div>
                        <div class="feature__title">
                            <h3>Nossa Metodologia</h3>
                        </div>
                        <div class="feature__desc">
                            <p> Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END FEATURE AREA
    =================================-->


    <!--================================
    START SELL BUY
    =================================-->
    {{--<section class="proposal-area">

        <!-- start container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--left bgimage bg-secondary">

                        <div class="content_above">
                            <div class="proposal__icon ">
                                <img src="{{asset('martplace/images/buy.png')}}" alt="Buy icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Sell Your Products</h1>
                                <p class="text--white">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diamcongue is laoreet elit metus.
                            </p>
                            </div>
                            <a href="#" class="btn--round btn btn--lg bg-primary">Become an Author</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>

                <div class="col-md-6 no-padding ">
                    <div class="proposal proposal--right bg-primary">

                        <div class="content_above">
                            <div class="proposal__icon">
                                <img src="{{asset('martplace/images/sell.png')}}" alt="Sell icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Start Shopping Today</h1>
                                <p class="text--white">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diamcongue is laoreet elit metus.
                            </p>
                            </div>
                            <a href="#" class="btn--round btn btn--lg bg-secondary">Start Shopping</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>
            </div>
        </div>
        <!-- start container-fluid -->
    </section>--}}
    <!--================================
    END SELL BUY
    =================================-->



    <section class="section--padding pt-5 pb-5">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1 class="bold color-secondary">Serviços
                            <span class="bold highlighted color-primary">Disponíveis</span>
                        </h1>
                        <p>
                            </p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_feature">
                        <div class="feature__icon">
                            <img style='max-height: 50px' src="{{asset('custom/images/icon.png')}}">
                        </div>
                        <!-- end /.feature__icon -->

                        <div class="feature__content">
                            <h3>Serviço 01</h3>
                            <p> Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum. Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.</p>
                        </div>
                        <!-- end /.feature__content -->
                    </div>
                    <!-- end /.single_feature -->
                </div>
                <!-- end /.col-md-6 -->

                <div class="col-lg-6 col-md-6">
                    <div class="single_feature">
                        <div class="feature__icon">
                            <img style='max-height: 50px' src="{{asset('custom/images/icon.png')}}">
                        </div>
                        <!-- end /.feature__icon -->

                        <div class="feature__content">
                            <h3>Serviço 02</h3>
                            <p> Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum. Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                condimentum.</p>
                        </div>
                        <!-- end /.feature__content -->
                    </div>
                    <!-- end /.single_feature -->
                </div>
                <!-- end /.col-md-6 -->

            </div>

            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END COUNTER UP AREA
    =================================-->






    <section class="section--padding pt-5 pb-5">

        <div class="shortcode_wrapper">
            <div class="container">

                <!-- start row -->
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1 class="bold color-secondary">Equipe
                                <span class="bold highlighted color-primary">CUBE CODE</span>
                            </h1>
                            <p>
                            </p>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="single_speaker">
                                <div class="speaker__thumbnail">
                                    <img src="{{asset('custom/images/team-1.jpg')}}" alt="">
                                </div>

                                <div class="speaker__detail">
                                    <h4>Amerson Chagas</h4>
                                    <span class="ocuup">CEO & FOUNDER</span>
                                    <p>Nullam blandit hendrerit faucibus. Suspendisse hendrerit turpis dui Sed ac velit iaculis,
                                        condimentum.
                                    </p>

                                    <div class="speaker_social">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="bg-primary fa fa-facebook"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="bg-primary fa fa-instagram"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="bg-primary fa fa-twitter"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end /.event_module -->
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!--================================
        START COUNTER UP AREA
    =================================-->
    <section class="counter-up-area">
        <div class="bg_image_holder">
            <img src="{{asset('custom/images/bg-count.jpg')}}" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter color-primary">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count">38,436</span>
                        <p>Projetos</p>
                    </div>
                    <div class="counter color-primary">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count">38,436</span>
                        <p> Produtos no Mercado </p>
                    </div>
                    <div class="counter color-primary">
                        <span class="lnr lnr-smile"></span>
                        <span class="count">38,436</span>
                        <p> Clientes Satisfeitos </p>
                    </div>
                    <div class="counter color-primary">
                        <span class="lnr lnr-users"></span>
                        <span class="count">38,436</span>
                        <p>Usuários </p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END COUNTER UP AREA
    =================================-->


@endsection
