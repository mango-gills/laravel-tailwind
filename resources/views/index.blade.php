@extends('layouts.main')

@section('content')
<div class="p-4 bg-white mt-5 drop-shadow-md rounded-md w-[26rem]">
    <h1 class="text-2xl font-extrabold">TODO's</h1>
    <div class="p-5 mt-2 bg-gray-100 rounded-lg w-96">

        <form method="POST" action="{{ route('todos.store') }}">
            @csrf

            <div class="space-y-4">
                <input type="text" name="title" placeholder="Title" class="border-indigo-600 border-[1px] rounded-lg px-2 py-2 w-full outline-0 focus:outline-1 focus:outline-indigo-700">

                <textarea name="description" id="description" class="w-full resize-none outline-0 focus:outline-1 focus:outline-indigo-700 border-indigo-600 border-[1px] rounded-lg h-24 p-2" placeholder="Description"></textarea>
            </div>

            <button type="submit" class="py-2 mt-2 text-white rounded-lg w-36 bg-slate-950">Add Todo</button>

        </form>
        <div class="flex items-center justify-between mt-4 text-sm font-bold text-indigo-950">
            <p>All</p>
            <p>Pending</p>
            <p>Completed</p>
        </div>

        <hr class="border-black/80 mt-2 mb-1 border-[1px] ">

        @foreach($todos as $todo)

        <div class="mt-2 w-full border-y-[1px] border-y-indigo-700 flex justify-between items-center px-2 animate bg-transparent animate {{$todo['isCompleted'] ? 'bg-gradient-to-l from-indigo-100 via-indigo-400 to-indigo-700 text-white border-y-0' : 'text-indigo-900 bg-gradient to-0%'}}">
            <div>
                <h2 class="text-lg font-bold">{{$todo['title']}}</h2>
                <p class="font-thin text-md">{{$todo[
                'description']}}</p>
            </div>
            <div class="flex items-center py-2">

                <form method="POST" action="{{ route('todos.update', $todo->id) }}" class="flex items-center">
                    @csrf
                    @method('PATCH')

                    <input type="checkbox" name="isCompleted" id="isCompleted" onchange="this.form.submit()" class="w-[1.7rem] h-[1.7rem] mr-2 accent-indigo-600 cursor-pointer" {{ $todo['isCompleted'] ? 'checked' : '' }}>
                </form>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="p-1 text-white bg-red-700 rounded-md cursor-pointer w-7 h-7">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                </svg>

            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection