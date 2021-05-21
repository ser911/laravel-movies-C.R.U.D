@extends('layouts.base')

@section('pageTitle')

Submit a new movie
    
@endsection

@section('content')

<form action="{{route('films.store')}}" method="post">
    
    @method('post')
       @csrf
      
        <div class="form-group">
             
            <label for="Title">Title</label>
            <input id="Title" class="form-control" placeholder="Title" type="text" name="Title" value="{{old('Title')}}">

        </div>
        <div class="form-group">
             
            <label for="Author">Film-director</label>
            <input id="Author" class="form-control" placeholder="Film-director" type="text" name="author" value="{{old('author')}}">

        </div>
        <div class="form-group">
            
             <label for="Genre">Genre</label>
            <input id="Genre" class="form-control" placeholder="Genre" type="text" name="genre" value="{{old('genre')}}">

        </div>
        <div class="form-group">
            
            <label for="Length">Length</label>           
            <input id="Length" class="form-control" type="number" name="length" min="60" max="240" value="{{old('length')}}">  

        </div>
         <div class="form-group">
            
            <label for="Plot">Plot</label>           
            <textarea id="Plot" class="form-control"  placeholder="Plot" name="plot" rows="10" cols="30">  

        </div>
      
  
       <div>
           <input type="submit" value="Submit">

       </div>
        
    </form>
    
    @endsection
  