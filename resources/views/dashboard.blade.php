<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-fuchsia-800 leading-tight">
            {{ __('Resume Builder') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-2xl text-fuchsia-500  p-6 transition-all duration-150">
                    {{ __("Your Templates !") }}
                    <a href="{{ route('cv.create')}}" class=" mt-11 next">Create Resume</a>
    
                </div>
               
            </div>
        </div>
         
       
        <div class="pl-28 flex flex-col  pt-7 px-11 
         md:grid md:grid-cols-3  items-center justify-between">
           
           
            @foreach ($resumes as $resume)
            
            <div class="w-96 container
             pt-5 mx-5 mb-20 rounded-md  h-50 bg-white shadow-md">
               <h2 class="text-2xl pt-3 place-items-center text-center text-fuchsia-500 transition-all duration-300">
                    
                {{$resume->summary}}
                
               </h2>
               <div class="flex gap-x-5 p-12 ">
               <a href="{{ route('cv.show', $resume)}}" 
               class="w-28 hidden  next">show</a>
                
               <form action="{{ route('cv.destroy', $resume)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="border-l
                     border-red-500 bg-red-600
                      focus:ring-red-600 mx-3 w-28 hidden   next">Delete</a>
                
                </form>
                </div>
            </div>
    
       
            @endforeach
            
        </div>
      <div class="px-14 mt-32">
        {{ $resumes->links()}}
      </div>
    
    </div>
    
    </x-app-layout>
