@extends('Layout/mainLayout')

@section('content')

<h1 class="PageName">News</h1>
<div class="mainBlock">
@foreach($showByCategory as $show)
<a class="bigLink" href="http://doigrales.loc/{{$title}}/{{$show->nameurl}}">

<div class="newsBlock">
<div class="articleName"> {{ $show->name }} </div>
<div class="photo"><img src=" {{ $show->image }} "></div>
<div class="description"> {{ $show->description }} </div>
</a>
<div class="category"><?php echo ucfirst($show->category) ?></a></div>
<div class="time"> {{ $show->time }} </div>
</div>
<hr class="hr_news">
@endforeach()

<div>  <!-- End of main block -->




@endsection