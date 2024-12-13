<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST"  action="{{ route('login') }}" 
       class="bg-white h-auto w-auto
    border-t-2 border-fuchsia-600 border-spacing-1
 shadow-lg  rounded-lg flex p-11  flex-col items-center">
 @csrf 
 <div class="logo">
    <img src="{{asset('logo.png')}}" class="rounded-2xl rotate-1 h-14" alt="">

 </div>
 <h3 class="text-2xl p-3 text-fuchsia-600">Sign In</h3>


 <!-- Email Address -->
 
<div class="w-full">
    <label for="name"></label>
    <input class=" rounded-sm focus:ring-1
     focus:ring-fuchsia-600 border
      border-fuchsia-500 h-12 w-96 mb-6"
      id="email"
       class=" " 
      type="email"
       name="email" 
       :value="old('email')" 
       required autofocus autocomplete="username"
  
      placeholder="Email">
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
 
</div>


<!-- Password -->

<div class="w-full">
    <label for="name"></label>
    <input class=" rounded-sm focus:ring-1
     focus:ring-fuchsia-600 border
      border-fuchsia-500 h-12 w-96 mb-6"
      id="password" 
      type="password"
      name="password"
      required autocomplete="current-password"

       placeholder=" password">
       <x-input-error :messages="$errors->get('password')" class="mt-2" />

</div>



 
<button class=" 
shadow-lg w-full
   inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
    transition-all duration-500 focus:outline-none
   focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
   text-white pt-3  border-s-8 bg-fuchsia-600
    border-fuchsia-800             ">Sing In</button>           
     <div class="">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-fuchsia-500 " href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif
</div>
</form>

</x-guest-layout>
