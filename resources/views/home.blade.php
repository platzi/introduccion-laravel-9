@extends('template')
	
@section('content')
<div>
	<!-- Destacado -->
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Contenido técnico</h1>

    <div class="grid grid-cols-1 gap-4 mb-4">
    	@foreach($posts as $post)
        <a href="" class="bg-gray-100 rounded-lg px-6 py-4">        
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                <span>{{ $post->created_at->format('d/m/Y') }}</span>
            </p>

            <h2 class="text-lg text-gray-900 mt-2">{{ $post->title }}</h2>
        </a>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection