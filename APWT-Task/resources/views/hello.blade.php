@extends('layouts.app')
@section('content')
<div>
<section id="history" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
            <div class="historyArea text-center">
            <h3>Our History</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <button type="button" name="button" class="btn btn-outline-primary px-3">Read More</button>
          </div>
        </div>
      </div>
      </div>
    </section>
    <br>
    {{$message}}
</div>
@endsection