
<x-app-layout>
<body class="bg-gray-100">
    <div class="flex w-auto  
     items-center my-14  justify-center mx-auto container">

        <div class="grid w-auto py-9  grid-cols-1 md:grid-cols-2 ">
            <div class=" bg-white w-[300px] px-11  rounded-xl   h-95 text-white 
             ">

                <h1 class="text-2xl font-bold pt-4 text-yellow-400 mb-4"></h1>
                <p class="text-gray-700 mb-4">{{ $resume->name }}-
                    {{ $resume->lastname}} - {{ $resume->email}}
                </p>

                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Summary</h2>
                <p class="text-gray-700 mb-8">
                    {{ $resume->summary}}
                </p>

                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Skills</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-yellow-400 mb-2">Technical Skills</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>{{ $resume->experience }}</li>
                    </ul>
                    <h3 class="text-xl font-bold text-yellow-400 mb-2">Soft Skills</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>{{ $resume->skill}}</li>
                    </ul>
                </div>

                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Certifications (Optional)</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-yellow-400 mb-2">{{ $resume->certificate}}</h3>
                    <p class="text-gray-700">
                        {{ $resume->state}}
                        <br>
                        {{ $resume->local}}
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Awards and Honors (Optional)</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-yellow-400 mb-2">Award Name</h3>
                    <p class="text-gray-700">
                        Awarding Organization
                        <br>
                        {{ $resume->created_at}}
                    </p>
                </div>
            </div>

            <div  class=" bg-yellow-300  w-72  rounded-xl  px-11 h-95 text-white  p-4">

                <h2 class="text-2xl font-bold pt-4 text-white mb-4">Education</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-white mb-2">{{ $resume->certificate}}</h3>
                    <p class="text-gray-700">
                        {{ $resume->country}}
                        {{ $resume->state}}
                        {{ $resume->local}}
                        <br>
                        {{ $resume->created_at}} - {{ $resume->updated_at}}
                    </p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>{{ $resume->project}}</li>
                    </ul>
                </div>

                <h2 class="text-2xl font-bold text-white mb-4">Experience</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-white mb-2">{{ $resume->experience}}</h3>
                    <p class="text-gray-700">
                        {{ $resume->comapny}}
                        {{ $resume->country}}
                        {{ $resume->state}}
                        {{ $resume->local}}
                        <br>
                        {{ $resume->month}}  - {{ $resume->year}}
                    </p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>{{ $resume->achivements}}</li>
                    </ul>
                </div>

                <h2 class="text-2xl font-bold text-white mb-4">Projects</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-white mb-2">{{ $resume->project_title}}</h3>
                    <p class="text-gray-700">
                        {{ $resume->project_description}}
                        <br>
                        {{ $resume->project_link}}
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-white mb-4">References</h2>
                <p class="text-gray-700">{{ $resume->references}}</p>
            </div>
        </div>
    </div>

    
    <div class="form-navigation flex gap-x-11  justify-center pb-11">
        <div>     
        <a href=" {{ route('cv.print', $resume->id)}}" class="shadow-lg w-fullinline-block px-6 py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-nonefocus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
            pt-3  border-s-8 bg-white text-yellow-500
           border-yellow-400" name="print">print</a>           
           </div>
    
        <div>  
        <a href="{{ route('cv.print', $resume->id)}}" class="shadow-lg w-full inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-none focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
            pt-3  border-s-8 bg-black text-white border-black" 
            name="download">Download</a>           
        </div>
    
        </div>
        </div>
    
</body>


</x-app-layout>