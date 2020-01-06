@extends('layouts.main')

@section('content')
<nav class="navbar navbar-default main-navigation qt-box-shadow">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="mobile-menu-text">MENU</span>
        <span class="mobile-menu-bars">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </span>
      </button>
    </div>



    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav">
        @foreach ($Menu as $menu)
          <?php  $hasChild = false ;?>
          @foreach ($Menu as $child)
            @if($menu->id == $child->parent)
              <?php $hasChild = true; ?>
            @endif
          @endforeach
          @if($menu-> parent == 0)
            <li class="dropdown">
              @if($hasChild)
                  <a href="{!! $menu->link !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!}<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    @foreach ($Menu as $child)
                      @if($menu->id == $child->parent)
                        <li class=""><a href="{!! $child->link !!}">{!! $child->title !!}</a></li>
                      @endif
                    @endforeach
                  </ul>
              @else
                <a href="{!! $menu->link !!}" class="dropdown-toggle" data-toggle="dropdown">{!! $menu->title !!}</a>
              @endif
            </li>
          @endif
        @endforeach

        <!-- <li class=""><a href="services.html"> <i class="fa fa-gear"></i> خدمات</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-group"></i> درباره ما <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class=""><a href="page-who-we-are.html">ما که هستیم</a></li>
            <li class=""><a href="testimonials.html">از زبان مشتریان</a></li>
            <li class=""><a href="page-simple.html">صفحه ساده</a></li>
            <li class=""><a href="page-full.html">صفحه کامل</a></li>
          </ul>
        </li>

        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-home"></i> صفحه اصلی <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="index.html">صفحه اصلی حالت 1</a></li>
            <li class=" "><a href="index-2.html">صفحه اصلی حالت 2</a></li>
          </ul>
        </li> -->

      </ul>

    </div><!--/.nav-collapse -->

  </div>
</nav>


<!-- =========================================================================================== -->
<!-- =================== Home Page Middle Area ================================================= -->
<!-- =========================================================================================== -->

<section class="qt-middle qt-home-middle qt-home-middle-with-image">

  <div class="container">

    <div class="qt-home-slider qt-one-edge-shadow">

      <div id="qt_home_carosel" class="carousel slide qt-home-carosel" data-ride="carousel">

        <!-- All Slides Container -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{!! $slider[0]->image !!}" alt="Slider 1">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>{!! $slider[0]->title !!}</h3>
                <p>{!! $slider[0]->brief !!}</p>


                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div><!-- item -->
          <div class="item ">
            <img src="{!! $slider[1]->image !!}" alt="Slider 2">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>{!! $slider[1]->title !!}</h3>
                <p>{!! $slider[1]->brief !!}</p>

                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div>

          <div class="item">
            <img src="{!! $slider[2]->image !!}" alt="Slider 3">
             <div class="carousel-caption">
              <div class="qt-carousel-caption-box">
                <h3>{!! $slider[2]->title !!}</h3>
                <p>{!! $slider[2]->brief !!}</p>

                <a href="#" class="btn btn-primary btn-lg qt-carosel-caption-btn">ادامه <i class="fa fa-arrow-circle-right"></i></a>

              </div>
            </div>
          </div><!-- item -->

        </div><!-- carousel-inner -->

        <!-- Slides Navigation -->
        <ul class="nav nav-pills nav-justified qt-carosel-nav">
          <li data-target="#qt_home_carosel" data-slide-to="0" class="active">
            <a href="#">
              <div class="row qt-carosel-nav-item">
                <div class="col-xs-2 qt-carosel-nav-icon">
                  <i class="fa fa-list"></i>
                </div>
                <div class="col-xs-10  qt-carosel-nav-text">
                  <h3>{!! $slider[0]->title !!}</h3>
                </div>
              </div>
            </a>
          </li>
          <li data-target="#qt_home_carosel" data-slide-to="1">
            <a href="#">
              <div class="row qt-carosel-nav-item">
                <div class="col-xs-2 qt-carosel-nav-icon">
                  <i class="fa fa-cogs"></i>
                </div>
                <div class="col-xs-10  qt-carosel-nav-text">
                  <h3>{!! $slider[1]->title !!}</h3>
                </div>
              </div>
            </a>
          </li>
          <li data-target="#qt_home_carosel" data-slide-to="2">
            <a href="#">
              <div class="row qt-carosel-nav-item">
                <div class="col-xs-2 qt-carosel-nav-icon">
                  <i class="fa fa-users"></i>
                </div>
                <div class="col-xs-10  qt-carosel-nav-text">
                  <h3>{!! $slider[2]->title !!}</h3>
                </div>
              </div>
            </a>
          </li>
        </ul> <!-- qt-carosel-nav -->


      </div><!-- qt_home_carosel -->

    </div>

  </div>

</section>

<!-- =========================================================================================== -->
<!-- =================== Begin page content ==================================================== -->
<!-- =========================================================================================== -->

<section class="qt-page-wrapper qt-home-page">
  <div class="container">

    <!-- Call to Action Section -->
    <div class="well well-lg">
      <div class="row">
        <div class="col-md-8">
          <p class="qt-clean-bottom">{!! $notification->brief !!}</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-primary btn-block" href="#">اطلاعیه <i class="fa fa-arrow-circle-right"></i> </a>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-8">

        <div class="qt-page-header">
          <h2>عنوان<small>اصلی </small></h2>
        </div>

        <div class="qt-featured-image qt-page-featured-image">
          <img src="{{ asset('img/featured-5.jpg') }}" alt="Welcome to CreaTec Website London">
        </div>

        <div class="qt-page-body">

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p class="lead">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

          <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>

        </div>

      </div>

      <div class="col-md-4">

<!-- =========================================================================================== -->
<!-- =========================== Newsletter ==================================================== -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">

          <div class="qt-widget-header">
            <h3>عضویت در خبرنامه</h3>
          </div>

          <div class="qt-widget-body">
            <p>برای دریافت آخرین اخبار سایت ابتدا ایمیل خود را وارد و روی گزینه عضویت کلیک کنید</p>

            <form>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
              <input type="text" name="EMAIL" class="form-control" placeholder="ایمیل خود را وارد کنید" required>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">عضویت</button>
              </span>
            </div><!-- /input-group -->

            </form>

          </div>

        </div>

<!-- =========================================================================================== -->
<!-- =========================== News & Events ================================================= -->
<!-- =========================================================================================== -->

        <div class="qt-widget-box">
          <div class="qt-widget-header">
            <h3>آخرین اخبار و رویدادها</h3>
          </div>

          <div class="qt-widget-body">
            <ul class="list-group row qt-sidebar-news-listing">

              <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                <a class="fade qt-sidebar-news-item-img" href="blog-single-post.html">
                  <img src="{{ asset('img/thumbnail-1-sm.jpg') }}" alt="A good news item title for the sidebar">
                </a>
                <h4><a href="blog-single-post.html">عنوان خبر 1</a></h4>
                <p>
                  لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ... <a class="qt-sidebar-read-more" href="blog-single-post.html">ادامه <i class="fa fa-arrow-circle-right"></i></a>
                </p>
              </li>

              <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                <a class="fade qt-sidebar-news-item-img" href="blog-single-post.html">
                  <img src="{{ asset('img/thumbnail-2-sm.jpg') }}" alt="A good news item title for the sidebar">
                </a>
                <h4><a href="blog-single-post.html">عنوان خبر 2</a></h4>
                <p>
                  لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ... <a class="qt-sidebar-read-more" href="blog-single-post.html">ادامه <i class="fa  fa-arrow-circle-right"></i></a>
                </p>
              </li>

              <li class="list-group-item col-sm-4 col-md-12 qt-sidebar-news-item">
                <a class="fade qt-sidebar-news-item-img" href="blog-single-post.html">
                  <img src="{{ asset('img/thumbnail-3-sm.jpg') }}" alt="A good news item title for the sidebar">
                </a>
                <h4><a href="blog-single-post.html">عنوان خبر 3</a></h4>
                <p>
                  لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود ... <a class="qt-sidebar-read-more" href="blog-single-post.html">ادامه <i class="fa  fa-arrow-circle-right"></i></a>
                </p>
              </li>

            </ul>

            <a href="blog-listing-1.html" class="btn btn-primary btn-lg"><i class="fa fa-newspaper-o"></i> نمایش همه</a>

          </div>
        </div>

<!-- =========================================================================================== -->
<!-- =========================================================================================== -->
<!-- =========================================================================================== -->

      </div>

    </div>

  </div>
</section>


<!-- =========================================================================================== -->
<!-- =========================== Recent Photo Galleries ======================================== -->
<!-- =========================================================================================== -->

<section class="qt-recent-photo-galleries">

  <div class="container">

    <div class="row">

      <div class="col-sm-12 col-md-3 text-center">
        <h3>آخرین تصاویر</h3>
        <a href="photo-albums-3-col.html" class="btn btn-primary btn-lg qt-recent-photo-galleries-view-all"><i class="fa fa-camera"></i> نمایش همه</a>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="photo-gallery-6-col.html" class="qt-fade qt-photo-item">
          <h4>تصویر 1</h4>
          <img class="" src="{{ asset('img/gallery/4.jpg') }}" alt="">
        </a>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="photo-gallery-6-col.html" class="qt-fade qt-photo-item">
          <h4>تصویر 2</h4>
          <img class="" src="{{ asset('img/gallery/2.jpg') }}" alt="">
        </a>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="photo-gallery-6-col.html" class="qt-fade qt-photo-item">
          <h4>تصویر 3</h4>
          <img class="" src="{{ asset('img/gallery/11.jpg') }}" alt="">
        </a>
      </div>

    </div>

  </div>

</section>

@endsection