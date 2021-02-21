@extends('member.base')
@section('content')
{{auth()->user()->email}}

@endsection