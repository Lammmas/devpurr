@extends('layouts.master')

@section('title', 'DevPurr | Home')

@section('content')
    <div class="title-jumbo" style="height: 101vh;min-height:110%; background: url('{{ asset('/img/blurred-background-1.jpg') }}') top center;margin-top:-20px;">
        <div class="container center-block text-center">
            <h1 class="title">
                Welcome!
            </h1>
            <h2 class="intro">
                I make pretty things :3
            </h2>
        </div>
    </div>

    <div class="container m-t-n-lg">
        <div class="row">
            <div class="col-md-6">
                <div style="background-color: #333;opacity: 0.5;">
                    <h1>Hello world!</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div style="background-color: #333;opacity: 0.5;">
                    <h1>Hello again!</h1>
                </div>
            </div>
        </div>
    </div>

@endsection
