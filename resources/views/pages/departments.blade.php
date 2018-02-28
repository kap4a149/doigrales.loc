@extends('Layout/mainLayout')

@section('content')

<?php
$result = DB::select('SELECT * FROM departments');
dump($result);
?>
@endsection