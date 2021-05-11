@extends('layouts.layout')


@section('content')
        <!--banner-section-->
        <div class="banner-section">
            <h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3>
            <div class="banner">
                <div  class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <img src="{{ asset('public/assets/front/images') }}/1.jpg" class="img-responsive" alt="" />

                        </li>
                        <li>
                            <img src="{{ asset('public/assets/front/images') }}/2.jpg" class="img-responsive" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('public/assets/front/images') }}/3.jpg" class="img-responsive" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('public/assets/front/images') }}/3.jpg" class="img-responsive" alt="" />
                        </li>
                    </ul>
                </div>
                <!--banner-->
                {{--                <script type="text/javascript" src="https://p.w3layouts.com/demos/blogger/web/js/responsiveslides.min.js"></script>--}}
                <div class="clearfix"> </div>
                <div class="b-bottom">
                    <h5 class="top"><a href="single.html">What turn out consetetur sadipscing elit</a></h5>
                    <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
            </div>
            <!--//banner-->
            <!--/top-news-->
            <div class="top-news">

                <!---728x90--->


                <div class="top-inner">
                    <div class="col-md-6 top-text">
                        <a href="single.html"><img src="public/assets/front/images/pic1.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="col-md-6 top-text two">
                        <a href="single.html"><img src="public/assets/front/images/pic2.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <!---728x90--->

                <div class="top-inner second">
                    <div class="col-md-6 top-text">
                        <a href="single.html"><img src="public/assets/front/images/pic3.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="col-md-6 top-text two">
                        <a href="single.html"><img src="public/assets/front/images/pic4.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//top-news-->
        </div>
        <!--//banner-section-->
@endsection
