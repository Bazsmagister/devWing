@extends('layouts.app')

@section('content')


<div>
    <p>
        Article title: {{ $article->title }}
    </p>

    <p>
        Article date: {{ $article->created_at }}
    </p>


    <div>
        <img src="{{asset("$article->image")}}" alt="this should be an image" width="" height="">
    </div>

    <p>
        Article long description:
        <br>

        {{ $article->long_description }}
    </p>



    {{-- {{  $article->body }}<br> --}}



    {{-- <div>
        <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" href="/articles"
            class="btn btn-warning">Vissza</a>
    </div> --}}

    <div>
        <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" href="/"
            class="btn btn-warning">Vissza</a>
    </div>




</div>



@endsection
