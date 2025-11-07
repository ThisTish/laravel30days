<x-layout>
    <x-slot:heading class="text-white">
        Edit Job: <strong>{{ $job->title }}</strong>
    </x-slot:heading>
    <div >
        <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

            <div class="space-y-12">
                <div class="pb-12 border-white/10 border-b">
                    <h2 class="font-semibold text-white text-base/7">Edit this job</h2>
                    <p class="mt-1 text-gray-400 text-sm/6">Update job listing.</p>

                    <!-- title -->
                    <div class="gap-x-6 gap-y-8 grid grid-cols-1 sm:grid-cols-6 mt-10">
                        <div class="sm:col-span-4">
                            <label for="title" class="block font-medium text-white text-sm/6">Title</label>
                            <div class="mt-2">
                                <div class="flex items-center bg-white/5 pl-3 rounded-md outline-1 outline-white/10 focus-within:outline-2 focus-within:outline-indigo-500 -outline-offset-1 focus-within:-outline-offset-2">

                                    <input 
                                    id="title" 
                                    type="text" 
                                    name="title" 
                                    placeholder="Shift Manager" 
                                    class="block bg-transparent py-1.5 pr-3 pl-1 focus:outline-none min-w-0 placeholder:font-extralight text-white placeholder:text-gray-300 sm:text-sm/6 text-base grow"  
                                    value="{{$job->title}}"
                                    required 
                                    />
                                </div>

                                @error('title')
                                <p class="text-amber-900 text-semibold">
                                    {{$message}}
                                </p>
                                @enderror
                                

                            </div>
                        </div>

                        <!-- salary -->
                        <div class="sm:col-span-4">
                            <label for="salary" class="block font-medium text-white text-sm/6">Salary</label>
                            <div class="mt-2">
                                <div class="flex items-center bg-white/5 pl-3 rounded-md outline-1 outline-white/10 focus-within:outline-2 focus-within:outline-indigo-500 -outline-offset-1 focus-within:-outline-offset-2">

                                    <input 
                                        id="salary" 
                                        type="text" 
                                        name="salary" 
                                        placeholder="$40,000" 
                                        class="block bg-transparent py-1.5 pr-3 pl-1 focus:outline-none min-w-0 placeholder:font-extralight text-white placeholder:text-gray-300 sm:text-sm/6 text-base grow"  
                                        required
                                        value="{{$job->salary}}"
                                    />
                                </div>
                                @error('salary')
                                <p class="text-amber-900 text-semibold">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>

                        
                    </div>
                </div>

                
            <!-- @if($errors->any()) 
            <ul class="space-y-1 text-red-800">
                @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
            @endif -->
                
            </div>


            <div class="flex justify-end items-center gap-x-6 mt-6">
                <button  form="delete" class="bg-gray-400 hover:bg-red-600 mr-auto px-3 py-1 border-2 border-red-600 rounded-md font-bold text-red-700 hover:text-white">Delete</button>
                <x-button href="/jobs/{{$job->id}}" type="button" class="font-semibold text-white text-sm/6">Cancel</x-button>
                <button type="submit" class="bg-indigo-500 px-3 py-2 rounded-md focus-visible:outline-2 focus-visible:outline-indigo-500 focus-visible:outline-offset-2 font-semibold text-white text-sm">Update</button>
            </div>
        </form>
    <form  id="delete" method="POST" action="/jobs/{{$job->id}}" hidden >
        @csrf
        @method('DELETE')
    </div>



</x-layout>