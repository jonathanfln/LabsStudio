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

@include('components.services', $services)

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
        @foreach($services1Rand as $service)
        <div class="icon-box light left">
          <div class="service-text">
            <h2>{{$service->name}}</h2>
            <p>{{$service->content}}</p>
          </div>
          <div class="icon">
            <i class="{{$service->image}}"></i>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Devices -->
      <div class="col-md-4 col-sm-4 devices">
        <div class="text-center">
          <img src="{{asset('theme/img/device.png')}}" alt="">
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-4 col-sm-4 features">
        @foreach($services2Rand as $service)
        <div class="icon-box light left">
          <div class="service-text">
            <h2>{{$service->name}}</h2>
            <p>{{$service->content}}</p>
          </div>
          <div class="icon">
            <i class="{{$service->image}}"></i>
          </div>
        </div>
        @endforeach
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
      @foreach($projets as $projet)
        <div class="col-md-4 col-sm-6">
          <div class="sv-card">
            <div class="card-img">
              <img src="{{Storage::disk('imgProjet')->url($projet->image)}}" alt="{{$projet->name}}">
            </div>
            <div class="card-text">
              <h2>{{$projet->name}}</h2>
              <p>
                {{$projet->content}}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div>
      {{$projets->links('components.pagination')}}
    </div>
  </div>
</div>
<!-- services card section end-->

@include('components.newsletter')

@include('components.contact')

@endsection