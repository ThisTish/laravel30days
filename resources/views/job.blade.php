<x-layout >
    <x-slot:heading class="text-white">
        Job {{$job['id']}}
    </x-slot:heading>
    <div class="bg-white border border-black size-50 text-xl">
        <h2>{{ $job['title']}}</h2>
        <p>{{$job['salary']}}</p>
    </div>



</x-layout>