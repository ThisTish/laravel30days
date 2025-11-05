<x-layout>
    <x-slot:heading class="text-white">
        Create Job
    </x-slot:heading>
    <div >
        <form method="POST" action="/jobs">
            <!-- often fixes the 419 issue due to csrf (cross-site request forgery)-->
        @csrf


            <div class="space-y-12">
                <div class="pb-12 border-white/10 border-b">
                    <h2 class="font-semibold text-white text-base/7">Create New Job</h2>
                    <p class="mt-1 text-gray-400 text-sm/6">Enter title  and salary to add a job listing.</p>

                    <!-- title -->
                    <div class="gap-x-6 gap-y-8 grid grid-cols-1 sm:grid-cols-6 mt-10">
                        <div class="sm:col-span-4">
                            <label for="title" class="block font-medium text-white text-sm/6">Title</label>
                            <div class="mt-2">
                                <div class="flex items-center bg-white/5 pl-3 rounded-md outline-1 outline-white/10 focus-within:outline-2 focus-within:outline-indigo-500 -outline-offset-1 focus-within:-outline-offset-2">

                                    <input id="title" type="text" name="title" placeholder="Shift Manager" class="block bg-transparent py-1.5 pr-3 pl-1 focus:outline-none min-w-0 placeholder:font-extralight text-white placeholder:text-gray-300 sm:text-sm/6 text-base grow"  required />
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

                                    <input id="salary" type="text" name="salary" placeholder="$40,000" class="block bg-transparent py-1.5 pr-3 pl-1 focus:outline-none min-w-0 placeholder:font-extralight text-white placeholder:text-gray-300 sm:text-sm/6 text-base grow"  required/>
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
                <button type="button" class="font-semibold text-white text-sm/6">Cancel</button>
                <button type="submit" class="bg-indigo-500 px-3 py-2 rounded-md focus-visible:outline-2 focus-visible:outline-indigo-500 focus-visible:outline-offset-2 font-semibold text-white text-sm">Save</button>
            </div>
        </form>

    </div>



</x-layout>