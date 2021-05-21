@extends('layouts.base')

@section('pageTitle')
    Edit: {{$film->Title}}
@endsection

@section('content')

<form action="{{route('films.update', ['film' => $film])}}" method="post">
    
    @method('put')
       @csrf
      
        <div class="form-group">
             
            <label for="Title">Title</label>
            <input id="Title" class="form-control" placeholder="Title" type="text" name="Title" value="{{old('Title') ? old('Title') : $film->Title}}">

        </div>
        <div class="form-group">
             
            <label for="Author">Author</label>
            <input id="Author" class="form-control" placeholder="Author" type="text" name="author" value="{{old('author') ? old('author') : $film->author}}">

        </div>
        <div class="form-group">
            
             <label for="Genre">Genre</label>
            <input id="Genre" class="form-control" placeholder="Genre" type="text" name="genre" value="{{old('genre') ? old('genre') : $film->genre}}">

        </div>
        <div class="form-group">
            
            <label for="Length">Length</label>           
            <input id="Length" class="form-control" type="number" name="length" min="60" max="240" value="{{old('length') ? old('length') : $film->length}}">  

        </div>
           <div class="form-group">
            
            <label for="Plot">Plot</label>           
            <input id="Plot" class="form-control"  placeholder="Plot" type="text" name="plot"  value="{{old('plot') ? old('plot') : $film->plot}}">  

        </div>
      
  
       <div>
           <input type="submit" value="Submit">

       </div>
        
    </form>
    
@endsection