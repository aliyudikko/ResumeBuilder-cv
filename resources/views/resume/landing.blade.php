<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume gerate Cv</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-white shadow-2xl mx-auto">
    
    
    <header class=" w-full bg-fuchsia-700 pb-1 pt-1 text-xl
     text-center text-white mx-auto">
        <p>here we have Icons three to six icons</p>
    </header>

    <nav class="flex bg-white   items-center justify-between mx-auto">
        <div class="logo pl-11  px-7">
            <img src="{{asset('logo.png')}}" class="py-4 rounded-full w-12 cursor-pointer h-20" alt="">
        </div>
        <ul class=" hidden md:inline-flex place-items-center py-2 mx-2 pr-8">
            <li class="text-[18px] text-fuchsia-700 cursor-pointer hover:text-fuchsia-800 transition-all duration-100 px-2">Home</li>
            <li class="text-[18px] text-fuchsia-700 cursor-pointer hover:text-fuchsia-800 transition-all duration-100 px-2">About Us</li>
            <li class="text-[18px] text-fuchsia-700 cursor-pointer hover:text-fuchsia-800 transition-all duration-100 px-2">Templates</li>
            <li class="text-[18px] text-fuchsia-700 cursor-pointer hover:text-fuchsia-800 transition-all duration-100 px-2">
               <a href="{{ route('login')}}">login</a>
            </li>
           
            <li class="text-[18px] text-fuchsia-700 cursor-pointer
             hover:text-fuchsia-800 transition-all duration-100 px-2"class="px-2">
             <button class=" 
             shadow-lg
                inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
                 transition-all duration-500 focus:outline-none
                focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
                text-fuchsia-800 pt-3  border-s-8 border-fuchsia-800
                  "> <a href="{{ route('register')}}">Sing UP</a></button>
</li>
           
        </ul>
    </nav>
     <main class="bg-[whitesmoke] mx-auto shadow py-11">
        <div class="flex justify-between md:py-20
         pt-3 p-11 mx-auto flex-col
         md:flex-row">

            <div class=" w-full mx-auto">
               <h1 class="md:text-5xl pb-3 text-4xl pt-2
         text-fuchsia-600 -tracking-wider md:pt-11  md:pb-5">
                  Create Your Professional Resume
               </h1>
                <h3 class="pb-5 sm:pt-0 text-slate-400 sm:text-2xl text-3xl  opacity-90">it`s free quickly Download your CV here!</h3>
               <button class=" 
               shadow-lg
                  inline-block px-6 pr-11
                  text-[22px] text-center
                  py-2.5 pt-4 rounded text-base font-medium cursor-pointer
                   transition-all duration-500 focus:outline-none
                  focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
                  text-fuchsia-800 md:pt-3 border-s-4 border-fuchsia-800
                    sm:pb-2 sm:mb-6 "><a href="{{ route('login')}}">Download</a></button>
            </div>
            <div class="pl-5 pt-5 md:pr-11">
                <img src="{{asset('images (6).jpeg')}}"
                 class=" rounded-md w-95" alt="">
            </div>
        </div>
     </main>
    <!-- about -->

   <h1 class="py-14 md:pt-20 pt-8 mt-11 text-center text-5xl
    text-fuchsia-700 font-extrabold mx-auto">About Us</h1>    
    <div class="max-w-[1320] md:py-[80] py-11 sm:py-5 
    flex flex-row md:flex justify-center items-center mx-auto">
        <div class="basis-[45%] ml-24">
            <img src="{{asset('mycv1.png')}}" alt="" class=" md:w-[800px] md:py-24 rounded-xl hidden md:flex">
        </div>
        <div class="md:basis-[50%] text-center flex-col md:block   
         px-0 md:px-5 md:w-72 bg-white text-slate-600 opacity-95 mr-10  md:mr-24 border-e-4
          border-fuchsia-800 mx-auto">
            <h1  class=" text-center text-3xl text-fuchsia-700 font-extrabold">
                Generate your Resume with us in lessthan seconds
            </h1>
            <p class="py-3 hidden md:block w-full">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae ratione obcaecati, quos tempore ullam facere iure praesentium ut quis asperiores dolore mollitia beatae fugit, fugiat a non. Porro, nostrum quam!Reiciendis eveniet dolorum harum tenetur excepturi perferendis itaque voluptas nostrum! Repellendus dolorem eveniet necessitatibus, placeat mollitia commodi quia soluta nisi alias praesentium laborum magni? Iste veritatis ut magnam quidem alias!
            </p>
            <p class="py-3 hidden md:block">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae ratione obcaecati, quos tempore ullam facere iure praesentium ut quis asperiores dolore mollitia beatae fugit, fugiat a non. Porro, nostrum quam!Reiciendis eveniet dolorum harum tenetur excepturi perferendis itaque voluptas nostrum! Repellendus dolorem eveniet necessitatibus, placeat mollitia commodi quia soluta nisi alias praesentium laborum magni? Iste veritatis ut magnam quidem alias!
            </p>
            <p class="py-3 hidden md:block">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae ratione obcaecati, quos tempore ullam facere iure praesentium ut quis asperiores dolore mollitia beatae fugit, fugiat a non. Porro, nostrum quam!Reiciendis eveniet dolorum harum tenetur excepturi perferendis itaque voluptas nostrum! Repellendus dolorem eveniet necessitatibus, placeat mollitia commodi quia soluta nisi alias praesentium laborum magni? Iste veritatis ut magnam quidem alias!
            </p>
            <p class="py-3 md:hidden block pr-4">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo possimus excepturi facilis earum laudantium. Perspiciatis, doloribus asperiores consequuntur assumenda rerum facilis, quia odit impedit blanditiis voluptates iste harum, culpa voluptatem?
                Sapiente dolores laborum quos perspiciatis modi in magnam inventore minus aliquam et blanditiis obcaecati ex deserunt perferendis soluta velit officia ducimus iure quaerat incidunt unde expedita, porro nesciunt? Corrupti, aspernatur.
                Suscipit ducimus modi ut ipsam non earum fugiat quis exercitationem saepe soluta, quod consequatur. Provident veritatis temporibus architecto tenetur enim quam voluptatibus maxime, nulla possimus non expedita, ratione officiis nam!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae ratione obcaecati, quos tempore ullam facere iure praesentium ut quis asperiores dolore mollitia beatae fugit, fugiat a non. Porro, nostrum quam!Reiciendis eveniet dolorum harum tenetur excepturi perferendis itaque voluptas nostrum! Repellendus dolorem eveniet necessitatibus, placeat mollitia commodi quia soluta nisi alias praesentium laborum magni? Iste veritatis ut magnam quidem alias!
            </p>
        </div>
    </div>
    <<!--  img class="rounded-xl " width="300px" height="100" src="{{asset('Screenshot_2023-10-12-22-28-54.png')}}" alt="">
       -->
       <!-- Card -->
       <div>
        <h1 class="pt-14 text-center text-5xl text-fuchsia-700 
        font-extrabold mx-auto">Templates</h1>    
   
       </div>
       <div class="flex  pb-11 items-center justify-center min-h-screen container mx-auto">
        <div class="grid  gap-8 grid-cols-1  md:grid-cols-3 lg:grid-cols-3">
            <div class="p-5 flex shadow-sm  flex-col">
                <div  class="rounded-xl overflow-hiddden">
                    <img  src="{{asset('cv5.jpeg')}}" alt=""> 
                </div>
               
              <a href="" class="text-center mt-4 bg-fuchsia-600 text-white py-2 rounded-lg focus-scale-95 transition-all duration-500 ease-out">
                    create CV
                </a>
            </div>

            <div class="p-5 flex shadow-sm  flex-col">
                <div class="rounded-xl overflow-hiddden">
                    <img src="{{asset('cv6.jpeg')}}" alt="">
                
                </div>
                              
                <a href="" class="text-center mt-4 bg-fuchsia-600 text-white py-2 rounded-lg focus-scale-95 transition-all duration-500 ease-out">
                    create CV
                </a>
            </div>

            <div class="p-5 flex shadow-sm  flex-col">
                <div class="rounded-xl overflow-hiddden">
                    <img src="{{asset('cv8.png')}}" alt="">
                
                </div>
                               
                <a href="" class="text-center mt-4 bg-fuchsia-600 text-white py-2 rounded-lg focus-scale-95 transition-all duration-500 ease-out">
                    create CV
                </a>
            </div>
        </div>
       </div>
        
       <section class=" bg-white border-t-2 border-fuchsia-700 shadow-lg text-center pb-14 pt-12">
            <h1 class="text-2xl pb-9 text-fuchsia-700">Our Services</h1>
       </section>
       <!-- footer -->

       <footer class="bg-fuchsia-600 text-white">
        
        <div class="container mx-auto py-14 px-6">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-7">
                <div class="md:col-span-4 col-span-12">
                    <a href="">
                        <img src="{{asset('logo.png')}}" class="rounded-2xl rotate-1 h-12" alt="">
                    </a>
                    <p class="py-3 text-slate-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, vero. Soluta, nihil. Dolore eveniet maiores porro provident minus non autem exercitationem esse quaerat! Corrupti dolorum nulla incidunt ullam minus omnis?
                    </p>
                </div>
                <div class="lg:col-span-3 md:col-span-4 col-span-12">
                  <h5 class="tracking-wide text-[19px] cursor-pointer text-white font-semibold">Company</h5>
                  <ul class="list-none mt-6 space-y-2">
                    <li>
                        <a href="" class="hover:text-fuchsia-300 
                        text-[17px] cursor-pointer transition-all duration-500 ease-in-out">
                            home
                        </a>
                    </li>
                    <li>
                        <a href="" class="hover:text-fuchsia-300  text-[17px] cursor-pointer transition-all duration-500 ease-in-out">
                            about
                        </a>
                    </li>
                    <li>
                        <a href="" class="hover:text-fuchsia-300 text-[17px] cursor-pointer transition-all duration-500 ease-in-out">
                            services
                        </a>
                    </li>
                  </ul>
                </div>



                <div class="lg:col-span-3 md:col-span-4 col-span-12">
                    <h5 class="tracking-wide text-[19px] cursor-pointer text-white font-semibold">Templates</h5>
                    <ul class="list-none mt-6 space-y-2">
                      <li>
                          <a href="" class="hover:text-fuchsia-300
                          text-[17px] cursor-pointer transition-all duration-500 ease-in-out">
                              Red
                          </a>
                      </li>
                      <li>
                          <a href="" class="hover:text-fuchsia-300 text-[17px] cursor-pointer transition-all duration-500 ease-in-out">
                              green
                          </a>
                      </li>
                      <li>
                          <a href="" class="hover:text-fuchsia-300  text-[17px] cursor-pointer transition-all duration-500 ease-in-out">
                              yellow
                          </a>
                      </li>
                    </ul>
                  </div>
                  
                  <div class="lg:col-span-4 md:col-span-4 col-span-12">
                    <h5 class="tracking-wide text-[19px] cursor-pointer text-white font-semibold">NewsLetter</h5>
                    <p class="mt-6">Sing Up or Recieve Via Email</p>
                    <form action="">
                        @csrf
                        <div class="my-3">
                            <label for="email" class="text-white">write your Email ? </label>
                            <input type="text" class="mt-3 w-full py-2 px-3
                             h-100 bg-white text-fuchsia-700
                            rounded outline-none border border-fuchsia-700
                             focus:border-white focus:ring-1 " placeholder="Emial">
                        </div>
                    </form>
                  </div>
         
            </div>
        </div>
        <div class="border-t border-white">
            <div class="md:text-left
             text-center shadow-inner text-2xl font-serif font-medium
              text-fuchsia-700 bg-white w-full   mx-auto py-2 px-6">
                <p class="mb-0 text-center">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Resume Template
                </p>
            </div>
        </div>
       </footer>

       <script>
        
function Menu(e){

let list = document.querySelector('ul')
e.name === 'menu' ? (e.name = 'cancel', list.classList.add('top-[80px]'),
list.classList.add('opacity-100')) :
(e.name = 'menu', list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
}

       </script>
</body>
</html>