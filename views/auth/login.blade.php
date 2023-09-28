<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- component -->

    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
      <div class="text-white">
        <div class="mb-8 flex flex-col items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" width="150" alt="" srcset="" />
          <h1 class="mb-2 text-2xl">Login</h1>
          <span class="text-gray-300">Enter Login Details</span>
        </div>
        <form action="#">
          <div class="mb-4 text-lg">
            <x-text-input id="email" class="rounded-3xl border-none bg-pink-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
  
          <div class="mb-4 text-lg">
            <x-text-input id="password" class="rounded-3xl border-none bg-pink-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
         <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-xl bg-pink-700 bg-opacity-50 px-10 py-2 text-white shadow-l backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
            &nbsp;&nbsp;&nbsp;    <a class="rounded-xl bg-pink-700 bg-opacity-50 px-10 py-2 text-white shadow-l backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </div>
        </form>
      </div>
    </div>
  
        
    </form>
</x-guest-layout>