<x-layout>
    <x-slot:heading class="text-white">
        Job Listings
    </x-slot:heading>
        <div >

        @foreach($jobs as $job)
        
    <a href="/jobs/{{ $job['id']}}" class="block space-y-2 mx-10 my-5 px-4 py-6 border border-gray-300 rounded-2xl w-48 h-fit" > 
        <h2 class="font-bold">{{ $job['title'] }} </h2>
        <p class="italic"> {{ $job->employer->name}} </p>
        <p class="mt-2 text-end"> {{ $job['salary']}} </p>
</a>

    @endforeach

    </div>
<div>
    {{ $jobs->links() }} 
    </div>

    
</x-layout>