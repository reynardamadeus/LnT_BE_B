

@extends('layout.app')


    @section('title', 'Website')
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

    @section('content')
    <br>
    <div class="container">
        <div class="row gap-3">
            <div class="col bg-success text-light p-4">
                <h2>Visi</h2>
                <p>Menjadi programmer Backend yang handal</p>
            </div>
            <div class="col bg-success text-warning  p-4 ">
                <h2>Misi</h2>
                <p>Belajar laravel hingga paham 100%</p>
            </div>
        </div>
    </div>
    @endsection
