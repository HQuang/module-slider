<!-- BEGIN: main -->
<section class="main-slider">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <!-- Slide 1 : Active -->
            <div class="item active">
                <img src="https://www.jpl.nasa.gov/spaceimages/images/mediumsize/PIA21440_ip.jpg" alt="">
                <div class="slide-text slide_style_left zoomInRight">
                    <h1 class="animated zoomInRight">Bootstrap Carousel</h1>
                    <p class="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default animated fadeInLeft">select one</a> <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary animated fadeInRight">select two</a>
                </div>
                <!-- /.carousel-caption -->
            </div>
            <!-- /Slide1 -->
            <!-- Slide 2 -->
            <div class="item ">
                <img src="http://www.wsgf.org/f/u/imagecache/node-gallery-display/contrib/dr/29544/menu_21x9.jpg" alt="">
                <div class="slide-text slide_style_left">
                    <h1 class="animated zoomInRight">Bootstrap Carousel</h1>
                    <p class="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                    <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default animated fadeInLeft">select one</a> <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary animated fadeInRight">select two</a>
                </div>
                <!-- /.carousel-caption -->
            </div>
            <!-- /Slide2 -->
            <!-- Slide 3 -->
            <div class="item ">
                <img src="https://iciimg.us/resources/area/2/pictures/tampabayskylineatnight-large.jpg" alt="">
                <div style="position: absolute; top: 50px; left: 50px">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                        <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a> <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                    </div>
                </div>
                <!-- /.carousel-caption -->
            </div>
            <!-- /Slide3 -->
            <!-- Slide 4 -->
            <div class="item ">
                <img src="https://m.media-amazon.com/images/M/MV5BODlhMmQyMGEtNjljOC00ZGM1LThlNWYtMDI3YTUwY2NiMzNhXkEyXkFqcGdeQXVyNzAwNzU5NzA@._V1_.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Slide 4</h3>
                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
                <!-- /.carousel-caption -->
            </div>
            <!-- /Slide4 -->
        </div>
        <!-- /.carousel-inner -->
        <!-- Controls -->
        <div class="control-box">
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>
            </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.control-box -->
    </div>
    <!-- /#myCarousel -->
</section>
<!-- /.main-slider -->
<script src="{NV_BASE_SITEURL}themes/{TEMPLATE}/js/bootstrap-touch-slider.js"></script>
<script src="{NV_BASE_SITEURL}themes/{TEMPLATE}/js/bootstrap.min.js"></script>
<script src="{NV_BASE_SITEURL}themes/{TEMPLATE}/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript">
    //Carousel Auto-Cycle
    $('#myCarousel').carousel({
        interval : 3000
    })
    $('#myCarousel').bsTouchSlider();
</script>
<!-- END: main -->