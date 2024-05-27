@extends('layouts.app')

@section('pageTitle')

Train - Home

@endsection

@section('content')

<div class="container">
    <h1>Tutti i Treni</h1>
    <table class="table">
        <thead>
            <th>Codice Treno</th>
            <th>Città partenza</th>
            <th>Data partenza</th>
            <th>Orario Partenza</th>
            <th>Città arrivo</th>
            <th>Data arrivo</th>
            <th>Orario Arrivo</th>
            <th>Rispetto dell'orario</th>
            <th>Info</th>
        </thead>
        @foreach ($trains as $train)
        <tbody>
            <td>{{$train->train_code}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->departure_date}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->arrival_date}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->in_time === 1 ? 'In Orario' : 'In Ritardo'}}</td>
            <td>{{$train->deleted === 1 ? 'Cancellato' : ''}}</td>
        </tbody>
        @endforeach
    </table>
    <h1>Treni in partenza da oggi</h1>
    <table class="table">
        <thead>
            <th>Codice Treno</th>
            <th>Città partenza</th>
            <th>Data partenza</th>
            <th>Orario Partenza</th>
            <th>Città arrivo</th>
            <th>Data arrivo</th>
            <th>Orario Arrivo</th>
            <th>Rispetto dell'orario</th>
            <th>Info</th>
        </thead>
        @foreach ($trains_today as $train)
        <tbody>
            <td>{{$train->train_code}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->departure_date}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->arrival_date}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->in_time === 1 ? 'In Orario' : 'In Ritardo'}}</td>
            <td>{{$train->deleted === 1 ? 'Cancellato' : ''}}</td>
        </tbody>
        @endforeach
    </table>
    <h1>Treni partiti</h1>
    <table class="table">
        <thead>
            <th>Codice Treno</th>
            <th>Città partenza</th>
            <th>Data partenza</th>
            <th>Orario Partenza</th>
            <th>Città arrivo</th>
            <th>Data arrivo</th>
            <th>Orario Arrivo</th>
            <th>Rispetto dell'orario</th>
            <th>Info</th>
        </thead>
        @foreach ($trains_gone as $train)
        <tbody>
            <td>{{$train->train_code}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->departure_date}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->arrival_date}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->in_time === 1 ? 'In Orario' : 'In Ritardo'}}</td>
            <td>{{$train->deleted === 1 ? 'Cancellato' : ''}}</td>
        </tbody>
        @endforeach
    </table>
</div>

@endsection