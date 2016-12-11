@extends('layouts.head-front')

@section('content')
<!-- Slide show -->
<div class="slide-home1">
  <div class="slide-container">
    @forelse($slideImages as $image)
      <a href="/section/{{ $image->section_id }}"><img src="/images/sliders/{{ $image->url }}" alt=""></a>
    @empty
      <img src="/images/sliders/2.jpg" alt="">
      <img src="/images/sliders/3.jpg" alt="">
      <img src="/images/sliders/1.jpg" alt="">
      <img src="/images/sliders/2.jpg" alt="">
      <img src="/images/sliders/3.jpg" alt="">
    @endforelse
  </div>
  <div class="thumbs">
    <?php $i = 0; ?>
    @forelse($slideImages as $image)
      <a data-slide-index="{{ $i }}" href=""><img src="/images/sliders/thumbs/{{ $image->url }}" alt="" /></a>
      <?php $i++; ?>
    @empty
      <a data-slide-index="0" href=""><img src="/images/sliders/thumb1.jpg" alt="" /></a>
      <a data-slide-index="1" href=""><img src="/images/sliders/thumb2.jpg" alt="" /></a>
      <a data-slide-index="2" href=""><img src="/images/sliders/thumb3.jpg" alt="" /></a>
      <a data-slide-index="3" href=""><img src="/images/sliders/thumb4.jpg" alt="" /></a>
      <a data-slide-index="4" href=""><img src="/images/sliders/thumb5.jpg" alt="" /></a>
    @endforelse
  </div>
</div>
<!-- ./Slide show -->
<!-- promotions -->
<!-- <div class="margin-top-60">
  <div class="container">
    <div class="row margin-0">
      <div class="col-sm-12 col-md-4 padding-0 wow fadeInLeft">
        <div class="kt-banner block-banner-text margin-bottom-30" data-height="214" data-background="images/banners/4.jpg" data-positionleft="30px" data-verticalmiddle="middle">
          <a href="#" class="bg-image">Banner Bg</a>
          <div class="content">
            <h3 class="title">Creative</h3>
            <h4 class="subtitle">Work Lamp</h4>
            <a class="link-more" href="#"><i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 padding-0 wow fadeInUp">
        <div class="kt-banner block-banner-text white margin-bottom-30" data-height="214" data-background="images/banners/5.jpg" data-positionleft="30px" data-verticalmiddle="middle">
          <a href="#" class="bg-image">Banner Bg</a>
          <div class="content">
            <h3 class="title">Decorative</h3>
            <h4 class="subtitle">Bolt stool</h4>
            <a class="link-more" href="#"><i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 padding-0 wow fadeInRight">
        <div class="kt-banner block-banner-text margin-bottom-30" data-height="214" data-background="images/banners/6.jpg" data-positionleft="30px" data-verticalmiddle="middle">
          <a href="#" class="bg-image">Banner Bg</a>
          <div class="content">
            <h3 class="title">Revoler bar</h3>
            <h4 class="subtitle">WOODEN</h4>
            <a class="link-more" href="#"><i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- ./promotions -->
<div class="row margin-0">
  <!-- <div class="col-sm-6 padding-0">
    <div class="block-social">
      <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
    </div>
  </div>
  <div class="col-sm-6 padding-0">
    <div class="block-newsletter">
      <div class="inner">
        <h2 class="title">Join Our Newsletter</h2>
        <p class="subtitle">Sign up our newsletter and get more events & promotions!</p>
        <form>
          <input type="text" placeholder="Enter your email here" class="text-input">
          <button class="button"><i class="fa fa-envelope-o"></i></button>
        </form>
      </div>
    </div>
  </div> -->
</div>
@endsection
