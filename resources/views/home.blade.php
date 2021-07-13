@include('partials.header')


<!-- Revolution Layer Slider -->

<div class="carousel-content">

<div class="container-fuild">
    <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect136" data-source="gallery" style="padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
          <?php
          $x=2;

          ?>


          <!-- SLIDE  -->

                @foreach($banners3 as $item)
{{--                    @dd($item);--}}
                <li data-index="rs-304{{$x}}" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb=""  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Big &amp; Bold" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ Voyager::image($item->img) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <div class="container" style="position: relative;">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption BigBold-SubTitle  "
                             id="slide-304{{$x}}-layer-2"
                             data-x="['left','left','left','left']" data-hoffset="['14','14','14','15']"
                             data-y="['top','top','top','top']" data-voffset="['110','90','60','40']"
                             data-fontsize="['18','18','18','14']"
                             data-lineheight="['18','18','18','16']"
                             data-width="['580','580','100%','100%']"
                             data-height="none"
                             data-whitespace="normal"

                             data-type="text"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 12;  white-space: normal; color:#fff; ">{{ $item->title}}</div>

                        <!-- LAYER NR. 2 -->

                        <div class="tp-caption BigBold-Title   tp-resizeme"
                             id="slide-304{{$x}}-layer-1"
                             data-x="['left','left','left','left']" data-hoffset="['13','13','13','14']"
                             data-y="['top','top','top','top']" data-voffset="['140','120','90','70']"
                             data-fontsize="['50','40','30','24']"
                             data-lineheight="['70','50','40','30']"
                             data-width="['580','580','100%','100%']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','nowrap','normal']"

                             data-type="text"
                             data-basealign="slide"
                             data-responsive_offset="off"

                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 11; white-space: nowrap; color:#fff; ">{{ $item->description}}
                                   </div>



                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption BigBold-Button rev-btn swipe-to-top"
                             id="slide-304{{$x++}}-layer-3"
                             data-x="['left','left','left','left']" data-hoffset="['14','16','16','15']"
                             data-y="['top','top','top','top']" data-voffset="['300','250','200','150']"
                             data-width="['150','150','150','150']"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="button"
                             data-actions='[{"event":"click","action":"simplelink","target": "_self","url":"shop-page2.html"}]'
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[12,12,12,12]"
                             data-paddingright="[28,28,28,28]"
                             data-paddingbottom="[12,12,12,12]"
                             data-paddingleft="[28,28,28,28]"

                             style="z-index: 13; text-transform: uppercase; white-space: nowrap;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; line-height: 1.5;"><a style="color: #ffffff" href="{{ route('shop.shop') }}">{{ __('messages.купить') }}
                            </a></div>

                    </div>
                </li>

                    @endforeach
            <!-- SLIDE  -->

{{--                <li data-index="rs-3043" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb=""--}}
{{--                    data-rotate="0"  data-saveperformance="off"  data-title="NEW ELEGENCE" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">--}}
{{--                    <!-- MAIN IMAGE -->--}}
{{--                    <img src="{{ Voyager::image($banners2->img) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina>--}}
{{--                    <!-- LAYERS -->--}}




{{--                    <div class="container" style="position: relative;">--}}

{{--                        <!-- LAYER NR. 4 -->--}}
{{--                        <div class="tp-caption BigBold-SubTitle  "--}}
{{--                             id="slide-3043-layer-2"--}}
{{--                             data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"--}}
{{--                             data-y="['top','top','top','top']" data-voffset="['110','90','60','40']"--}}
{{--                             data-fontsize="['18','18','18','14']"--}}
{{--                             data-lineheight="['18','18','18','16']"--}}
{{--                             data-width="['100%','100%','100%','100%']"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="normal"--}}

{{--                             data-type="text"--}}
{{--                             data-basealign="slide"--}}
{{--                             data-responsive_offset="off"--}}
{{--                             data-responsive="off"--}}
{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'--}}
{{--                             data-textAlign="['center','center','center','center']"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}

{{--                             style="z-index: 12;  white-space: normal; color:#fff; ">{{ $banners2->title}}--}}
{{--                        </div>--}}

{{--                        <!-- LAYER NR. 5 -->--}}

{{--                        <div class="tp-caption BigBold-Title   tp-resizeme"--}}
{{--                             id="slide-3043-layer-1"--}}
{{--                             data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"--}}
{{--                             data-y="['top','top','top','top']" data-voffset="['140','120','90','70']"--}}
{{--                             data-fontsize="['50','40','30','24']"--}}
{{--                             data-lineheight="['70','50','40','30']"--}}
{{--                             data-width="['100%','100%','100%','100%']"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="['nowrap','nowrap','nowrap','normal']"--}}

{{--                             data-type="text"--}}
{{--                             data-basealign="slide"--}}
{{--                             data-responsive_offset="off"--}}

{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
{{--                             data-textAlign="['center','center','center','center']"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}

{{--                             style="z-index: 11; white-space: nowrap; color:#fff; ">Be Vibrant with <br>{{ $banners2->description}}</div>--}}



{{--                        <!-- LAYER NR. 6 -->--}}
{{--                        <div class="tp-caption BigBold-Button rev-btn swipe-to-top"--}}
{{--                             id="slide-3043-layer-3"--}}
{{--                             data-x="['left','center','left','left'] " data-hoffset="['0','0','0','0']"--}}
{{--                             data-y="['top','top','top','top']" data-voffset="['300','250','200','150']"--}}
{{--                             data-width="['150','150','150','150']"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}

{{--                             data-type="button"--}}
{{--                             data-actions='[{"event":"click","action":"simplelink","target": "_self","url":"shop-page2.html"}]'--}}
{{--                             data-basealign="slide"--}}
{{--                             data-responsive_offset="off"--}}
{{--                             data-responsive="off"--}}
{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'--}}
{{--                             data-textAlign="['center','center','center','center']"--}}
{{--                             data-paddingtop="[12,12,12,12]"--}}
{{--                             data-paddingright="[28,28,28,28]"--}}
{{--                             data-paddingbottom="[12,12,12,12]"--}}
{{--                             data-paddingleft="[28,28,28,28]"--}}
{{--                             style="z-index: 13; text-transform: uppercase; white-space: nowrap;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; line-height: 1.5;">{{ __('messages.купить') }}</div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <!-- SLIDE  -->--}}
{{--                <li data-index="rs-3044" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Beauty Here" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">--}}
{{--                    <!-- MAIN IMAGE -->--}}
{{--                    <img src="{{ Voyager::image($banners3->img) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>--}}
{{--                    <!-- LAYERS -->--}}

{{--                    <div class="container" style="position: relative;">--}}

{{--                        <!-- LAYER NR. 7 -->--}}
{{--                        <div class="tp-caption BigBold-SubTitle  "--}}
{{--                             id="slide-3043-layer-2"--}}
{{--                             data-x="['left','left','left','left']" data-hoffset="['603','480','200','20']"--}}
{{--                             data-y="['top','top','top','top']" data-voffset="['110','90','60','40']"--}}
{{--                             data-fontsize="['18','18','18','14']"--}}
{{--                             data-lineheight="['18','18','18','16']"--}}
{{--                             data-width="['580','580','100%','100%']"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="normal"--}}

{{--                             data-type="text"--}}
{{--                             data-basealign="slide"--}}
{{--                             data-responsive_offset="off"--}}
{{--                             data-responsive="off"--}}
{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'--}}
{{--                             data-textAlign="['left','left','left','left']"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}

{{--                             style="z-index: 12;  white-space: normal; color:#fff; ">{{ $banners3->title}}</div>--}}

{{--                        <!-- LAYER NR. 8 -->--}}

{{--                        <div class="tp-caption BigBold-Title   tp-resizeme"--}}
{{--                             id="slide-3043-layer-1"--}}
{{--                             data-x="['left','left','left','left']" data-hoffset="['602','480','200','20']"--}}
{{--                             data-y="['top','top','top','top']" data-voffset="['140','120','90','70']"--}}
{{--                             data-fontsize="['50','40','30','24']"--}}
{{--                             data-lineheight="['70','50','40','30']"--}}
{{--                             data-width="['580','580','100%','100%']"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="['nowrap','nowrap','nowrap','normal']"--}}

{{--                             data-type="text"--}}
{{--                             data-basealign="slide"--}}
{{--                             data-responsive_offset="off"--}}

{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
{{--                             data-textAlign="['left','left','left','left']"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}

{{--                             style="z-index: 11; white-space: nowrap; color:#fff; ">{{ $banners3->description}}</div>--}}



{{--                        <!-- LAYER NR. 9 -->--}}
{{--                        <div class="tp-caption BigBold-Button rev-btn swipe-to-top"--}}
{{--                             id="slide-3043-layer-3"--}}
{{--                             data-x="['left','left','left','left']" data-hoffset="['603','480','200','20']"--}}
{{--                             data-y="['top','top','top','top']" data-voffset="['300','250','200','150']"--}}
{{--                             data-width="['150','150','150','150']"--}}
{{--                             data-height="none"--}}
{{--                             data-whitespace="nowrap"--}}

{{--                             data-type="button"--}}
{{--                             data-actions='[{"event":"click","action":"simplelink","target": "_self","url":"shop-page2.html"}]'--}}
{{--                             data-basealign="slide"--}}
{{--                             data-responsive_offset="off"--}}
{{--                             data-responsive="off"--}}
{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'--}}
{{--                             data-textAlign="['center','center','center','center']"--}}
{{--                             data-paddingtop="[12,12,12,12]"--}}
{{--                             data-paddingright="[28,28,28,28]"--}}
{{--                             data-paddingbottom="[12,12,12,12]"--}}
{{--                             data-paddingleft="[28,28,28,28]"--}}

{{--                             style="z-index: 13; text-transform: uppercase; white-space: nowrap;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; line-height: 1.5;">{{ __('messages.купить') }}</div>--}}

{{--                    </div>--}}

{{--                </li>--}}

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>
</div>


<!-- Banners -->
<section class="banners-content">
    <!-- //banner twelve -->
    <div class="banner-twelve">

        <div class="container-fluid">
            <div class="group-banners">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-3">
{{--                        @foreach(  $banners as $item)--}}
                        <figure class="banner-image">
                            <div class="captions">
                                <a href="{{ route('shop.shop') }}">
                                    <img class="img-fluid" src="{{ Voyager::image($banners6->img) }}" alt="Banner Image">
                                    <div class="banner-caption left-caption">
                                        <h2>{{ $banners6->description}}<small>{{ $banners6->title}}</small></h2>


                                    </div>
                                </a>
                            </div>
                        </figure>
{{--  @endforeach--}}

                        <figure class="banner-image mt-image">
                            <div class="captions">
                                <a href="{{ route('shop.shop') }}">
                                    <img class="img-fluid" src="{{ Voyager::image($banners1->img) }}" alt="Banner Image">
                                    <div class="banner-caption left-caption">
                                        <h2>{{ $banners1->description}}<small>{{ $banners1->title}}</small></h2>



                                    </div>
                                </a>
                            </div>
                        </figure>

                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">

                        <figure class="banner-image">
                            <div class="captions">
                                <img class="img-fluid " src="{{ Voyager::image($banners2->img) }}" alt="Banner Image">
                                <div class="banner-caption left-caption">
                                    <h2>{{ $banners2->description}}<small>{{ $banners2->title}}</small></h2>


                                    <form action="{{route('create.create')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                        <input type="hidden" name="user_id" value="1">
                                        <input type="hidden" name="count" value="1">
                                        <input type="hidden" name="color" value="">
                                        <input type="hidden" name="size" value="">
                                        <button style="background: transparent; text-transform: uppercase; border: none; outline: none; color: #fff !important"><a href="{{ route('shop.shop') }}" class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.купить') }}</a></button>
                                    </form>

{{--                                    <a href="{{ route('shop.shop') }}" class="btn btn-secondary swipe-to-top">{{ __('messages.купить') }}</a>--}}

                                </div>
                            </div>
                        </figure>


                    </div>

                    <div class="col-12 col-sm-12 col-lg-3">

                        <figure class="banner-image">
                            <div class="captions">
                                <a href="{{ route('shop.shop') }}">
                                    <img class="img-fluid" src="{{ Voyager::image($banners4->img) }}" alt="Banner Image">
                                    <div class="banner-caption left-caption">
                                        <h2>{{ $banners4->description}}<small>{{ $banners4->title}}</small></h2>


                                    </div>
                                </a>
                            </div>
                        </figure>


                        <figure class="banner-image mb0-image mt-image">
                            <div class="captions">
                                <a href="{{ route('shop.shop') }}">
                                    <img class="img-fluid" src="{{ Voyager::image($banners5->img) }}" alt="Banner Image">
                                    <div class="banner-caption left-caption">
                                        <h2>{{ $banners5->description}}<small>{{ $banners5->title}}</small></h2>



                                    </div>
                                </a>
                            </div>
                        </figure>

                    </div>
                </div>


            </div>
        </div>

    </div>
</section>




<!-- Products Tabs -->
<section class="pro-content pro-tab-content ">
    <div class="container">
        <div class="products-area">

            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="pro-heading-title" {{ url('locale/ru')}}>
                        <h1> {{ __('messages.лучшие_предложения') }}</h1>


                    </div>
                </div>
            </div>


            <!-- ..........tabs start ......... -->
            <div class="row ">
                <div class="col-md-12">

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div  class="tab-pane fade active show" id="all">
                            <div class="tab-carousel-js row">
                                @foreach( $best_products as $item)

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="product">
                                        <article>

                                            <div class="pro-thumb ">

                                                <a href=" {{ route('product.index', $item->id)}}">
                                                    <span class="pro-image"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Product Image"></span>
                                                    <span class="pro-image-hover swipe-to-top"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="{{ Voyager::image($item->img) }}"></span>
                                                </a>


                                                @auth
                                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                                    <div class="pro-icons">

                                                            <form action="{{route('create.wish')}}" method="post" >
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$item->id}}">
                                                                <input type="hidden" name="user_id" value="{{$user->id}}">

                                                                <button  style="background: transparent; border: none; outline: none; color: #fff"><a  class="icon active swipe-to-top"></a></button>

                                                            </form>


                                                            <i class="fas fa-heart"></i>

                                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                            <i class="fas fa-eye"></i>
                                                        </div>
                                                        <a href="{{ route('compare') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                    </div>


                                                    <form action="{{route('create.create')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                                        <input type="hidden" name="count" value="1">
                                                        <input type="hidden" name="color" value="">
                                                        <input type="hidden" name="size" value="">
                                                        <button  style="background: transparent; border: none; outline: none"><a  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>
                                                    </form>


                                                </div>
                                                @endauth



                                                @guest

                                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                                    <div class="pro-icons">

                                                           <a  href="{{ route('login') }}" class="icon active swipe-to-top">

                                                        <i class="fas fa-heart"></i>
                                                        </a>
                                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                                            <i class="fas fa-eye"></i>
                                                        </div>
                                                        <a href="{{ route('login') }}" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                                    </div>



                                                        <button style="background: transparent; border: none; outline: none" ><a href="{{ route('login') }}"  class="btn btn-secondary btn-block swipe-to-top">{{ __('messages.в_корзину') }}</a></button>

                                                </div>

                                                @endguest

                                                <div class="pro-tag bg-success">{{ __('messages.новинка') }}</div>
                                            </div>

                                            <div class="pro-description"    style="word-wrap: break-word;
                                                                                    height: 100px;

                                                                                    display: block;
                                                                                    display: -webkit-box;

                                                                                    margin: 3px auto;
                                                                                    font-size: 14px;
                                                                                    line-height: 1.4;
                                                                                    -webkit-line-clamp: 2;
                                                                                    -webkit-box-orient: vertical;
                                                                                    overflow: hidden;
                                                                                    text-overflow: ellipsis" >


                                                    <h2 class="pro-title"><a href="{{ route('product.index', $item->id)}}">{{ $item->getTranslatedAttribute('title', app()->getLocale())}}</a></h2>

                                                    <div class="pro-price" {{ route('product.index', $item->id)}}>
                                                    <ins>{{$item->price}}</ins>
                                                </div>

                                                <span class="pro-info"{{ route('product.index', $item->id)}}>
                                     {{ $item->getTranslatedAttribute('description', app()->getLocale())}}

                                    </span>

                                            </div>

                                        </article>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                            <!-- 1st tab -->
                        </div>


                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- banner category -->
 <div class="pro-content categories-content">
    <div class="container-fuild">

        <div class="row">

            @foreach(  $sale_products as $item)
            <div class="col-12 col-md-4">

                <div class="banner-category">
                    <img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="{{ Voyager::image($item->img) }}">
                    <a href="{{ route('product.index', $item->id)}}" class="btn btn-secondary btn-lg swipe-to-top">
                        {{ __('messages.акция') }}
                    </a>
                </div>


            </div>
            @endforeach


        </div>

    </div>
</div>


<!-- Products Tabs -->
<section class="pro-content pro-bc-content">
    <div class="container">
        <div class="products-area">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="pro-heading-title">
                        <h2> {{ __('messages.популярные_товары') }}

                        </h2>
{{--                        <p>Vitae posuere urna blandit sed. Praesent ut dignissim risus. </p></div>--}}
                </div>
            </div>
        </div>
        <div class="row">

                 @foreach($popular_products as $item)
            <div class="col-12 col-md-6">
                <div class="pro-main">
                    <figure class="banner-image">
                        <a href="{{ route('product.index', $item->id)}}"><img class="img-fluid" src="{{ Voyager::image($item->img) }}" alt="Banner Image"></a>
                    </figure>
                    <div class="pro-description">
                        <h2 class="pro-title"><a href=" {{ route('product.index', $item->id)}}">

                            {{ $item->getTranslatedAttribute('title', app()->getLocale())}}

                            </a>
                        </h2>
                        <div class="pro-price" {{ route('product.index', $item->id)}}>
                            <ins>{{$item->price}}</ins>
                        </div>
{{--                        <p>--}}
{{--                            Discover the new collection.--}}
{{--                        </p>--}}
{{--                        <a href="#" class="btn btn-secondary swipe-to-top" tabindex="0">Discover Now</a>--}}

                    </div>
                </div>
            </div>
            @endforeach
{{--                   <div class="col-12 col-md-6">--}}
{{--                <div class="pro-main last">--}}
{{--                    <figure class="banner-image">--}}
{{--                        <a href="shop-page1.html">--}}
{{--                            <img class="img-fluid" src="images/banners_demo_3/banner_4.jpg" alt="Banner Image"></a>--}}
{{--                    </figure>--}}
{{--                    <div class="pro-description">--}}
{{--                        <h2 class="pro-title">--}}
{{--                            Sneakers--}}
{{--                        </h2>--}}
{{--                        <p>--}}
{{--                            Protect your every step.--}}
{{--                        </p>--}}
{{--                        <a href="#" class="btn btn-secondary swipe-to-top" tabindex="0">Discover Now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>


    </div>
    </div>
</section>

<!-- Testimonails -->
<section class="pro-content testimonails-content">

    <div class="container">
        <!-- heading -->

        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="pro-heading-title">
                    <h2> {{ __('messages.отзывы_наших_клиентов') }}
                    </h2>
                    <p>Vitae posuere urna blandit sed. Praesent ut dignissim risus.</p>
                </div>
            </div>
        </div>
        <div class="testimonials-carousel-js row">
            <div class="col-12">
                <figure class="banner-image">
                    <img class="img-fluid" src="images/about-us/profile.png" alt="Profile Image">
                </figure>
                <div class="pro-detail">
                    <h2><a href="blog-page1.html" >Jeny Martinez</a></h2>

                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor
                        incdidunt ut labore et dolore magna aliqua [....]
                    </p>
                    <a href="#" class="pro-readmore" tabindex="0">Read more</a>
                </div>
            </div>

            <div class="col-12">
                <figure class="banner-image">
                    <img class="img-fluid" src="images/about-us/profile.png" alt="Banner Image">
                </figure>
                <div class="pro-detail">
                    <h2><a href="blog-page1.html" >Theresa May</a></h2>

                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor
                        incdidunt ut labore et dolore magna aliqua [....]
                    </p>
                    <a href="#" class="pro-readmore" tabindex="0">Read more</a>
                </div>
            </div>
            <div class="col-12">
                <figure class="banner-image">
                    <img class="img-fluid" src="images/about-us/profile.png" alt="Banner Image">
                </figure>
                <div class="pro-detail">
                    <h2><a href="blog-page1.html" >Malissa</a></h2>

                    <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor
                        incdidunt ut labore et dolore magna aliqua [....]
                    </p>
                    <a href="#" class="pro-readmore" tabindex="0">Read more</a>
                </div>
            </div>

        </div>
    </div>
</section>











@include('partials.footer')
