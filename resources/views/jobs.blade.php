<x-layout>
    <x-slot:heading class="text-white">
        Job Listing
    </x-slot:heading>
        <div class="bg-white border border-black size-50 text-xl">
        @foreach($jobs as $job)

    <a href="/jobs/{{ $job['id']}}"> {{ $job['title']}}: pays {{$job['salary']}}!  </a><br>

    @endforeach

    </div>


    
</x-layout>