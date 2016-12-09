@extends('layouts.head-front')

@section('content')
<div class="main-container no-sidebar no-padding">
  <div class="container">
    <nav class="woocommerce-breadcrumb breadcrumbs">
      <a href="/">Home</a>
      Quienes somos
    </nav>
  </div>
  <div class="page-banner bg-parallax"></div>
  <div class="heading-section style2 text-center margin-top-50 margin-bottom-20" >
    <h3 class="title">OUR TEAM</h3>
    <span class="subtitle">Welcome to Lucky - Beautiful Creative Ecommerce Template!</span>
  </div>
  <div class="section-team">
    <div class="container">
      <div class="owl-carousel nav-center nav-style-2" data-loop="true" data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":"1"},"768":{"items":"3"},"992":{"items":"4"}}'>
        <div class="team-item">
          <div class="team">
            <div class="content">
              <div class="avatar">
                <img src="images/avatars/1.jpg" alt="">
              </div>
              <h3 class="name">Wang Jing</h3>
              <span class="position">Creative Web Designer</span>
              <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
            </div>
          </div>
        </div>
        <div class="team-item">
          <div class="team">
            <div class="content">
              <div class="avatar">
                <img src="images/avatars/2.jpg" alt="">
              </div>
              <h3 class="name">Howard J4</h3>
              <span class="position">CEO-Founder Luckyshop</span>
              <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
            </div>
          </div>
        </div>
        <div class="team-item">
          <div class="team">
            <div class="content">
              <div class="avatar">
                <img src="images/avatars/3.jpg" alt="">
              </div>
              <h3 class="name">Jimmy Doe</h3>
              <span class="position">Team Leader</span>
              <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
            </div>
          </div>
        </div>
        <div class="team-item">
          <div class="team">
            <div class="content">
              <div class="avatar">
                <img src="images/avatars/4.jpg" alt="">
              </div>
              <h3 class="name">Christiana Lee</h3>
              <span class="position">Sale Manager</span>
              <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-testimonials">
    <div class="container">
      <div class="heading-section style2 text-center" >
        <h3 class="title">OUR CLIENTS SAY</h3>
      </div>
      <div class="testimonials owl-carousel nav-center nav-style-3" data-loop="true" data-nav="true" data-dots="false" data-items="1" data-autoplay="true">
        <div class="testimonial">
          <div class="inner">
            <div class="text">
              <p>Mauris eu euismod tellus curabitur a neque in nulla iaculis facilisis. Proin sit amet semper justo, eget lacinia nulla. Nullam ante purusauctor in felis.</p>
            </div>
            <span class="name">John Doe - CEO Apple</span>
          </div>
        </div>
        <div class="testimonial">
          <div class="inner">
            <div class="text">
              <p>Mauris eu euismod tellus curabitur a neque in nulla iaculis facilisis. Proin sit amet semper justo, eget lacinia nulla. Nullam ante purusauctor in felis.</p>
            </div>
            <span class="name">John Doe - CEO Apple</span>
          </div>
        </div>
        <div class="testimonial">
          <div class="inner">
            <div class="text">
              <p>Mauris eu euismod tellus curabitur a neque in nulla iaculis facilisis. Proin sit amet semper justo, eget lacinia nulla. Nullam ante purusauctor in felis.</p>
            </div>
            <span class="name">John Doe - CEO Apple</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
