@extends('Layout/mainLayout')

@section('content')

<div class="mainBlock">
<div class="full_name">{{$fullNews->name}}</div>
<div class="full_image"><img src="{{$fullNews->image}}"></div>
<div class="full_text">{!!$fullNews->text!!}</div>
</div>


@endsection