<x-layout >
    <x-slot:heading class="text-white">
        Job {{$job['id']}}
    </x-slot:heading>
    <div class="bg-gray-300 my-5 p-3 rounded-md w-40 h-fit">
        <h2 class="font-bold text-lg uppercase">{{ $job->title}}</h2>
        <p>${{ $job->salary}}<small> annual</small></p>
    </div>
    <div >
        @can('edit', $job)
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        @endcan
    </div>



</x-layout>