@extends('layouts.app')
@section('content')

<h1>Product list of {{$name}}</h1><br>


<h2>Books</h2>
@foreach($bnames as $n)
<li>{{$n}}</li>
@endforeach

@endsection