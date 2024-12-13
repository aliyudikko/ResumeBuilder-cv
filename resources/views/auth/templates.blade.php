<x-app-layout>
      
    <div class="flex  
     items-center my-14 w-11  justify-center  mx-auto container">
        <div class=" bg-fuchsia-700 w-72  rounded-xl  px-11 h-95 text-white  p-4">
        <div class=" pt-11 pb-11">
            
            <ul>
                <li class="hover:py-1 pt-2 hover:mt-2  px-3 
                 hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white"></a></li>
                <li class="py-0 hover:py-1 px-3 hover:mt-2 
                 hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">{{$resume->email}}</a></li>
                <li class="py-0 px-3 hover:py-1 hover:mt-2 hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">{{ $resume->phone }}</a></li>
            </ul>
        </div>

        <div class="pb-11">
            <h2 class="text-xl   font-bold mb-4">Education</h2>
            <ul>
                
                <li class="hover:py-1  pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <span class=" rounded-sm text-[15px] pr-2">Year: {{ $resume->created_at}}</span>
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">Diploma in Business Administration</a></li>
                
                     <li class="hover:py-1  pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <span class=" rounded-sm text-[15px] pr-2">Year: {{ $resume->updated_at}}</span>
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">Bsc Information Technology</a></li>

                <li class="hover:py-1  pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <span class=" rounded-sm text-[15px] pr-2">Year: 2023</span>
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">Msc Cyber Security</a></li>
                
            </ul>
        </div>

        <div class="pb-11">
            <h2 class="text-xl  font-bold mb-1">Certificate</h2>
            <ul>
                
                <li class="hover:py-1  pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400
                 rounded-sm">
                   <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">{{ $resume->certificate}}</a></li>
                
                     <li
                      class="hover:py-1  hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">{{ $resume->certificate_2}}</a></li>

               
            </ul>
        
        </div>
         

        <div class="pb-20">
            <h2 class="text-xl fuchsia-950   font-bold mb-4">Social media</h2>
            <ul>
                <li class="pl-2 mb-1"><a href="#" class="text-fuchsia-300 
                    text-[17px]  hover:text-white">{{ $resume->socialmedia1}} </a></li>
                <li class="pl-2"><a href="#" class="text-fuchsia-300 
                     hover:bg-fuchsia-700 text-[15px] hover:text-white">
                     {{ $resume->socialmedia2}}</a></li>
                <li class="pl-2"><a href="#" 
                    class="text-fuchsia-300 
                     hover:bg-fuchsia-700 text-[15px] hover:text-white">
                     {{ $resume->socialmedia3}}</a></li>
            </ul>
        </div>
        </div>

        <div class="bg-white border-b-2 
         border-fuchsia-600 py-20 pl-5 rounded-lg shadow-md flex-1 ">
           
            <div class="w-96 border-r-2 
         border-fuchsia-600 ">
                <h1 class="text-2xl font-bold fuchsia-950  text-fuchsia-700 mb-4">Your Name</h1>
                <p class="text-gray-700 mb-4">{{ $resume->email}} - {{ $resume->email}} - 
                    {{ $resume->phone}}</p>
                <div class="bg-fuchsia-950 my-2 w-full border-t border-fuchsia-950 rounded-lg shadow-md"></div>

                <h2 class="text-2xl font-bold fuchsia-950  text-fuchsia-700 mb-4">Summary</h2>
                <p class="text-gray-700 mb-8">

                    {{ $resume->summary}}
                    </p>
                <div class="bg-fuchsia-950 w-full border-t my-2 border-fuchsia-950 rounded-lg shadow-md"></div>
 
              <h2 class="text-2xl font-bold  text-fuchsia-700 mb-4">Experience</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold  text-fuchsia-700 mb-2">Job Title</h3>
                    <p class="text-gray-700">
                        {{ $resume->country}} - {{ $resume->state}} -{{ $resume->local}}
                        <br>
                        {{ $resume->created_at}} = {{ $resume->updated_at}}
                    </p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>{{ $resume->summary}}</li>
                    </ul>
                </div>
                <div class="bg-fuchsia-950 my-2 w-full border-t border-fuchsia-950 rounded-lg shadow-md"></div>

                <h2 class="text-2xl font-bold  text-fuchsia-700 mb-4">Awards and Honors (Optional)</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold  text-fuchsia-700 mb-2">{{ $resume->awardname}}</h3>
                    <p class="text-gray-700">
                        {{ $resume->awardorganization}}
                        <br>
                        {{ $resume->awardmonth}}
                    </p>
                </div>
                <div class="bg-fuchsia-950 my-1 border-t border-fuchsia-950 rounded-lg shadow-md"></div>

                <h2 class="text-2xl font-bold text-fuchsia-700  mb-4">Projects</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold  text-fuchsia-700 mb-2">{{ $resume->project_title}}</h3>
                    <p class="text-gray-700">
                        {{ $resume->project_title}}
                        <br>
                        {{ $resume->project_link}}
                    </p>
                </div>

                <h2 class="text-2xl font-bold  text-fuchsia-700 mb-4">References</h2>
                <p class="text-gray-700">{{ $resume->references}}</p>
            </div>
           
            
            </div>
        </div>

        
    </div>
    
    <div class="form-navigation flex gap-x-11  justify-center pb-11">
        <div>     
        <a  href="{{ route('cv.print', $resume->id)}}" class="shadow-lg w-fullinline-block px-6 py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-nonefocus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
           text-white pt-3  border-s-8 bg-fuchsia-600 
            border-fuchsia-800" name="print">print</a>           
           </div>
    
        <div>  
        <a href="{{ route('cv.print', $resume->id)}}" class="shadow-lg w-full inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-none focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
            pt-3  border-s-8 bg-white text-fuchsia-700 
             border-fuchsia-800" name="download">Download</a>           
        </div>
    
        </div>
        </div>
    


    
</x-app-layout>