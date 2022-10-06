@extends('layouts.app')
@section('content')

<h3>List of our team members</h3>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection