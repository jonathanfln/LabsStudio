@extends('layouts.layout')

@section('content')
<!-- Page header -->
<div class="page-top-section">
  <div class="overlay"></div>
  <div class="container text-right">
    <div class="page-info">
      <h2>Services</h2>
      <div class="page-links">
        <a href="#">Home</a>
        <span>Services</span>
      </div>
    </div>
  </div>
</div>
<!-- Page header end-->

@include('components.services')

<!-- features section -->
<div class="team-section spad">
  <div class="overlay"></div>
  <div class="container">
    <div class="section-title">
      <h2>Get in <span>the Lab</span> and  discover the world</h2>
    </div>
    <div class="row">
      <!-- feature item -->
      <div class="col-md-4 col-sm-4 features">
        <div class="icon-box light left">
          <div class="service-text">
            <h2>Get in the lab</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
          </div>
          <div class="icon">
            <i class="flaticon-002-caliper"></i>
          </div>
        </div>
        <!-- feature item -->
        <div class="icon-box light left">
          <div class="service-text">
            <h2>Projects online</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
          </div>
          <div class="icon">
            <i class="flaticon-019-coffee-cup"></i>
          </div>
        </div>
        <!-- feature item -->
        <div class="icon-box light left">
          <div class="service-text">
            <h2>SMART MARKETING</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
          </div>
          <div class="icon">
            <i class="flaticon-020-creativity"></i>
          </div>
        </div>
      </div>
      <!-- Devices -->
      <div class="col-md-4 col-sm-4 devices">
        <div class="text-center">
          <img src="{{asset('theme/img/device.png')}}" alt="">
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-4 col-sm-4 features">
        <div class="icon-box light">
          <div class="icon">
            <i class="flaticon-037-idea"></i>
          </div>
          <div class="service-text">
            <h2>Get in the lab</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
          </div>
        </div>
        <!-- feature item -->
        <div class="icon-box light">
          <div class="icon">
            <i class="flaticon-025-imagination"></i>
          </div>
          <div class="service-text">
            <h2>Projects online</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
          </div>
        </div>
        <!-- feature item -->
        <div class="icon-box light">
          <div class="icon">
            <i class="flaticon-008-team"></i>
          </div>
          <div class="service-text">
            <h2>SMART MARKETING</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt100">
      <a href="" class="site-btn">Browse</a>
    </div>
  </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad">
  <div class="container">
    <div class="row">
      <!-- Single Card -->
      <div class="col-md-4 col-sm-6">
        <div class="sv-card">
          <div class="card-img">
            <img src="{{asset('theme/img/card-1.jpg')}}" alt="">
          </div>
          <div class="card-text">
            <h2>Get in the lab</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
          </div>
        </div>
      </div>
      <!-- Single Card -->
      <div class="col-md-4 col-sm-6">
        <div class="sv-card">
          <div class="card-img">
            <img src="{{asset('theme/img/card-2.jpg')}}" alt="">
          </div>
          <div class="card-text">
            <h2>Projects online</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
          </div>
        </div>
      </div>
      <!-- Single Card -->
      <div class="col-md-4 col-sm-12">
        <div class="sv-card">
          <div class="card-img">
            <img src="{{asset('theme/img/card-3.jpg')}}" alt="">
          </div>
          <div class="card-text">
            <h2>SMART MARKETING</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- services card section end-->

@include('partials.newsletter')

@include('partials.contact')

@endsection