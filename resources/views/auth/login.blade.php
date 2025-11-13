<x-layout>
    <x-slot:heading class="text-white">
        Log In
    </x-slot:heading>
    <div>
        <!-- !?? -->
        <form method="POST" action="/login">
            @csrf
            <div class="space-y-12">
                <div class="pb-12 border-white/10 border-b">
                    <h2 class="font-semibold text-white text-base/7">Create new account</h2>
                    <p class="mt-1 text-gray-400 text-sm/6">Use your name, email and create a password to create an account.</p>

    
                        <!-- email -->
                        <div class="sm:col-span-4">
                            <label for="email" class="block font-medium text-white text-sm/6">Email</label>
                            <div class="mt-2">
                                <x-form-input type="email" id="email" name="email" :value="old('email')" placeholder="example@gmail.com" required />
                                <x-form-error name='email' />
                            </div>
                        </div>

                        <!-- password -->
                        <div class="sm:col-span-4">
                            <label for="password" class="block font-medium text-white text-sm/6">Password</label>
                            <div class="mt-2">
                                <x-form-input type="password" id="password" name="password" placeholder="**********" required />
                                <x-form-error name='password' />
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
    </div>

    <div class="flex justify-end items-center gap-x-6 mt-6">
        <a href="/" class="hover:bg-gray-700 px-3 py-1 hover:border hover:border-white rounded-md font-semibold text-white text-sm/6">Cancel</a>
        <x-submit-button>Log In</x-submit-button>
    </div>
    </form>

    </div>



</x-layout>