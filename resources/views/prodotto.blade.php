@php
$cards = config('products');
$card = $cards[$id];
@endphp

@extends('layouts.layout')
@section('titolo')
    {{$card['titolo']}}

@endsection

@section('mainContent')


        <div class="card-background">
            <div class="card-products">
                <h2>{{$card['titolo']}}</h2>

                <img src={{$card['src-p']}} alt="">
                <p> {!!$card['descrizione']!!}</p>

                <div class="sinistra">

                    <a href="{{route('products.show', ($id - 1))}}"><i class="fas fa-chevron-left"></i></a>

                </div>
                <div class="destra">

                    <a href="{{route('products.show', $id + 1)}}"><i class="fas fa-chevron-right"></i></a>

                </div>


            </div>


        </div>




@endsection
