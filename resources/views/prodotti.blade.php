@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
    <div class="shoes-container">
        @foreach ($scarpe as $item)
            <div class="shoes-item">

                @if ($item['link'] != '')
                <img src="{{$item['link']}}" alt="">
                @endif

                <div class="shoes-info">
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
                </div>

                <div class="overlay">
                    
                </div>
            </div>
        @endforeach
    </div>


    
    
@endsection