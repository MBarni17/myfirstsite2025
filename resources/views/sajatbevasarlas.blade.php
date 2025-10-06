@extends('pastellayout')

@section('tartalom')
<p>A bevásárló lista:</p>
    <ul>
        @foreach ($bevasarlolista as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection

@section('cim')
Bevásárlás
@endsection
