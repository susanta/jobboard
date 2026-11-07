@extends('layout')

@section('content')
<h1>Available Jobs</h1>
<ul>
    @forelse ($jobs as $job)
    <li> {{ $job }}</li>
    @empty
    <l>No jobs available.</l>
    @endforelse
</ul>
@endsection