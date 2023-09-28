<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <!-- component -->

    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
      <div class="text-white">
        <div class="mb-8 flex flex-col items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" width="150" alt="" srcset="" />
          <h1 class="mb-2 text-2xl">Register</h1>
          <span class="text-gray-300">Enter Account Details</span>
        </div>
        <form action="#">
          <div class="mb-4 text-lg">
            <x-input-label class="block text-xs font-semibold text-gray-900 uppercase" for="name" :value="__('Name')" />
            <x-text-input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="name" class="rounded-3xl border-none bg-pink-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter Your Name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
  
          <div class="mb-4 text-lg">
            <x-input-label class="block text-xs font-semibold text-gray-900 uppercase" for="email" :value="__('Email')" />
            <x-text-input id="email" class="rounded-3xl border-none bg-pink-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter Your Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <div class="mb-4 text-lg">
            <x-input-label class="block text-xs font-semibold text-gray-900 uppercase" for="password" :value="__('Password')" />
            <x-text-input id="password" class="rounded-3xl border-none bg-pink-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" placeholder="******************" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>

          <div class="mb-4 text-lg">
            <x-input-label class="block text-xs font-semibold text-gray-900 uppercase" for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="rounded-3xl border-none bg-pink-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                                            type="password" placeholder="******************"
                                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
          <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-3xl bg-pink-700 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-pink-600">Register</button>
          </div>
        </form>
      </div>
    </div>
  
        
    </form>
</x-guest-layout>