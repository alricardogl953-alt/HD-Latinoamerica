@extends('layouts.app')

@section('template_title')
    {{ $toy->name ?? __('Show') . " " . __('Toy') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Toy</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('toys.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $toy->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $toy->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Price:</strong>
                                    {{ $toy->price }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gender Id:</strong>
                                    {{ $toy->gender_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
