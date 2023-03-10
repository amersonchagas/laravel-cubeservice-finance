@extends('site.layout.master')

@section('title')
      Contato
@endsection

@section('subtitle')
     Mande uma Mensagem
@endsection


@section('content')

<section class="contact-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1 class='color-secondary'>How can We
                                <span class="highlighted color-primary bold">Help?</span>
                            </h1>
                            <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats.
                                Lid est laborum dolo rumes fugats untras.</p>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-map-marker color-secondary"></span>
                            <h4 class="tiles__title">Office Address</h4>
                            <div class="tiles__content">
                                <p>202 New Hampshire Avenue , Northwest #100, New York-2573</p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-phone color-secondary"></span>
                            <h4 class="tiles__title">Phone Number</h4>
                            <div class="tiles__content">
                                <p>1-800-643-4500</p>
                                <p>1-800-643-4500</p>
                            </div>
                        </div>
                        <!-- end /.contact_tile -->
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="contact_tile">
                            <span class="tiles__icon lnr lnr-inbox color-secondary"></span>
                            <h4 class="tiles__title">Phone Number</h4>
                            <div class="tiles__content">
                                <p>support@aazztech.com</p>
                                <p>support@aazztech.com</p>
                            </div>
                        </div>
                        <!-- end /.contact_tile -->
                    </div>
                    <!-- end /.col-lg-4 col-md-6 -->

                    <div class="col-md-12">
                        <div class="contact_form cardify">
                            <div class="contact_form__title">
                                <h3>Leave Your Messages</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="contact_form--wrapper">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>

                                            <textarea cols="30" rows="10" placeholder="Yout text here"></textarea>

                                            <div class="sub_btn">
                                                <button type="button" class="btn btn--round btn--default bg-secondary">Send Request</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end /.col-md-8 -->
                            </div>
                            <!-- end /.row -->
                        </div>
                        <!-- end /.contact_form -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


@endsection
