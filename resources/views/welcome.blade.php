@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="col-md-9 mx-auto mt-4">
        <div class="card border-0 bg-transparent">
            <div class="card-body">
                <div class="text-center">
                    <span class="badge text-bg-warning fs-5 text-dark">Whats New</span>
                    <span class="fs-5">All Crypto Prices</span>
                </div>
                <div class="mt-5 text-center fw-bolder">
                    <h1>Latest Crypto Prices <br> All In One Place</h1>
                </div>
                <div class="card mt-3 shadow">
                    <div class="card-body">
                        @livewire('table', ['lazy' => true])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
