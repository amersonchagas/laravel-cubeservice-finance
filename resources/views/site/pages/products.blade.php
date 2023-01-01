@extends('site.layout.master')

@section('title')
      Sobre Nós
@endsection

@section('subtitle')
     Mande uma Mensagem
@endsection


@section('content')

<section class="about_mission">
    <div class="content_block1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="content_area">
                        <h1 class="content_area--title">About
                            <span class="highlight">MartPlace</span>
                        </h1>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler isque the mattis,
                            leo quam aliquet congue this there placerat mi id nisi they interdum mollis. Praesent pharetra
                            justo ut sceleris que the mattis, leo quam aliquet. Nunc placer atmi id nisi interdum mollis
                            quam. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>
                    </div>
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->

        <div class="content_image bgimage">
            <div class="bg_image_holder">
                <img src="{{asset('martplace/images/about-1.jpg')}}" alt="{{asset('martplace/images/about-1.jpg')}}">
            </div>
        </div>
    </div>
    <!-- end /.about -->

    <div class="content_block2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6  offset-md-6 offset-lg-7">
                    <div class="content_area2">
                        <h1 class="content_area2--title">MartPlace
                            <span class="highlight">Mission</span>
                        </h1>
                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler isque the mattis,
                            leo quam aliquet congue this there placerat mi id nisi they interdum mollis. Praesent pharetra
                            justo ut sceleris que the mattis, leo quam aliquet. Nunc placer atmi id nisi interdum mollis
                            quam. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>
                    </div>
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->

        <div class="content_image2 bgimage">
            <div class="bg_image_holder"  >
                <img src="{{asset('martplace/images/about-2.jpg')}}" alt="{{asset('martplace/images/about-2.jpg')}}">
            </div>
        </div>
    </div>
    <!-- end /.mission-->
</section>




@endsection
