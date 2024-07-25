@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        @if(Auth::check())
        {{ Auth::user()->name }}
        <h5 class="card-title fw-semibold mb-4">Welcome {{ Auth::user()->name }}</h5>
        @else
        <p>Pengguna tidak terautentikasi.</p>
        @endif
        <p class="mb-0">This is a sample page </p>
    </div>
</div>
@endsection