@extends('app')
@section('title', 'Home')
@section('content')

<style>
 
  @media (orientation: portrait) {
    .landscape {
      height: 0;
      width:0;
    }

    .portrait {
      display: block;
      z-index: 1;
    }
  }

   @media (orientation: landscape) {
    .landscape {
      display: block;
      z-index: 1;
    }
    .portrait {
      height: 0;
      width:0;
    }
  }
</style>
<div class="main" id="main">
  <div class="landscape ">
    @include('svg.splashDesktop')
  </div>
  <div class="portrait">
    @include('svg.splashPortrait')
  </div>
</div>

@endsection