@extends('layouts.base')

@section('pageTitle')
Films database
    
@endsection

@section('content')
<style>
  
    ul li{
        list-style-type: none;
    }
  h3, ul{
      text-align: center;
  }
</style>

    <div class="overview d-flex">

    
<div class="db-title">
                <h3>Title</h3>
                @foreach ($films as $film)
                <ul>
                    
                    <li>{{ $film->Title }}</li>
                    
                </ul>
                @endforeach
            </div>
            <div class="db-author">
                <h3>Author</h3>
                @foreach ($films as $film)
                <ul>
                    
                    <li>{{ $film->author}}</li>
                    
                </ul>
                @endforeach


            </div>
            <div class="db-genre">
        <h3>Genre</h3>
                @foreach ($films as $film)
                <ul>
                    
                    <li>{{ $film->genre}}</li>
                    
                </ul>
                @endforeach

            </div>
            <div class="db-length">
                 <h3>Length</h3>
                @foreach ($films as $film)
                <ul>
                    
                    <li>{{ $film->length}} min</li>
                    
                </ul>
                @endforeach
            </div>

</div>
@endsection