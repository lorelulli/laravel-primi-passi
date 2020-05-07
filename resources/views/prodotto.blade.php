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

                <div class="immagine">
                    <img src={{$card['src-p']}} alt="">
                    <div class="sinistra">
                        @if ($id == 0)
                            <a href="{{route('products.show', count($cards) - 1)}}"><i class="fas fa-chevron-left"></i></a>
                        @else
                            <a href="{{route('products.show', ($id - 1))}}"><i class="fas fa-chevron-left"></i></a>

                        @endif

                    </div>
                    <div class="destra">

                        @if ($id == (count($cards) - 1))
                            <a href="{{route('products.show', 0)}}"><i class="fas fa-chevron-right"></i></a>

                        @else
                            <a href="{{route('products.show', ($id + 1))}}"><i class="fas fa-chevron-right"></i></a>

                        @endif

                    </div>

                </div>
                <p> {!!$card['descrizione']!!}</p>

            </div>


        </div>




@endsection
