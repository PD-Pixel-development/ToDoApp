{{-- Hier importeren wij de app.blade.php, hier zit bootstrap al in, en de HTML structure. --}}
@extends('layouts.app')

{{-- Als je goed kijkt in app.blade.php zie je @yield('content') staan, alles wat tussen @section('content') en @endsection komt te staan komt dus in @yield('content')  --}}
@section('content')


<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Todo</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Naar de supermarkt</td>

                    </tr>
                    <tr >
                        <td class="bg-danger">deadline gepasseerd</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
