@extends('layouts.app')

@section('content')
    
    <div class="h-full flex flex-col justify-center items-center mt-1/12">
        <h1 class="text-xl font-poppins font-bold text-cool-gray-300 mb-3">Přidat fotografie</h1>

            <form action="{{ route('galerie.store') }}" method="post" enctype="multipart/form-data" class="h-11/12 px-10 bg-gray-light py-10 flex flex-col items-center justify-center ">
                @csrf
                <div class="flex flex-col justify-evenly  h-full">

                    <input type="text" 
                            name="car" 
                            class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                            placeholder="název auta">

                    <input type="text" 
                            name="type" 
                            class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                            placeholder="typ auta">

                    <Textarea name="description" 
                                cols="20" rows="4" 
                                class="form-textarea text-gray-light" 
                                placeholder="popis"></Textarea>


        
                    <div>
                        <div class="my-4 flex flex-col font-bold w-5/6 ">
                            <label class="block my-2 text-white font-poppins  text-sm font-bold ">
                                <h1>Hlavní obrázek</h1>
                            </label>
        
                            <input  class="rounded focus:outline-none ml-2 text-red-custom focus:text-black-custom"
                                    type="file" 
                                    name="cover"
                                    >                      
                        </div>
        
                        <div class="my-4 flex flex-col font-bold w-5/6 ">
                            <label class="block my-2 text-white font-poppins  text-sm font-bold ">
                                <h1>Další obrázky</h1>
                            </label>
        
                            <input  class="rounded focus:outline-none ml-2 text-red-custom focus:text-black-custom "
                                    type="file" 
                                    name="images[]" multiple
                                    >                      
                        </div>
                    </div>


                    {{-- <label class="m-2">Další obrázky</label>

                    <input type="file" 
                            id="input-file-now-custom-3" 
                            class="" 
                            name="images[]" multiple> --}}
        
                    <div class="flex justify-center">
                        <button type="submit" class="flex flex-row justify-evenly items-center w-32 bg-red-custom px-3 py-2 rounded-md focus:outline-none ">
                            <h1 class="font-montserrat text-gray-light ">Nahrát</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
    </div>




{{-- <div class="border-2 h-full">
    <div class="w-4/12 m-auto">
        <h1 class="text-xl font-poppins font-bold text-cool-gray-300 mb-3">Objednávky online</h1>
    
        <div class="form-group">
            <form action="{{ route('galerie.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="form-control m-2" placeholder="název auta">
                <input type="text" name="author" class="form-control m-2" placeholder="typ auta">
                <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="popis"></Textarea>
                <label class="m-2">Hlavní obrázek</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
    
                <label class="m-2">Další obrázky</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
    
                <div class="flex justify-center">
                <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container " style="margin-top: 50px;">
</div> --}}

    
    
    
    

@endsection


{{-- 
    
    
        <div class="flex justify-center items-center flex-col h-full ">
        <div class="bg-gray-light p-5 w-5/12">
            <h1 class="text-xl font-poppins font-bold text-cool-gray-300 text-center my-5">Nahrát fotky</h1>
            <form action="{{route('dashboard-galerie-store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="my-10">
                    <div class="imgPreview flex flex-row w-44 h-44"> </div>
                </div>            

                <div class="flex justify-evenly">
                    <input type="file" name="imageFile[]" class="cursor-pointer" id="images" multiple="multiple">
                    <label class="cursor-pointer" for="images">Vybrat fotografie</label>
                </div>


                <div class="flex justify-center mt-10 mb-5">                    
                    <button type="submit" name="submit" class="bg-blue-light py-2 px-4 rounded-md text-gray-light font-bold focus:outline-none">
                        Odeslat fotky
                    </button>
                </div>

                <input type="date" name="" id="" placeholder="" class='placeholder-black-custom text-gray-light'>
                <input type="text" name="" placeholder="car">
                <input type="text" name="" placeholder="type">
                <textarea name="" id="" cols="30" rows="10">
                    
                </textarea>


            </form>
        </div>
    </div>


    <x-jquerScript/>
    
    --}}


{{-- 
    


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
    
    --}}