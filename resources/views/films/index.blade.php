@extends('layouts.base')

@section('pageTitle')
Films database
    
@endsection

@section('content')
<style>
  
   .blue-shades-table{
       background-color:#cffffe;
       color:#1a1a2e;
       box-shadow: 5px 10px 18px #1a1a2e;
       padding: 40px;
   }

   .t_head{
       color: #ee6f57;
   }
  .space{
      width: 10%;
  }
  table td{
      
  }
</style>


<table class="blue-shades-table">

<thead class="t_head">
    <tr>
<th>Title</th>
<th>Director</th>
<th>Genre</th>
<th>Length</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

@foreach ($films as $film)
<tr>
    <td>{{$film->Title}}</td>
    <td>{{$film->author}}</td>
    <td>{{$film->genre}}</td>
    <td>{{$film->length}} min</td>
    <td class="space">
        <a href="{{route('films.show', ['film'=> $film ->id])}}"><button type="button" class="btn btn-info">Read plot</button></a>
        <a href="{{route('films.edit', [ 'film' => $film->id ])}}"><button type="button" class="btn btn-success mb-1 mt-1">Edit</button></a>
<form action="{{route('films.destroy', ['film'=>$film ->id])}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
    </td>
</tr>




@endforeach

</tbody>
</table>
<a href="{{route('films.create')}}"><button type="button" class="btn btn-success mt-5">Submit a new movie</button></a>

  
@endsection