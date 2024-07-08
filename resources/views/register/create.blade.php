<x-layout>
    <section class="px-6 py-8 bg-gray-200 mt-10">
        <main class="max-w-lg mx-auto mt-10">
            <h1 class="text-center font-bold text-xl">Register</h1>

            <form method="POST" action="/register" class="mt-10">

                @csrf

                <div class="mb-6 ">

                    <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>
                    
                    <input type="text" class="border border-gray-400 p-2 w-full" 
                            name="username"
                            id="username" required
                            value="{{ old('username') }}">


                            @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                </div>


                <div class="mb-6 ">
                     <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                                Name
                     </label>
                            
                    <input type="text" class="border border-gray-400 p-2 w-full" 
                                    name="name"
                                    id="name" 
                                    value="{{ old('name') }}" required>


                                    @error('name')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                </div>

                <div class="mb-6 ">
                     <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                                Email
                     </label>
                            
                    <input type="email" class="border border-gray-400 p-2 w-full" 
                                    name="email"
                                    id="email" 
                                    value="{{ old('email') }}" required>

                                    @error('email')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                </div>

                <div class="mb-6 ">
                    <label for="" class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                                        Password
                    </label>
                    
                    <input type="password" class="border border-gray-400 p-2 w-full" 
                                            name="password"
                                            id="password" required>

                                            @error('password')
                                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                              @enderror
                </div>

                <div class="mb-6 ">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>