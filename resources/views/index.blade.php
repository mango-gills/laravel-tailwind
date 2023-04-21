@extends('layouts.main')

@section('content')
<div class="p-4 bg-white mt-5 drop-shadow-md rounded-md w-[26rem]">
    <h1 class="text-2xl font-extrabold">TODO's</h1>

    <form action="POST" action="/" class="mt-2 w-96 bg-gray-100 p-5 rounded-lg">
        <div class="space-y-4">
            <input type="text" name="title" placeholder="Title" class="border-indigo-600 border-[1px] rounded-lg px-4 py-2 w-full outline-0 focus:outline-1 focus:outline-indigo-700">

            <textarea name="description" id="description" class="w-full resize-none outline-0 focus:outline-1 focus:outline-indigo-700 border-indigo-600 border-[1px] rounded-lg h-24"></textarea>
        </div>

        <button class="mt-5 w-36 py-2 bg-slate-950 text-white rounded-lg">Add Todo</button>

        <div class="flex items-center justify-between text-indigo-950 text-sm font-bold mt-4">
            <p>All</p>
            <p>Pending</p>
            <p>Completed</p>
        </div>

        <hr class="border-black/80 mt-2 mb-1 border-[1px] ">

        <div class="mt-4 w-full border-y-[1px] border-y-indigo-700 py-1 flex justify-between items-center px-2 bg-gradient-to-l from-indigo-100 via-indigo-400 to-indigo-700">
            <div class="text-white">
                <h2>Title</h2>
                <p>Description</p>
            </div>
            <div class="flex items-center">

                <input type="checkbox" name="complete" id="complete" class="w-[1.7rem] h-[1.7rem] mr-2 accent-indigo-600 cursor-pointer">



                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="p-1 w-7 h-7 rounded-md text-white bg-red-700 cursor-pointer">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                </svg>

            </div>

        </div>
    </form>
</div>
@endsection