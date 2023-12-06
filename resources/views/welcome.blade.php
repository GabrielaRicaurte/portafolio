 @extends('layouts.app')

 @section('content')
    <div class="md:h-[100vh] flex flex-wrap items-center justify-center p-20" id="head">
        <div class="md:w-[500px]">
            <h1 class="text-6xl font-dancing">Gabriela D. Ruiz Ruiz</h1>
            <div class="flex flex-col mt-1">
                <span><i class="fas fa-envelope mx-2"></i>gabyruizricaurte2004@gmail.com</span>
                <a href="https://github.com/GabrielaXd2004" class="hover:underline"><i class="fab fa-github mx-2"></i>GabrielaXd2004</a>
            </div>
        </div>
        <div class="md:w-[500px] flex md:justify-end">
            <img src="{{ asset('assets/img/me.jpeg') }}" alt="me" class="rounded-full shadow-lg shadow-cyan-500/50 w-80">
        </div>
    </div>

    <div class="md:h-[100vh] flex items-center justify-center p-20">

    </div>
 @endsection
