<!-- SLIDER -->
<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider4" class="rev_slider fullwidthabanner">
        <ul>
            <!-- Slide 1 -->
            @foreach($slider as $rs)
            <li data-transition="random">
                <!-- Main Image -->
                <img src="{{ Storage::url($rs->image) }}" alt="" data-bgposition="center center" data-no-retina>

                <!-- Layers -->
                <div class="tp-caption tp-resizeme text-333 letter-spacing-3 text-center font-weight-300"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                     data-fontsize="['30','30','30','25']"
                     data-lineheight="['36','36','36','36']"
                     data-width="full"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="700"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <span class="text-line left"></span>{{$rs->title}}<span class="text-line right"></span>
                </div>

                <div class="tp-caption tp-resizeme font-weight-300 letter-spacing-12 text-center"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['37','37','37','0']"
                     data-fontsize="['130','130','130','80']"
                     data-lineheight="['130','130','130','130']"
                     data-width="full"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <span class="text-accent">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</span>
                </div>

                <div class="tp-caption text-center"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['155','155','155','80']"
                     data-width="full"
                     data-height="none"
                     data-whitespace="normal"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];"
                     data-mask_out="x:inherit;y:inherit;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <a href="#" class="themesflat-button has-padding-36 bg-accent has-shadow"><span>SHOP NOW</span></a>
                </div>
            </li>
            <!-- /End Slide 1 -->
        @endforeach
            <!-- Slide 2 -->

            <!-- /End Slide 2 -->
        </ul>
    </div>
</div>
<!-- END SLIDER -->
