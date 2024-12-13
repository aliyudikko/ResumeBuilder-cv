<x-guest-layout>

    <form  method="POST" action="{{ route('register') }}"
       
 class="bg-white h-auto w-auto
         border-t-2 border-fuchsia-600 border-spacing-1
     shadow-lg  rounded-lg flex p-11  flex-col items-center">
     @csrf
     <div class="logo">
        <img src="{{asset('logo.png')}}" class="rounded-2xl rotate-1 h-14" alt="">

     </div>
     <h3 class="text-2xl p-3 text-fuchsia-600">Sign Up</h3>
   
     <div class="w-full">
        <label for="name"></label>
        <input class=" rounded-sm focus:ring-1
         focus:ring-fuchsia-600 border border-fuchsia-500 h-12 w-96 mb-6" 
         type="text" id="name" name="name"  :value="old('name')" required autofocus autocomplete="name" placeholder="Name">
         <x-input-error :messages="$errors->get('name')" class="mt-2" />

    </div>
   

    <div class="w-full">
        <label for="name"></label>
        <input class=" rounded-sm focus:ring-1
         focus:ring-fuchsia-600 border
          border-fuchsia-500 h-12 w-96 mb-6"
           type="text" id="name" name="email"  :value="old('email')" required autofocus autocomplete="email" placeholder="Email">
           
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
        </div>

   <div class="w-full">
        <label for="name"></label>
        <input class=" rounded-sm focus:ring-1
         focus:ring-fuchsia-600 border
          border-fuchsia-500 h-12 w-96 mb-6"
           id="password" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
            placeholder=" password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
    

    </div>

    <div class="w-full">
        <label for="name"></label>
        <input class="rounded-sm focus:ring-1 focus:ring-fuchsia-600 border
         border-fuchsia-500 h-12 w-96 mb-6"
         id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation"
                         required autocomplete="new-password"

          placeholder="Confirm password ">
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

    </div>
         
    <button class=" 
    shadow-lg w-full
       inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
        transition-all duration-500 focus:outline-none
       focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
       text-white pt-3  border-s-8 bg-fuchsia-600 border-fuchsia-800             ">Sing UP</button>           
         <div class="">
        <a href="{{ route('login')}}" class="text-sm text-fuchsia-500 opacity-70 pt-6">Already have an Account? </a>
    </div>
    </form>
    
</x-guest-layout>
