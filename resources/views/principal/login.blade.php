@extends('welcome')
@section('contenido')


<div class="site-main">

    <!-- contact-section -->
    <section class="ttm-row contact-section clearfix">
        <div class="container">
            <div class="row no-gutters">
                <!-- row -->
                <div class="col-lg-8">
                    <div class="spacing-9">
                        <!-- section title -->
                        <div class="section-title text-left clearfix">
                            <div class="title-header mb-90">
                                <h5>CONTACT WITH US</h5>
                                <h2 class="title">Write Us A Message</h2>
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>
                        </div><!-- section title end -->
                        <form id="ttm-quote-form" class="row ttm-quote-form clearfix style2" method="POST" action={{route('iniciar_sesion')}}>
                            {{ csrf_field() }}


                            <div class="col-sm-6 col-md-12">
                                <div class="form-group">
                                    <input name="correo" type="email" placeholder="Correo electronico" required="required" class="form-control with-grey-bg">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-12">
                                <div class="form-group">
                                    <input name="password" type="password" placeholder="Password" required="required" class="form-control with-grey-bg">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group text-left">
                                    <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor" value="">
                                        Send A Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- col-bg-img-two -->
                    <div class="ttm-bgcolor-grey ttm-bg ttm-col-bgimage-yes ttm-right-span spacing-10">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- featured-icon-box-->
                                    <div class="featured-icon-box left-icon style4">
                                        <div class="featured-icon">
                                            <!-- featured-icon-->
                                            <div class="ttm-icon ttm-icon_element-background-color-grey ttm-icon_element-size-md ttm-icon_element-style-round">
                                                <i class="ti ti-location-pin"></i>
                                            </div>
                                        </div><!-- featured-icon -->
                                        <div class="featured-content">
                                            <!-- featured-content -->
                                            <div class="featured-title">
                                                <!-- featured-title -->
                                                <h4>Address</h4>
                                            </div>
                                            <div class="featured-desc">
                                                <!-- featured-desc -->
                                                <p class="mb-0">4525 Smitheh Avenu JK 79 452</p>
                                            </div>
                                        </div><!-- featured-content -->
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-12">
                                    <!-- featured-icon-box-->
                                    <div class="featured-icon-box left-icon style4">
                                        <div class="featured-icon">
                                            <!-- featured-icon-->
                                            <div class="ttm-icon ttm-icon_element-background-color-grey ttm-icon_element-size-md ttm-icon_element-style-round">
                                                <i class="ti ti-headphone-alt"></i>
                                            </div>
                                        </div><!-- featured-icon -->
                                        <div class="featured-content">
                                            <!-- featured-content -->
                                            <div class="featured-title">
                                                <!-- featured-title -->
                                                <h4>Call-Us</h4>
                                            </div>
                                            <div class="featured-desc">
                                                <!-- featured-desc -->
                                                <p class="mb-0">+1800-200-123456</p>
                                            </div>
                                        </div><!-- featured-content -->
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-12">
                                    <!-- featured-icon-box-->
                                    <div class="featured-icon-box left-icon style4">
                                        <div class="featured-icon">
                                            <!-- featured-icon-->
                                            <div class="ttm-icon ttm-icon_element-background-color-grey ttm-icon_element-size-md ttm-icon_element-style-round">
                                                <i class="ti ti-email"></i>
                                            </div>
                                        </div><!-- featured-icon -->
                                        <div class="featured-content">
                                            <!-- featured-content -->
                                            <div class="featured-title">
                                                <!-- featured-title -->
                                                <h4>Email</h4>
                                            </div>
                                            <div class="featured-desc">
                                                <!-- featured-desc -->
                                                <p class="mb-0">info@example.com</p>
                                            </div>
                                        </div><!-- featured-content -->
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end-->
        </div>
    </section>
    <!-- contact-section -->

    <!-- map-section -->
    <div class="ttm-row map-section clearfix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <!--map-start-->
                    <div class="map-wrapper">
                        <div id="map_canvas"></div>
                    </div>
                    <!--map-end-->
                </div>
            </div>
        </div>
    </div>
    <!-- map-section end -->

</div>
@stop
