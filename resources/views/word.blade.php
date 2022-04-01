@extends('share')

@section('content')
<div class="contents">
    <div class="person">
        <img class="pic" src="{{ asset($person_pic) }}" alt="">
        <p>{{ $person_name }}</p>
    </div>
    <div class="word">
        <strong>{{ $word }}</strong>
    </div>
</div>
@endsection
