@extends('layouts.main')

@section('main')
<div class="container">
  <div class="row justify-content-center text-center">
    @foreach ($trains as $train)
    <div class="col-4">
      <ul class="list-unstyled">
        <li class="m-3 p-3 card">
          <h5 class="m-1">{{$train->azienda}}</h5>
          <div>{{$train->stazione_di_partenza}}</div>
          <div>{{$train->stazione_di_arrivo}}</div>
          <div>{{$train->codice_treno_numero}}</div>
          <div>{{$train->orario_di_arrivo}}</div>
          <div>{{$train->orario_di_partenza}}</div>
        </li>
      </ul>
    </div>
    @endforeach
  </div>
</div>

@endsection