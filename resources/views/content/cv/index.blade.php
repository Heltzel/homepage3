@extends('app')
@section('title', 'mijn cv')
@section('content')
<style>
  .sidecard {
    height: 521px;
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

          <div class="col-md-2 mb-0"></div>

          <div class="col-md-3 sidecard">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                @include('content.cv.includes.card')
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
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