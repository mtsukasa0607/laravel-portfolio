@extends('layouts.helloapp')

@section('title', 'Index')
    
@section('content')
    <p>{{$msg}}</p>
    

    @foreach($data as $datum)
        <p>{{$datum}}</p>
    @endforeach

    
@endsection

@section('footer')
    copyright 2020
@endsection