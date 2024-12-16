@extends('layout.app')


    @section('title', 'Catalog')
    @section('content')
        <br>
        @include('include.carousel')
        <br>
        <div class="container">
            <div class="row row-cols-2 gap-4 justify-content-center poppins">
                @include('include.card')
                @include('include.card')
                @include('include.card')
                @include('include.card')
                @include('include.card')
                @include('include.card')
                @include('include.card')
                @include('include.card')
                @include('include.card')
            </div>
    </div>
    @endsection

    {{-- <div class="container">
        <div class="row">
            <div class="col bg-primary text-light border border-dark">1</div>
            <div class="col bg-primary text-light border border-dark">1</div>
            <div class="col bg-primary text-light  border border-dark">1</div>
            <div class="col bg-primary text-light  border border-dark">1</div>
        </div>
        <div class="row">
            <div class="col bg-primary text-light border border-dark">1</div>
            <div class="col bg-primary text-light border border-dark">1</div>
            <div class="col bg-primary text-light  border border-dark">1</div>
            <div class="col bg-primary text-light  border border-dark">1</div>
            <div class="col bg-primary text-light border border-dark">1</div>
            <div class="col bg-primary text-light border border-dark">1</div>
            <div class="col bg-primary text-light  border border-dark">1</div>
            <div class="col bg-primary text-light  border border-dark">1</div>
        </div>
    </div> --}}


