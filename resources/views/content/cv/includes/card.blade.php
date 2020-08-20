<div id="images">
  <div id="img1">
    {{-- <img src="img/marc1.jpg"  /> --}}
    <img src="{{asset('img/marc1.jpg')}}"class="resize-img">
  </div>
  <div id="img2">
    <img src="{{asset('img/marc1.jpg')}}" class="resize-img1" />
    <img src="{{asset('img/marc1.jpg')}}" class="resize-img1" />
    <img src="{{asset('img/marc1.jpg')}}" class="resize-img1" />
    <img src="{{asset('img/marc1.jpg')}}" class="resize-img1" />
  </div>
</div>

<div id="description">
  <div>
    <h1>
      Marc Heltzel
    </h1>
    <h4>
      Webdeveloper
    </h4>
  </div>
</div>
<div id="details">
 @include('content.cv.includes.competenties')
</div>
<h4 class="geralteerd">
  Gerelateerd
</h4>
<div id="geralteerd" class="ml-1">
  <a href="https://www.sliminict.nl/" target="_self">
    <img src="{{asset('img/logoSlimInIct.jpg')}}" alt="logo SlimInIct" width="90">
  </a>
</div>