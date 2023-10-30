@extends('layouts.app')

@section('title')
    Make Transfer
@endsection

@section('content')
<div class="col-md-9 mx-auto mt-4">
    <div class="card border-0 bg-transparent">
        <div class="card-body">
            <div class="text-center">
                <span class="fs-5">Make Transfer</span>
            </div>
            {{-- <div class="mt-5 text-center fw-bolder">
                <h1>Latest Crypto Prices <br> All In One Place</h1>
            </div> --}}
            <div class="card mt-3 shadow">
                <div class="card-body">
                    @livewire('transfer-form', ['lazy' => true])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
