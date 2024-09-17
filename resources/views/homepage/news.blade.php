{{-- Page to view the individual news --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMo4IvvEpxpYNuENY5mYZk6XPz26pLrjz3+OYKm" crossorigin="anonymous">
  </head>

<body class="bg-gray-100">
    {{-- News article section --}}
    <div class="max-w-4xl mx-auto px-4 py-8">
        <img class = "w-full h-72 object-cover rounded-lg shadow-lg mb-8r" src="{{asset('images/blog/' . $news->cover_image_path) }}" alt="{{ $news->title }} cover image">
    </div>

    {{-- Article content --}}
    <article>
        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{$news->title}}</h1>

        <div class="flex items-center text-gray-500 mb-6">
            <span>By <span class="font-medium">{{$news->author->name}}</span></span>
            <span class="mx-2">•</span>
            <span>{{$news->created_at->diffForHumans()}}</span>
        </div>

        <div class="flex flex-wrap gap-2 mb-6">
            @if(!empty($news->tags))
                @php
                    $tags = $news->tags;
                @endphp
                @foreach($tags as $tag)
                    <span class="px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">{{$tag}}</span>
                @endforeach
            @endif
        </div>

        <div class="text-gray-700 space-y-6 mb-6">

        </div>


    </article>
</body>