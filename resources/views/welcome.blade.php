 @extends('layouts.app')

 @section('content')
     <div class="md:h-[100vh] flex flex-wrap items-center justify-center p-20 headline" id="head">
         <div class="md:w-[500px]">
             <h1 class="text-6xl font-dancing">Gabriela D. Ruiz Ruiz</h1>
             <div class="flex flex-col mt-1">
                 <span><i class="fas fa-envelope mx-2"></i>gabyruizricaurte2004@gmail.com</span>
                 <a href="https://github.com/GabrielaXd2004" class="hover:underline"><i
                         class="fab fa-github mx-2"></i>GabrielaXd2004</a>
             </div>
         </div>
         <div class="md:w-[500px] flex md:justify-end">
             <img src="{{ asset('assets/img/me.jpeg') }}" alt="me" class="rounded-full w-80">
         </div>
     </div>

     <div class="md:h-[100vh] flex items-center justify-center p-20" id="proyectoDiv">
         <h1 class="font-dancing text-6xl">Proyectos</h1>
     </div>


     <div class="md:h-[100vh] flex items-center justify-center p-20">
         <div class="md:w-[500px]">
             <h1 class="font-dancing text-5xl">Primera Pagina.</h1>
             <div class="text-black text-xs flex flex-wrap my-1">
                <span class="bg-blue-400 px-3 rounded-full">css</span>
             </div>
             <p class="">Mi primera pagina, hecha solo con html y css.</p>
             <a href="https://gabyprimerapagina.netlify.app" class="text-blue-700">https://gabyprimerapagina.netlify.app</a>
         </div>
         <div class="md:w-[500px] p-5">
             <img src="{{ asset('assets/img/primeraPagina.png') }}" alt="pokedex img" class="rounded-lg">
         </div>
     </div>

     <div class="md:h-[100vh] flex items-center justify-center p-20">
         <div class="md:w-[500px]">
             <h1 class="font-dancing text-5xl">Pokedex.</h1>
             <div class="flex flex-wrap text-xs gap-x-2 text-black my-1">
                <span class="bg-yellow-400 px-2 rounded-full">JavaScript</span>
                <span class="bg-blue-400 px-2 rounded-full">Tailwind</span>
             </div>
             <p class="">Pagina hecha para el consumo de API con JavaScript.</p>
             <a href="https://gaby-pokedex.netlify.app" class="text-blue-700">https://gaby-pokedex.netlify.app</a>
         </div>

         <div class="md:w-[500px] p-5">
             <img src="{{ asset('assets/img/pokedex.png') }}" alt="pokedex img" class="rounded-lg">
         </div>
     </div>

     <div class="md:h-[100vh] flex items-center justify-center p-20">
        <div class="md:w-[500px]">
            <h1 class="font-dancing text-5xl">Cursos de Futbol.</h1>
            <div class="flex flex-wrap text-xs gap-x-2 text-black my-1">
                <span class="bg-orange-400 px-2 rounded-full">laravel</span>
                <span class="bg-pink-400 px-2 rounded-full">bootstrap</span>
            </div>
            <p class="">Pagina hecha en laravel usando bootstrap para darle estilo.</p>
            <a href="https://github.com/GabrielaXd2004/proyecto" class="text-blue-700">https://github.com/GabrielaXd2004/proyecto</a>
        </div>

        <div class="md:w-[500px] p-5">
            <img src="{{ asset('assets/img/proyecto.png') }}" alt="pokedex img" class="rounded-lg">
        </div>
    </div>

 @endsection
