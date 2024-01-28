@extends('layouts.main')

@section('main')
<div class="welcome-main ">
     main
    <h1>asdasdas</h1>
    <div class="cards-container container">
        <ul class="cards">
             @foreach ( $comics as $comic)
                <li class="card-container">
                    <div class="img-container">
                        <img src="{{ $comic ['thumb'] }}" alt="">
                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
   
         
        
   
   
</div>
   
@endsection