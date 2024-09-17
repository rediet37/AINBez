<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <div class="max-w-7xl mx-auto px-4 py-8">
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
                <hr/>

                {{-- Author and date --}}
                {{-- Maybe add author/profile and date icons --}}

                <div class="flex items-center space-x-4 text-gray-500 mb-4">
                    <span class="font-medium">{{$singleNews->author->name}}</span>
                    <span>•</span>
                    <span>{{$singleNews->created_at->diffForHumans()}}</span>
                </div>

                {{-- Summary --}}
            
                    <p class="text-gray-700 mb-6">{{ $singleNews->summary }}</p>

                {{-- Tags --}}
                <div class="flex flex-wrap items-center gap-2 mb-6">
                    @if(!empty($singleNews->tags))
                        @php
                            $tags = $singleNews->tags;
                        @endphp
                        @foreach ($tags as $tag)
                            <span class="px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm"><a href="/?tag={{$tag}}">{{$tag}}</a></span>                   
                        @endforeach
                    @endif      
                </div>

                {{-- View count and share --}}
                <div class="flex items-center justify-between">
                    {{-- View count --}}
                    <div class="flex items-center text-gray-500 space-x-2">
                        <i class="fas fa-eye h-5 w-5 text-gray-400"></i>
                        <span>{{$singleNews->views_count}}</span>
                    </div>

                    {{-- Share --}}
                    {{-- Options to share?? --}}

                </div>

                <div>
                    <p>{{$singleNews->author->name}}</p>
                    <p>{{$singleNews->created_at->diffForHumans()}}</p>
                </div>
                
            </div>
                
                
            </div>
        @endforeach
    </div>
</body>
