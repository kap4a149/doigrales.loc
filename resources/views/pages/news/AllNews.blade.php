@extends('Layout/mainLayout')

@section('content')

<h1 class="PageName">News</h1>
<div class="mainBlock">
@foreach($allNews as $allNew)
<a class="bigLink" href="news/{{$allNew->nameurl}}">
<div class="newsBlock">
<div class="articleName"> {!! $allNew->name !!} </div>
<div class="photo"><img src=" {{ $allNew->image }} "></div>
<div class="description"> {{ $allNew->description }} </div>
</a>
<div class="category"><a href="news/category/<? echo str_replace(' ', '_',$allNew->category) ?>"><?php echo ucfirst($allNew->category) ?></a></div>
<div class="time"> {{ $allNew->time }} </div>
</div>
<hr class="hr_news">
@endforeach()

<div>  <!-- End of main block -->




@endsection