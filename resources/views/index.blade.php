@extends('layouts.app')
@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
           
هل تريد أن تصبح مطورًا؟
        </h1>
        <a 
        href="/blog"
        class="text-center  bg-gray-700 text-gray-50 hover:text-gray-700 hover:bg-gray-50 py-3 px-6 font-bold text-lg uppercase rounded-3xl transition ease-in-out delay-150">
    إقرأ المزيد...
        </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822_1280.jpg" alt="" width="700">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
    <h2 class="text-3xl font-extrabold text-gray-600">
     
بدأت تتعلم من أجل أن تصبح مطور ويب أفضل؟
    </h2>

    <p class="py-8 text-gray-500 text-s">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. modi?
    </p>

    <p class="font-extrabold text-gray-600 text-s pb-9">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa placeat repudiandae autem voluptas, labore cumque, molestias suscipit.
    </p>
    <a 
    href="/blog"
    class="uppercase bg-gray-800 hover:bg-gray-50 text-gray-100 hover:text-gray-800 text-s font-extrabold py-3 px-8 rounded-3xl">
    
اكتشف المزيد..
    </a>
    </div>
</div>

<div class="text-center p-15 bg-gray-800 text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in web development
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        Ux Design
    </span>

    <span class="font-extrabold block text-4xl py-1">
        Project Managment
    </span>
    
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>

    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
       المدونة
    </span>

    <h2 class="text-4xl font-bold py-10 text-gray-800 animate-pulse">
        أحدث المقالات
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-400 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>

            <h3 class="text-xl font-bold py-10 text-right">
تابعنا باستمرار للحصول على اخر اخبار التقنية في مجال الويب             </h3>
            <a 
            href=""
            class="uppercase bg-transparent border-2 hover:bg-gray-800 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        
اكتشف المزيد
        </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/07/31/23/45/pen-2562078_1280.jpg" alt="">
    </div>
</div>
@endsection