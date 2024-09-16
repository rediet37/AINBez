
    
    <div class="grid justify-center grid-cols-1 gap-8 mx-24 md:grid-cols-3">
        @foreach($news as $singleNews)
        <div class="flex flex-col items-center mt-2 border">
                @if($singleNews->cover_image_path)
                <img class = "mb-4 w-68 rounded-start" src="{{asset('images/blog/' . $singleNews->cover_image_path) }}" alt="{{ $singleNews->title }} cover image">
                @else
                <img class = "mb-4 w-68 rounded-start" src="{{asset('images/blog/blog-v1-1.jpg') }}" alt="Default image">
                @endif
            
                <h2 class="pb-1 text-3xl font-bold uppercase text-teal-950">{{ $singleNews->title }}</h2>
                <hr/>

                {{-- Use the website's font for this --}}

                <p class="px-3 pt-2 pb-4 text-sm">{{ $singleNews->summary }}</p>
                <div class="flex justify-between w-full px-4 pb-3">
                        {{-- news tags as a component (look in witsrasra) --}}
                        
                </div>
                {{-- hr tag is not displaying for some reason --}}
                <hr class="border-t-2 border-black"/>
                
                
            </div>
        @endforeach
    </div>

