@extends('layouts.app')

@section('content')



<ul>
    @foreach ($articles as $article)
    <li>


        <a href="articles/{{ $article->id }}">


            <br>

            Title: {{ $article ->title }}
            <br>
            Short description: {{ $article ->short_description }}
            <br>

            Date: {{ $article ->created_at }}


            <img src="{{$article->thumbnail}}" alt="interesting" width="200" height="200">

            {{-- <img src="{{asset("$article->image")}}" alt="this should be an image" width="200" height="200"> --}}

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                onclick="document.location='/articles/{$article}'">Tovább</button>
        </a>
        <hr>


    </li>
    @endforeach
</ul>

<div>
    {{ $articles->links() }}
</div>


@endsection
