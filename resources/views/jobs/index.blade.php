<x-layout>
    <h1>Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
        <li> {{ $job->title }} - {{ $job->description }}</li>
        @empty
        <l>No jobs available.</l>
        @endforelse
    </ul>
</x-layout>