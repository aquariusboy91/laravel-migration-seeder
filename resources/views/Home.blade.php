@extends('layout.base')

@section('documentTitle')
    Home
@endsection

@section('content')
    @foreach ($trains as $train)
        <div>
            <h2>{{$train->Azienda}}</h2>
            <h3>{{$train->Stazione_di_partenza}}</h3>
            <h3>{{$train->Stazione_di_arrivo}}</h3>
            <h5>{{$train->Orario_di_partenza}}</h5>
            <h5>{{$train->Orario_di_arrivo}}</h5>
            <h5>{{$train->Orario_di_arrivo}}</h5>
            <h6>{{$train->Codice_treno}}</h6>
            <h6>{{$train->Numero_carrozze}}</h6>
            <h6>{{$train->In_orario}}</h6>
            <h6>{{$train->Cancellato}}</h6>
        </div>
   @endforeach
@endsection