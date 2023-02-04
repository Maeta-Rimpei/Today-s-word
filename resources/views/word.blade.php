@extends('share')

@section('content')
<div class="contents">
    <div class="person">
        <img class="pic" src="data:image/jpg;base64,<?= $person_pic ?>">
        <p>{{ $person_name }}</p>
    </div>
    <div class="word">
        <strong>{{ $word }}</strong>
    </div>
</div>
@endsection
