@extends('app')
@section('title', 'mijn cv')
@section('content')
<style>
  .sidecard {
    height: 521px;
  }
.btn-ripple{
  width: 100%;
  position: relative;
  display: inline-block;
  padding: 12px 36px;
  margin: 10px 0;
  color:#81ffca;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  font-size: 18px;
  letter-spacing: 2px;
  border-radius: 7px;
  border:none;
  /* background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4); */
  background: linear-gradient(90deg,#0515a4,#5963c4,#0617b6,#0515a4);
  box-sizing: border-box;
  background-size: 600%;
  animation: animate 14s linear infinite;
}

.btn-ripple:hover{
  /* animation: animate 10s linear infinite; */
 color:#fff;
}

@keyframes animate{
  0%
  {
    background-position: 600%;
  }
  100%
  {
  background-position: 0%;
  }
}
  @media print {
    .page-brake {
      page-break-before: always;
      height: 75px;
    }

    .card {
      border: none;
    }

    .print-btn {
      display: none;
    }
  }

  @print {
    @page :footer {
      display: none
    }

    @page :header {
      display: none
    }
  }
</style>
<div class="container-fluid mt-3">
  <div class="card">

    <div class="card-body m-5">
      <div class="row">
        <div class="col-md-12">
          <div id="logo" class="logo mb-4">
            <h1 class="display-4">Curriculum vitea</h1>
          </div>
        </div>
      </div>

      <div class="container-fluid">

        <div class="row">
          <div class="col-md-7 mb-0">
            <div class="serp">
              <ul class="list-group" style="list-style:none">
                <li>
                  @include('content.cv.includes.personalia')
                </li>
                <li>
                  @include('content.cv.includes.profiel')
                </li>
              </ul>
            </div>
          </div>

          <div class="d-none d-xl-block col-xl-1"></div>

          {{-- <div class="col-md-5  col-lg-3 sidecard"> --}}
          <div class="sidecard ml-3">
            <div class="card flex-md-row mb-5 box-shadow h-md-250 ">
              <div class="card-body d-flex flex-column align-items-start">
                @include('content.cv.includes.card')
              </div>
            </div>
            <div>
              <a  href="#" onclick="window.print()" class="print-btn  btn-ripple">Print deze pagina</a>
              {{-- <a  href="#"  class="print-btn  btn-ripple">Print deze pagina</a> --}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class=" col-md-8">
            @include('content.cv.includes.eigenschappen')
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            @include('content.cv.includes.werkervaringGeert')
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <section>
              @include('content.cv.includes.opleidingen')
            </section>
          </div>
        </div>

        <div class="page-brake"></div>

        <div class="row">
          <div class="col-12">
            <section>
              @include('content.cv.includes.cursusen_ict')
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            @include('content.cv.includes.hobbies')
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection