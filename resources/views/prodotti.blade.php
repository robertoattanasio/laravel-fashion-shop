@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
<h1>Prodotti</h1>

@foreach ($scarpe as $item)

@if ($item['brand'] != '')
    <h2>{{$item['brand']}}</h2>   
@endif

@if ($item['model'] != '')
    <h5>{{$item['model']}}</h5>   
@endif

@if ($item['type'] != '')
    <h5>{{$item['type']}}</h5>   
@endif

@if ($item['color'] != '')
    <h5>{{$item['color']}}</h5>   
@endif

@if ($item['link'] != '')
<img src="{{$item['link']}}" alt="">
    <h5></h5>   
@endif


    
@endforeach
    
@endsection