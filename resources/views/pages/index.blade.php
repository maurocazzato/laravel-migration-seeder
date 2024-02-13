@extends('layouts.main-layout')


@section('content')
    <div class="container">
        <h1 class="text-center">Treni in Partenza Oggi</h1>

        <table class="table table-bordered text-center" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione Partenza</th>
                    <th>Stazione Arrivo</th>
                    <th>Orario Partenza</th>
                    <th>Orario Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->num_carriages }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


