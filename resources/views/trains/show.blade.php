@extends('layout.base')

@section('documentTitle')
    Houses
@endsection

@section ('content')

    <div>
            <h1>{{$trains->Azienda}}</h1>
            <h3>{{$trains->Stazione_di_partenza}}</h3>
            <h3>{{$trains->Stazione_di_arrivo}}</h3>
            <h5>{{$trains->Orario_di_partenza}}</h5>
            <h5>{{$trains->Orario_di_arrivo}}</h5>
            <h5>{{$trains->Orario_di_arrivo}}</h5>
            <h6>{{$trains->Codice_treno}}</h6>
            <h6>{{$trains->Numero_carrozze}}</h6>
            <h6>{{$trains->In_orario}}</h6>
            <h6>{{$trains->Cancellato}}</h6>
    </div>

@endsection 