<x-app-layout>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <div class="flex items-center justify-center py-20">

   
    <form  action="{{ route('cv.update', $resume) }}" method="post"   enctype="multipart/form-data"   class="form">
        @csrf
        @method('PATCH') 
        
       <!-- logo -->
       
        <div class="logo w-full rounded-full   relative">
           <img src="{{asset('logo.png')}}"
            class="logo1" alt="">
        </div>
       
        <h3 class="text-3xl p-3 text-fuchsia-600">Edit Job Application Form</h3>
       
        <div class=" w-full border-b-2 top-36 absolute  border-fuchsia-500"></div>
        
        <!-- section one -->

        <div class="form-section  flex flex-col gap-x-5 pt-20">       
            <div class="flex flex-row gap-x-5">
              <div> 
                <label for="" class="block my-2">Name</label>
                <input class="input"               
                                       type="text"
                                        name="name" 
                                        :value="old('name')" 
                                        value="{{ $resume->name}}"
                                        required autofocus autocomplete="username"
                                        placeholder="Name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <div> 
                <label for="" class="block my-2">lastname</label>
                <input class="input"
                                        type="text"
                                        name="lastname"
                                        value="{{ $resume->lastname}}" 
                                        :value="old('lastname')" 
                                        required autofocus autocomplete="username"                 
                                        placeholder="lastname">
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
              </div> 
            </div>
                 
            <div class="flex flex-row gap-x-5">
                                 
              <div> 
                <label for="email" class="block my-2">E-mail</label>
                  <input class="input"
                                        type="email"
                                        name="email"
                                        value="{{ $resume->email}}" 
                                        :value="old('email')" 
                                        required autofocus autocomplete="username"
                                   
                                       placeholder="E-mail">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>      
                                  
              <div>
               <label for="phone" class="block my-2">phone Number</label>
               <input class="input" 
                                       type="tel"
                                        name="phone" 
                                        value="{{ $resume->phone}}"
                                        :value="old('phone')" 
                                        required autofocus autocomplete="username"
                                        placeholder="phone">
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
              </div>
            </div>
          </div>


        <!-- end of section one-->
         
        <!-- section one -->
              
      
        <!-- section one -->

        <div class="form-section  flex flex-col gap-x-5 pt-20">       
            <div class="flex flex-row gap-x-5">
              <div> 
                <label for="" class="block my-2">img</label>
                <input class="input"               
                                       type="file"
                                        name="img" 
                                
                                        :value="old('img')" 
                                        required autofocus autocomplete="username"
                                        placeholder="img">
                <x-input-error :messages="$errors->get('img')" class="mt-2" />
                  <p>{{ $resume->img}}</p>
              </div>
              <div> 
                <label for="" class="block my-2">certificate</label>
                <input class="input"
                                        type="file"
                                        name="certificate" 
                                        value="{{ $resume->certificate}}"
                                        :value="old('certificate')" 
                                        required autofocus autocomplete="username"                 
                                        placeholder="certificate">
                <x-input-error :messages="$errors->get('certificate')" class="mt-2" />
                  <p>{{ $resume->certificate}}</p>
                </div> 
             
            </div>
                 
            <div class="flex flex-row gap-x-5">
                                 
              <div> 
                <label for="experience" class="block my-2">experience</label>
                  <input class="input"
                                        type="text"
                                        name="experience"
                                        value="{{ $resume->experience}}" 
                                        :value="old('experience')" 
                                        required autofocus autocomplete="username"
                                   
                                       placeholder="experience">
                <x-input-error :messages="$errors->get('experience')" class="mt-2" />
              </div>      
                                  
              <div>
               <label for="reward" class="block my-2">Reward</label>
               <input class="input" 
                                       type="tel"
                                        name="reward" 
                                        value="{{ $resume->reward}}"
                                        :value="old('reward')" 
                                        required autofocus autocomplete="username"
                                        placeholder="reward">
                <x-input-error :messages="$errors->get('reward')" class="mt-2" />
              </div>
            </div>
          </div>


        <!-- end of section one-->
         
  
        <div class="form-section  flex flex-col gap-x-5 pt-20">       
            <div class="flex flex-row gap-x-5">
              <div> 
                <label for="" class="block my-2"> project</label>
                <input class="input"               
                                       type="text"
                                        name="project" 
                                        value="{{$resume->project}}"
                                        :value="old('project')" 
                                        required autofocus autocomplete="username"
                                        placeholder=" project">
                <x-input-error :messages="$errors->get('project')" class="mt-2" />
              </div>
              <div> 
                <label for="" class="block my-2">award</label>
                <input class="input"
                                        type="text"
                                        name="award"
                                        value="{{ $resume->reward}}" 
                                        :value="old('award')" 
                                        required autofocus autocomplete="username"                 
                                        placeholder="award">
                <x-input-error :messages="$errors->get('award')" class="mt-2" />
              </div> 
            </div>
                 
            <div class="flex flex-row gap-x-5">
                                 
              <div> 
                <label for="summary" class="block my-2">summary</label>
                  <input class="input"
                                        type="text"
                                        name="summary" 
                                        value="{{ $resume->summary}}"
                                        :value="old('summary')" 
                                        required autofocus autocomplete="username"
                                   
                                       placeholder="summary">
                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
              </div>      
                                  
              <div>
               <label for="references" class="block my-2">references</label>
               <input class="input" 
                                       type="tel"
                                        name="references" 
                                        value="{{ $resume->references}}"
                                        :value="old('references')" 
                                        required autofocus autocomplete="username"
                                        placeholder="references">
                <x-input-error :messages="$errors->get('references')" class="mt-2" />
              </div>
            </div>
          </div>


        <!-- end of section one-->
         

         <!-- navigator-->
        <div class="form-navigation flex gap-x-5  justify-between">
            <div>     
              <button type="button" class="previous">&lt;previous</button>           
            </div>
    
              <div>  
               <button type="button" class="next">&gt;Next</button>           
              </div>
    
              <div>
                <button type="submit" class="submit">submit</button>           
              </div>

            <div>  
              <select  id="name" name="template_name" class="select">
                <option value="template1">template1</option>
                <option value="template2">template2</option>
                <option value="template3">template3</option>
             </select>

            </div>
          </div>
    </form>

   </div>

<!-- templates -->







<div id="template1" class="data">
  <a href="{{ route('cv.show', 3)}}">

    <div class="form-navigation flex gap-x-11  justify-center pb-11">
      <div>     
      <button class="shadow-lg w-fullinline-block px-6 py-2 rounded text-base font-medium cursor-pointer
          transition-all duration-500 focus:outline-nonefocus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
          pt-3  border-s-8 bg-white text-red-950 border-red-900" name="print">print</button>           
         </div>
  
      <div>  
      <button class="shadow-lg w-full inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
          transition-all duration-500 focus:outline-none focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
          pt-3  border-s-8 bg-black text-white border-black" name="download">Download</button>           
      </div>
  
      </div>
  
  </a>

        <div class="container w-96 my-10 bg-orange-950 mx-auto p-8">
             <h1 class="text-3xl font-bold text-center text-white mb-4">Your Name</h1>
             <p class="text-center text-[whitesmoke] mb-8">Your Email | Your Phone Number | Your LinkedIn Profile</p>
     
             <h2 class="text-2xl font-bold text-white mb-4">Summary</h2>
             <p class="text-[whitesmoke] mb-8">
                 A concise and compelling summary of your skills, experience, and career goals. Highlight your key strengths and accomplishments.
             </p>
     
             <h2 class="text-2xl font-bold text-white mb-4">Education</h2>
             <div class="mb-8">
                 <h3 class="text-xl font-bold text-white mb-2">Degree Name</h3>
                 <p class="text-[whitesmoke]">
                     University Name, City, State, Country
                     <br>
                     Month Year - Month Year
                 </p>
                 <ul class="list-disc list-inside text-[whitesmoke]">
                     <li>Relevant coursework and achievements</li>
                 </ul>
             </div>
     
             <h2 class="text-2xl font-bold text-white mb-4">Experience</h2>
             <div class="mb-8">
                 <h3 class="text-xl font-bold text-white mb-2">Job Title</h3>
                 <p class="text-[whitesmoke]">
                     Company Name, City, State, Country
                     <br>
                     Month Year - Month Year
                 </p>
                 <ul class="list-disc list-inside text-[whitesmoke]">
                     <li>Key responsibilities and achievements</li>
                 </ul>
             </div>
     
             <h2 class="text-2xl font-bold text-white mb-4">Skills</h2>
             <div class="mb-8">
                 <h3 class="text-xl font-bold text-white mb-2">Technical Skills</h3>
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
                     Link to project repository or demo (if applicable)
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
     
             <h2 class="text-2xl font-bold text-white mb-4">References</h2>
             <p class="text-[whitesmoke]">Available upon request.</p>
         </div>
     
     
         
    </div>      
  </div>



<div id="template2" class="data">
     
    <a href="{{ route('cv.show', 2)}}">

        
      <div class="form-navigation flex gap-x-11  justify-center pb-11">
       <div>     
       <button class="shadow-lg w-fullinline-block px-6 py-2 rounded text-base font-medium cursor-pointer
           transition-all duration-500 focus:outline-nonefocus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
           pt-3  border-s-8 bg-white text-yellow-500 border-yellow-400" name="print">print</button>           
          </div>
   
       <div>  
       <button class="shadow-lg w-full inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
           transition-all duration-500 focus:outline-none focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
           pt-3  border-s-8 bg-black text-white border-black" name="download">Download</button>           
       </div>
   
       </div>
   
    
       </a>
   
    <div class="flex w-auto  
    items-center my-14  justify-center mx-auto container">
       <div class="grid w-auto py-9  grid-cols-1 md:grid-cols-2 ">
           <div class=" bg-white w-[300px] px-11  rounded-xl   h-95 text-white 
            ">
               <h1 class="text-2xl font-bold pt-4 text-yellow-400 mb-4">Your Name</h1>
               <p class="text-gray-700 mb-4">Your Email | Your Phone Number | Your LinkedIn Profile</p>

               <h2 class="text-2xl font-bold text-yellow-400 mb-4">Summary</h2>
               <p class="text-gray-700 mb-8">
                   A concise and compelling summary of your skills, experience, and career goals. Highlight your key strengths and accomplishments.
               </p>

               <h2 class="text-2xl font-bold text-yellow-400 mb-4">Skills</h2>
               <div class="mb-8">
                   <h3 class="text-xl font-bold text-yellow-400 mb-2">Technical Skills</h3>
                   <ul class="list-disc list-inside text-gray-700">
                       <li>Programming languages, frameworks, tools, etc.</li>
                   </ul>
                   <h3 class="text-xl font-bold text-yellow-400 mb-2">Soft Skills</h3>
                   <ul class="list-disc list-inside text-gray-700">
                       <li>Problem-solving, communication, teamwork, leadership, etc.</li>
                   </ul>
               </div>

               <h2 class="text-2xl font-bold text-yellow-400 mb-4">Certifications (Optional)</h2>
               <div class="mb-8">
                   <h3 class="text-xl font-bold text-yellow-400 mb-2">Certification Name</h3>
                   <p class="text-gray-700">
                       Certifying Organization
                       <br>
                       Month Year
                   </p>
               </div>

               <h2 class="text-2xl font-bold text-yellow-400 mb-4">Awards and Honors (Optional)</h2>
               <div class="mb-8">
                   <h3 class="text-xl font-bold text-yellow-400 mb-2">Award Name</h3>
                   <p class="text-gray-700">
                       Awarding Organization
                       <br>
                       Month Year
                   </p>
               </div>
           </div>

           <div  class=" bg-yellow-300  w-72  rounded-xl  px-11 h-95 text-white  p-4">

               <h2 class="text-2xl font-bold pt-4 text-white mb-4">Education</h2>
               <div class="mb-8">
                   <h3 class="text-xl font-bold text-white mb-2">Degree Name</h3>
                   <p class="text-gray-700">
                       University Name, City, State, Country
                       <br>
                       Month Year - Month Year
                   </p>
                   <ul class="list-disc list-inside text-gray-700">
                       <li>Relevant coursework and achievements</li>
                   </ul>
               </div>

               <h2 class="text-2xl font-bold text-white mb-4">Experience</h2>
               <div class="mb-8">
                   <h3 class="text-xl font-bold text-white mb-2">Job Title</h3>
                   <p class="text-gray-700">
                       Company Name, City, State, Country
                       <br>
                       Month Year - Month Year
                   </p>
                   <ul class="list-disc list-inside text-gray-700">
                       <li>Key responsibilities and achievements</li>
                   </ul>
               </div>

               <h2 class="text-2xl font-bold text-white mb-4">Projects</h2>
               <div class="mb-8">
                   <h3 class="text-xl font-bold text-white mb-2">Project Title</h3>
                   <p class="text-gray-700">
                       Brief description of the project, technologies used, and your role.
                       <br>
                       Link to project repository or demo (if applicable)
                   </p>
               </div>

               <h2 class="text-2xl font-bold text-white mb-4">References</h2>
               <p class="text-gray-700">Available upon request.</p>
           </div>
       </div>
   </div>

       </div>
   
</div>


  
  
<div id="template3" class="data">
    <a href="{{ route('cv.show', 3)}}" class="text-3xl text-center
     text">
     <div class="form-navigation flex gap-x-11  justify-center pb-11">
      <div>     
      <button class="shadow-lg w-fullinline-block px-6 py-2 rounded text-base font-medium cursor-pointer
          transition-all duration-500 focus:outline-nonefocus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
         text-white pt-3  border-s-8 bg-fuchsia-600  border-fuchsia-800" name="print">print</button>           
         </div>
  
      <div>  
      <button class="shadow-lg w-full inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
          transition-all duration-500 focus:outline-none focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
          pt-3  border-s-8 bg-white text-fuchsia-700 border-fuchsia-800" name="download">Download</button>           
      </div>
  
      </div>
 
    </a>
    <div class="flex  
     items-center my-14 w-11  justify-center  mx-auto container">
    
        <div class=" bg-fuchsia-700 w-72
          rounded-xl  px-11 h-95 text-white  p-4">
          
        <div class=" pt-11 pb-11">
            
            <ul>
                <li class="hover:py-1 pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">Nigeria</a></li>
                <li class="py-0 hover:py-1 px-3 hover:mt-2 hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">aliyu@gmail.com</a></li>
                <li class="py-0 px-3 hover:py-1 hover:mt-2 hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">09087676</a></li>
            </ul>
        </div>

        <div class="pb-11">
            <h2 class="text-xl   font-bold mb-4">Education</h2>
            <ul>
                
                <li class="hover:py-1  pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <span class=" rounded-sm text-[15px] pr-2">Year: 2005</span>
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">Diploma in Business Administration</a></li>
                
                     <li class="hover:py-1  pt-2 hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <span class=" rounded-sm text-[15px] pr-2">Year: 2023</span>
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
                     hover:text-white">FrontEnd Development</a></li>
                
                     <li
                      class="hover:py-1  hover:mt-2  px-3  hover:bg-fuchsia-400 rounded-sm">
                    <a href="#" class=" rounded-sm text-[15px]
                     hover:text-white">BackEnd Development</a></li>

               
            </ul>
        
        </div>
         

        <div class="pb-20">
            <h2 class="text-xl fuchsia-950   font-bold mb-4">Social media</h2>
            <ul>
                <li class="pl-2 mb-1">
                  <a href="#" class="text-fuchsia-300 text-[17px] 
                   hover:text-white">whatsapp </a></li>
                <li class="pl-2">
                  <a href="#" class="text-fuchsia-300
                   hover:bg-fuchsia-700 text-[15px] hover:text-white">facebook</a></li>
                <li class="pl-2">
                  <a href="#" class="text-fuchsia-300 
                   hover:bg-fuchsia-700 text-[15px] hover:text-white">twitter</a></li>
            </ul>
        </div>
        </div>

        <div class="bg-white border-b-2 
         border-fuchsia-600 py-20 pl-5 rounded-lg shadow-md flex-1 ">
           
            <div class="w-96 border-r-2 
         border-fuchsia-600 ">
                <h1 class="text-2xl font-bold fuchsia-950  text-fuchsia-700 mb-4">Your Name</h1>
                <p class="text-gray-700 mb-4">Your Email | Your Phone Number | Your LinkedIn Profile</p>
                <div class="bg-fuchsia-950 my-2 w-full border-t border-fuchsia-950 rounded-lg shadow-md"></div>

                <h2 class="text-2xl font-bold fuchsia-950  text-fuchsia-700 mb-4">Summary</h2>
                <p class="text-gray-700 mb-8">
                    A concise and compelling summary of your skills, experience, and career goals. Highlight your key strengths and accomplishments.
                </p>
                <div class="bg-fuchsia-950 w-full border-t my-2 border-fuchsia-950 rounded-lg shadow-md"></div>
 
              <h2 class="text-2xl font-bold  text-fuchsia-700 mb-4">Experience</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold  text-fuchsia-700 mb-2">Job Title</h3>
                    <p class="text-gray-700">
                        Company Name, City, State, Country
                        <br>
                        Month Year - Month Year
                    </p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Key responsibilities and achievements</li>
                    </ul>
                </div>
                <div class="bg-fuchsia-950 my-2 w-full border-t border-fuchsia-950 rounded-lg shadow-md"></div>

                <h2 class="text-2xl font-bold  text-fuchsia-700 mb-4">Awards and Honors (Optional)</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold  text-fuchsia-700 mb-2">Award Name</h3>
                    <p class="text-gray-700">
                        Awarding Organization
                        <br>
                        Month Year
                    </p>
                </div>
                <div class="bg-fuchsia-950 my-1 border-t border-fuchsia-950 rounded-lg shadow-md"></div>

                <h2 class="text-2xl font-bold text-fuchsia-700  mb-4">Projects</h2>
                <div class="mb-8">
                    <h3 class="text-xl font-bold  text-fuchsia-700 mb-2">Project Title</h3>
                    <p class="text-gray-700">
                        Brief description of the project, technologies used, and your role.
                        <br>
                        Link to project repository 
                    </p>
                </div>

                <h2 class="text-2xl font-bold  text-fuchsia-700 mb-4">References</h2>
                <p class="text-gray-700">Available upon request.</p>
            </div>
           
            
            </div>
        </div>
       
        
    </div>
     </div>
  </div>
  



</x-app-layout>
