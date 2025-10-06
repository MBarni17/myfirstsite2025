@extends('pastellayout')

@section('tartalom')
<div>
    Felhasználónév: {{$fnev}} <br>
    Vezetéknév: {{$vnev}} <br>
    Keresztnév: {{$knev}}
</div>

@endsection
@section('cim')
Felhasználó
@endsection
