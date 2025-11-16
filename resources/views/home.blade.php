@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Juguetes para {{ $user->name }}</div>

                <div class="card-body">
                    @if($toys->isEmpty())
                        <div class="alert alert-info">No hay juguetes disponibles para tu género.</div>
                    @else
                        <ul class="list-group">
                            @foreach($toys as $toy)
                                <li class="list-group-item">
                                    <strong>{{ $toy->name }}</strong> - ${{ number_format($toy->price, 2) }}
                                    <br>
                                    <small>{{ $toy->description }}</small>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <form class="mt-2" action="{{ route('toys.sendEmail') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>
                        </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
