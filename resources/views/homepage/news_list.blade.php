<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMo4IvvEpxpYNuENY5mYZk6XPz26pLrjz3+OYKm" crossorigin="anonymous">
  </head>

  <body>
    <div class="grid justify-center gap-5 grid-cols-1 md:grid-cols-3 mx-8 mt-4 px-4 py-8">
        @foreach($news as $singleNews)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                @if($singleNews->cover_image_path)
                <img class = "w-full h-64 object-cover" src="{{asset('images/blog/' . $singleNews->cover_image_path) }}" alt="{{ $singleNews->title }} cover image">
                @else
                <img class = "w-full h-64 object-cover" src="{{asset('images/blog/blog-v1-1.jpg') }}" alt="Default image">
                @endif
            
                <div class="p-6">
                <a href="{{route('ain.news', ['id' => $singleNews->id])}}">
                <h1 class="text-3xl font-bold mb-4 text-gray-800">{{ $singleNews->title }}</h1>
                </a>
                <hr class="mb-2"/>

                {{-- Author and date --}}
                {{-- Maybe add author/profile and date icons --}}

                <div class="flex items-center text-sm justify-between space-x-4 text-gray-500 mb-4">
                    <div class="font-medium">{{$singleNews->author->name}}</div>
                    
                    <div>{{$singleNews->created_at->diffForHumans()}}</div>
                </div>

                {{-- Summary --}}
            
                    <p class="text-gray-700 mb-6">{{ $singleNews->summary }}</p>

                {{-- Tags --}}
                <div>
                    <div class="flex justify-between items-center">
                        <div class="flex flex-wrap items-center gap-2 mb-6">
                            @if(!empty($singleNews->tags))
                                @php
                                    $tags = $singleNews->tags;
                                @endphp
                                @foreach ($tags as $tag)
                                    <span class="px-3 py-1 bg-gray-400 text-black rounded-full text-sm"><a href="/?tag={{$tag}}">{{$tag}}</a></span>                   
                                @endforeach
                            @endif 
                        </div>   
                        <div class="text-sm font-semibold">
                            <i class="fa fa-eye"></i>
                            <span>{{$singleNews->views_count}}</span>
                        </div>
                    </div> 

                </div>

                {{-- View count and share --}}
                <div class="flex items-center justify-end">
                    {{-- View count --}}
                    
                        

                </div>

                
                
            </div>
                
                
            </div>
        @endforeach
    </div>
</body>
