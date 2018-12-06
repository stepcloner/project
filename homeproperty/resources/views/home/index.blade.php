@extends('layouts.master')
@section('content')
    <h2>welcome</h2>
    <p>This is myhome page</p>
    
   @foreach($data as $item)
       <li> {{$item}} </li>
   @endforeach


@endsection

@section('styles')
   <style>
     h2{     color: blue;}
   </style>
@endsection

@section('title')
    <h1>TEST H1 na ja</h1>
@endsection

@section('scripts')
    <script>
        alert();
    </script>
@endsection