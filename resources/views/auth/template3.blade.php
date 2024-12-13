
<x-app-layout>
    
    {{  $resume->id}}
   <div class="container w-96 my-10 bg-orange-950 mx-auto p-8">
        <h1 class="text-3xl font-bold text-center text-white mb-4">
           </h1>
        <p class="text-center text-[whitesmoke] mb-8">
            {{ $resume->email }}
            </p>

        <h2 class="text-2xl font-bold text-white mb-4">Summary</h2>
        <p class="text-[whitesmoke] mb-8">
            {{ Str::words($resume->summary, 30)}}   
        </p>

        <h2 class="text-2xl font-bold text-white mb-4">Education</h2>
        <div class="mb-8">
            <h3 class="text-xl font-bold text-white mb-2">{{ $resume->certificate}}</h3>
            <p class="text-[whitesmoke]">
                {{ $resume->experience}}
                <br>
                Month Year - Month Year
            </p>
            <ul class="list-disc list-inside text-[whitesmoke]">
                <li>Relevant coursework and achievements</li>
            </ul>
        </div>

        <h2 class="text-2xl font-bold text-white mb-4">Experience</h2>
        <div class="mb-8">o
            <h3 class="text-xl font-bold text-white mb-2">{{ $resume->project}}</h3>
            <p class="text-[whitesmoke]">
                {{ $resume->country}}
                <br>
                {{ $resume->state}}
            </p>
            <ul class="list-disc list-inside text-[whitesmoke]">
                <li>{{ $resume->local}}</li>
            </ul>
        </div>

        <h2 class="text-2xl font-bold text-white mb-4">Skills</h2>
        <div class="mb-8">
            <h3 class="text-xl font-bold text-white mb-2">T{{ $resume->award}}</h3>
            <ul class="list-disc list-inside text-[whitesmoke]">
                <li>Programming languages, frameworks, tools, etc.</li>
            </ul>
            <h3 class="text-xl font-bold text-white mb-2">Soft Skills</h3>
            <ul class="list-disc list-inside text-[whitesmoke]">
                <li>Problem-solving, communication, teamwork, leadership, etc.</li>
            </ul>
        </div>

        <h2 class="text-2xl font-bold text-white mb-4">Projects</h2>
        <div class="mb-8">
            <h3 class="text-xl font-bold text-white mb-2">Project Title</h3>
            <p class="text-[whitesmoke]">
                Brief description of the project, technologies used, and your role.
                <br>
                {{ $resume->project}}
            </p>
        </div>

        <h2 class="text-2xl font-bold text-white mb-4">Certifications (Optional)</h2>
        <div class="mb-8">
            <h3 class="text-xl font-bold text-white mb-2">Certification Name</h3>
            <p class="text-[whitesmoke]">
                Certifying Organization
                <br>
                Month Year
            </p>
        </div>

        <h2 class="text-2xl font-bold text-white mb-4">Awards and Honors (Optional)</h2>
        <div class="mb-8">
            <h3 class="text-xl font-bold text-white mb-2">Award Name</h3>
            <p class="text-[whitesmoke]">
                Awarding Organization
                <br>
                Month Year
            </p>
        </div>

        <h2 class="text-2xl font-bold text-white mb-4">{{ $resume->references}}</h2>
        <p class="text-[whitesmoke]">Available upon request.</p>
    </div>


    
    <div class="form-navigation flex gap-x-11  justify-center pb-11">
        <div>     
        <a href=" {{ route('cv.edit', $resume->id)}}" class="shadow-lg w
            -full inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-none focus:ring-0
             focus:ring-offset-0 hover:-translate-y-1.5 
            pt-3  border-s-8 bg-white text-red-950 border-red-900"
             name="print">print</a>           
           </div>
    
        <div>  
        <a href=" {{ route('cv.print', $resume->id)}}"
             class="shadow-lg w-full inline-block px-6
              py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-none
             focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
            pt-3  border-s-8 bg-black text-white border-black" 
            
            name="download">Download</a>           
        </div>
    
        </div>
        </div>
 

        
</x-app-layout>



