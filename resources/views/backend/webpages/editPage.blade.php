<x-app-layout>
    <x-slot name="header">

        <a href="{{route('post_webpages.index') }}" class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: inline;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
            </svg>
        </a>

        <h2 class="text-xl font-semibold leading-tight text-gray-800 align-middle" style="display: inline;">
            {{ __('Back to webpages') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto md:py-10 sm:px-6 lg:px-8">
            <div class="md:mt-5 md:mt-0 md:col-span-6">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-6">
                            <form method="post" enctype="multipart/form-data" action="{{ route('post_webpages.update', $webpage->id) }}">
                                @csrf
                                @method('PUT')
                                
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 font-bold text-white bg-red-600 sm:px-6 sm:flex">
                                        Webpage editing form
                                    </div>
                                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                        {{-- <h1 class="px-3 py-3 mb-2 font-bold text-white bg-purple-300 rounded">Creating</h1> --}}

                                        @if($errors->any())
                                            <div class="flex flex-row items-center p-2 pl-5 bg-red-200 border-b-2 border-red-300 rounded alert">
                                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-red-100 border-2 border-red-500 rounded-full alert-icon">
                                                    <span class="text-red-500">
                                                        <svg fill="currentColor"
                                                            viewBox="0 0 20 20"
                                                            class="w-6 h-6">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="ml-4 alert-content">
                                                    <div class="text-lg font-semibold text-red-800 alert-title">
                                                        Error
                                                    </div>
                                                    <div class="text-sm text-red-600 alert-description">
                                                        <ul class="list-group">
                                                            @foreach ($errors->all() as $error)
                                                                <li class="list-group-item text-danger">{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-6">
                                                <label for="title" class="block text-sm font-medium text-gray-700">Webpage title</label>
                                                <input type="text" name="title" id="title" value="{{ old('title', $webpage->title) }}" autocomplete="title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') border-red-500 @enderror">
                                                <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('title') }}</div>
                                            </div>
                                        </div>

                                        @if ($webpage->id == 1)
                                            <div style="margin-top:10px;">
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Website Color</label>
                                                <div class="mt-1">
                                                    <input type="text" name="color" id="color" value="{{ old('color', $webpage->color) }}" autocomplete="color" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color') border-red-500 @enderror" placeholder="Enter hex code here ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('color') }}</div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Secondary Color</label>
                                                <div class="mt-1">
                                                    <input type="text" name="color2" id="color2" value="{{ old('color2', $webpage->color2) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter hex code here ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('color2') }}</div>
                                                </div>
                                            </div>

                                            <div style="margin-top:10px;">
                                                <label for="description" class="block text-sm font-medium text-gray-700">Webpage description</label>
                                                <div class="mt-1">
                                                    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('description', $webpage->description) }}</textarea>
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('description') }}</div>
                                                </div>
                                            </div>

                                            <hr>
                                            <h5>Hero</h5>
                                            <div style="margin-top:10px;">
                                                <label for="hero_slide1_title" class="block text-sm font-medium text-gray-700">Hero Title Slide 1</label>
                                                <div class="mt-1">
                                                    <input type="text" name="hero_slide1_title" id="hero_slide1_title" value="{{ old('hero_slide1_title', $webpage->slide1_header) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter title for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('slide1_header') }}</div>
                                                </div>
                                                <label for="hero_slide1_text" class="block text-sm font-medium text-gray-700">Hero Text Slide 1</label>
                                                <div class="mt-1">
                                                    <input type="text" name="hero_slide1_text" id="hero_slide1_text" value="{{ old('hero_slide1_text', $webpage->slide1_sub) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter text for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('slide1_sub') }}</div>
                                                </div>

                                                <label for="hero_slide1_title" class="block text-sm font-medium text-gray-700">Hero Title Slide 2</label>
                                                <div class="mt-1">
                                                    <input type="text" name="hero_slide2_title" id="hero_slide2_title" value="{{ old('hero_slide2_title', $webpage->slide2_header) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter title for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('slide2_header') }}</div>
                                                </div>
                                                <label for="hero_slide2_text" class="block text-sm font-medium text-gray-700">Hero Text Slide 2</label>
                                                <div class="mt-1">
                                                    <input type="text" name="hero_slide2_text" id="hero_slide2_text" value="{{ old('hero_slide2_text', $webpage->slide2_sub) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter text for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('slide2_sub') }}</div>
                                                </div>

                                                <label for="hero_slide3_text" class="block text-sm font-medium text-gray-700">Hero Title Slide 3</label>
                                                <div class="mt-1">
                                                    <input type="text" name="hero_slide3_title" id="hero_slide3_title" value="{{ old('hero_slide3_title', $webpage->slide3_header) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter title for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('slide3_header') }}</div>
                                                </div>
                                                <label for="hero_slide3_text" class="block text-sm font-medium text-gray-700">Hero Text Slide 3</label>
                                                <div class="mt-1">
                                                    <input type="text" name="hero_slide3_text" id="hero_slide3_text" value="{{ old('hero_slide3_text', $webpage->slide3_sub) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter text for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('slide3_sub') }}</div>
                                                </div>

                                                <label for="download_btn_ref" class="block text-sm font-medium text-gray-700">Download Button Reference Link</label>
                                                <div class="Smt-1">
                                                    <input type="text" name="download_btn_ref" id="download_btn_ref" value="{{ old('download_btn_ref', $webpage->download_btn_ref) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter text for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('download_btn_ref') }}</div>
                                                </div>

                                                <label for="enquiry_btn_ref" class="block text-sm font-medium text-gray-700">Enquiry Button Reference Link</label>
                                                <div class="Smt-1">
                                                    <input type="text" name="enquiry_btn_ref" id="enquiry_btn_ref" value="{{ old('enquiry_btn_ref', $webpage->enquiry_btn_ref) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter text for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('enquiry_btn_ref') }}</div>
                                                </div>

                                                <label for="discover_btn_ref" class="block text-sm font-medium text-gray-700">Discover Button Reference Link</label>
                                                <div class="Smt-1">
                                                    <input type="text" name="discover_btn_ref" id="discover_btn_ref" value="{{ old('discover_btn_ref', $webpage->discover_btn_ref) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter text for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('discover_btn_ref') }}</div>
                                                </div>
                                                
                                                {{-- IMAGE PART WE ADDED START --}}
                                                <label for="slides" class="block text-sm font-medium text-gray-700">Hero Slide 1 Image</label>
                                                <div class="Smt-1">
                                                    <input type="file" name="slides[]" id="hero_slide1_image" value="{{ old('hero_slide1_image', $webpage->hero_slide1_image) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Upload image for Hero Section slide 1 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('hero_slide1_image') }}</div>
                                                </div>

                                                <label for="slides" class="block text-sm font-medium text-gray-700">Hero Slide 2 Image</label>
                                                <div class="Smt-1">
                                                    <input type="file" name="slides[]" id="hero_slide2_image" value="{{ old('hero_slide2_image', $webpage->hero_slide2_image) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Upload image for Hero Section slide 2 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('hero_slide2_image') }}</div>
                                                </div>

                                                <label for="slides" class="block text-sm font-medium text-gray-700">Hero Slide 3 Image</label>
                                                <div class="Smt-1">
                                                    <input type="file" name="slides[]" id="hero_slide3_image" value="{{ old('hero_slide3_image', $webpage->hero_slide3_image) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Upload image for Hero Section slide 3 ...">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('hero_slide3_image') }}</div>
                                                </div>

                                                {{-- IMAGE PART WE ADDED END --}}
                                            </div>

                                            <hr>

                                            <h5>Industries</h5>
                                            <div>
                                                <label for="ind_section_header" class="block text-sm font-medium text-gray-700">Section Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="ind_section_header" id="ind_section_header" value="{{ old('ind_section_header', $webpage->ind_section_header) }}" autocomplete="ind_section_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_section_header') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_section_header') }}</div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-6" style="margin-top:10px;">
                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="ind_one_title" class="block text-sm font-medium text-gray-700">Industry #1</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_one_title" id="ind_one_title" value="{{ old('ind_one_title', $webpage->ind_one_title) }}" autocomplete="ind_one_title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_one_title') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_one_title') }}</div>
                                                    </div>

                                                    <label for="ind_one_head" class="block mt-3 text-sm font-medium text-gray-700">Industry heading</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_one_head" id="ind_one_head" value="{{ old('ind_one_head', $webpage->ind_one_head) }}" autocomplete="ind_one_head" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_one_head') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_one_head') }}</div>
                                                    </div>
                                                        
                                                    <label for="ind_one_desc" class="block mt-3 text-sm font-medium text-gray-700">Industry description</label>
                                                    <div class="mt-1">
                                                        <textarea id="ind_one_desc" name="ind_one_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('ind_one_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('ind_one_desc', $webpage->ind_one_desc) }}</textarea>
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_one_desc') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="ind_two_title" class="block text-sm font-medium text-gray-700">Industry #2</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_two_title" id="ind_two_title" value="{{ old('ind_two_title', $webpage->ind_two_title) }}" autocomplete="ind_two_title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_two_title') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_two_title') }}</div>
                                                    </div>

                                                    <label for="ind_two_head" class="block mt-3 text-sm font-medium text-gray-700">Industry heading</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_two_head" id="ind_two_head" value="{{ old('ind_two_head', $webpage->ind_two_head) }}" autocomplete="ind_two_head" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_two_head') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_two_head') }}</div>
                                                    </div>

                                                    <label for="ind_two_desc" class="block mt-3 text-sm font-medium text-gray-700">Industry description</label>
                                                    <div class="mt-1">
                                                        <textarea id="ind_two_desc" name="ind_two_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('ind_two_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('ind_two_desc', $webpage->ind_two_desc) }}</textarea>
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_two_desc') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="ind_three_title" class="block text-sm font-medium text-gray-700">Industry #3</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_three_title" id="ind_three_title" value="{{ old('ind_three_title', $webpage->ind_three_title) }}" autocomplete="ind_three_title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_three_title') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_three_title') }}</div>
                                                    </div>

                                                    <label for="ind_three_head" class="block mt-3 text-sm font-medium text-gray-700">Industry heading</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_three_head" id="ind_three_head" value="{{ old('ind_three_head', $webpage->ind_three_head) }}" autocomplete="ind_three_head" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_three_head') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_three_head') }}</div>
                                                    </div>
                                                        
                                                    <label for="ind_three_desc" class="block mt-3 text-sm font-medium text-gray-700">Industry description</label>
                                                    <div class="mt-1">
                                                        <textarea id="ind_three_desc" name="ind_three_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('ind_three_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('ind_three_desc', $webpage->ind_three_desc) }}</textarea>
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('ind_three_desc') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <hr>

                                            <h5>Services</h5>
                                            <div>
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Section Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="services_header" id="services_header" value="{{ old('services_header', $webpage->services_header) }}" autocomplete="services_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('services_header') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('code_name') }}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Services</label>
                                                <div class="service-container">
                                                    @foreach ($webpage->services as $servicePair)
                                                        <div class="grid grid-cols-3 gap-6 mt-1">
                                                            @foreach ($servicePair as $index => $service)
                                                                <div>
                                                                    @if ($index === 0)
                                                                        <input type="file" name="service_image[{{$loop->parent->index}}]" id="service_image[{{$loop->parent->index}}]" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('service_image['.($loop->parent->index).']') border-red-500 @enderror">
                                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('service_image['.($loop->parent->index).']') }}</div>
                                                                    @else
                                                                        <input type="text" name="service[{{$loop->parent->index * 2 + $index}}]" id="service[{{$loop->parent->index * 2 + $index}}]" value="{{ old('service['.($loop->parent->index * 2 + $index).']', $service) }}" autocomplete="service[{{$loop->parent->index * 2 + $index}}]" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('service['.($loop->parent->index * 2 + $index).']') border-red-500 @enderror" placeholder="{{ $index === 0 ? 'Service Title' : 'Service Description' }}">
                                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('service['.($loop->parent->index * 2 + $index).']') }}</div>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Button to add new Service pair -->
                                                <button type="button" onclick="addNewService()" class="inline-flex items-center px-4 py-2 mt-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Add a Service</button>
                                            </div>

                                            <hr>

                                            <h5>Frequently asked questions</h5>
                                            <div>
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">FAQs</label>
                                                <div class="faq-container">
                                                    @foreach ($webpage->faqs as $faqPair)
                                                        <div class="grid grid-cols-2 gap-6 mt-1">
                                                            @foreach ($faqPair as $index => $faq)
                                                                <div>
                                                                    <input type="text" name="faq[{{$loop->parent->index * 2 + $index}}]" id="faq[{{$loop->parent->index * 2 + $index}}]" value="{{ old('faq['.($loop->parent->index * 2 + $index).']', $faq) }}" autocomplete="faq[{{$loop->parent->index * 2 + $index}}]" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('faq['.($loop->parent->index * 2 + $index).']') border-red-500 @enderror" placeholder="{{ $index === 0 ? 'Frequently Asked Question' : 'Your explanation to the Question' }}">
                                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('faq['.($loop->parent->index * 2 + $index).']') }}</div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Button to add new FAQ pair -->
                                                <button type="button" onclick="addNewFAQ()" class="inline-flex items-center px-4 py-2 mt-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Add an FAQ</button>
                                            </div>
                                        @endif
                                        
                                        @if ($webpage->id == 2)
                                            <div>
                                                <label for="about_page_header" class="block text-sm font-medium text-gray-700">Page Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="about_page_header" id="about_page_header" value="{{ old('about_page_header', $webpage->about_page_header) }}" autocomplete="about_page_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_page_header') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('about_page_header') }}</div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <label for="about_page_header_desc" class="block text-sm font-medium text-gray-700">Page Description</label>
                                                <div class="mt-1">
                                                    <textarea id="about_page_header_desc" name="about_page_header_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_page_header_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_page_header_desc', $webpage->about_page_header_desc) }}</textarea>
                                                    <div class="mt-1 text-sm text-red-600 alert-about_page_header_desc text-danger">{{ $errors->first('about_page_header_desc') }}</div>
                                                </div>
                                            </div>
                                            
                                            <hr>

                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="about_us_title1" class="block text-sm font-medium text-gray-700">Title #1</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="about_us_title1" id="about_us_title1" value="{{ old('about_us_title1', $webpage->about_us_title1) }}" autocomplete="about_us_title1" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_us_title1') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('about_us_title1') }}</div>
                                                    </div>
                                                    
                                                    <div>
                                                        <label for="about_us_desc1" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <div class="mt-1">
                                                            <textarea id="about_us_desc1" name="about_us_desc1" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_us_desc1') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_us_desc1', $webpage->about_us_desc1) }}</textarea>
                                                            <div class="mt-1 text-sm text-red-600 alert-about_us_desc1 text-danger">{{ $errors->first('about_us_desc1') }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="about_us_title2" class="block text-sm font-medium text-gray-700">Title #2</label>
                                                    <input type="text" name="about_us_title2" id="about_us_title2" value="{{ old('about_us_title2', $webpage->about_us_title2) }}" autocomplete="about_us_title2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_us_title2') border-red-500 @enderror" placeholder="Title">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('about_us_title2') }}</div>

                                                    <div>
                                                        <label for="about_us_desc2" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <div class="mt-1">
                                                            <textarea id="about_us_desc2" name="about_us_desc2" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_us_desc2') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_us_desc2', $webpage->about_us_desc2) }}</textarea>
                                                            <div class="mt-1 text-sm text-red-600 alert-about_us_desc2 text-danger">{{ $errors->first('about_us_desc2') }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="grid grid-cols-3 gap-6">
                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="about_value_title1" class="block text-sm font-medium text-gray-700">About #1</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="about_value_title1" id="about_value_title1" value="{{ old('about_value_title1', $webpage->about_value_title1) }}" autocomplete="about_value_title1" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_value_title1') border-red-500 @enderror" placeholder="Title">
                                                        <div class="mt-1 text-sm text-red-600 alert-about_value_title1 text-danger">{{ $errors->first('about_value_title1') }}</div>
                                                    </div>
                                                    <div>
                                                        
                                                <label for="about_value_desc1" class="block mt-3 text-sm font-medium text-gray-700">Description</label>
                                                <div class="mt-1">
                                                        <textarea id="about_value_desc1" name="about_value_desc1" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_value_desc1') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_value_desc1', $webpage->about_value_desc1) }}</textarea>
                                                        <div class="mt-1 text-sm text-red-600 alert-about_value_desc1 text-danger">{{ $errors->first('about_value_desc1') }}</div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="about_value_title2" class="block text-sm font-medium text-gray-700">About #2</label>
                                                    <input type="text" name="about_value_title2" id="about_value_title2" value="{{ old('about_value_title2', $webpage->about_value_title2) }}" autocomplete="about_value_title2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_value_title2') border-red-500 @enderror" placeholder="Title">
                                                    <div class="mt-1 text-sm text-red-600 alert-about_value_title2 text-danger">{{ $errors->first('about_value_title2') }}</div>
                                                    <div>
                                                        
                                                <label for="about_value_desc2" class="block mt-3 text-sm font-medium text-gray-700">Description</label>
                                                <div class="mt-1">
                                                        <textarea id="about_value_desc2" name="about_value_desc2" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_value_desc2') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_value_desc2', $webpage->about_value_desc2) }}</textarea>
                                                        <div class="mt-1 text-sm text-red-600 alert-about_value_desc2 text-danger">{{ $errors->first('about_value_desc2') }}</div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="about_value_title3" class="block text-sm font-medium text-gray-700">About #3</label>
                                                    <input type="text" name="about_value_title3" id="about_value_title3" value="{{ old('about_value_title3', $webpage->about_value_title3) }}" autocomplete="about_value_title3" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_value_title3') border-red-500 @enderror" placeholder="Title">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('about_value_title3') }}</div>
                                                    <div>
                                                        
                                                <label for="about_value_desc3" class="block mt-3 text-sm font-medium text-gray-700">Description</label>
                                                <div class="mt-1">
                                                        <textarea id="about_value_desc3" name="about_value_desc3" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_value_desc3') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_value_desc3', $webpage->about_value_desc3) }}</textarea>
                                                        <div class="mt-1 text-sm text-red-600 alert-about_value_desc3 text-danger">{{ $errors->first('about_value_desc3') }}</div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div>
                                                <label for="about_mission_statement" class="block text-sm font-medium text-gray-700">Mission Statement Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="about_mission_statement" id="about_mission_statement" value="{{ old('about_mission_statement', $webpage->about_mission_statement) }}" autocomplete="about_mission_statement" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_mission_statement') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="mt-1 text-sm text-red-600 alert-about_mission_statement text-danger">{{ $errors->first('about_mission_statement') }}</div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <label for="about_mission_desc" class="block text-sm font-medium text-gray-700">Mission Statement description</label>
                                                <div class="mt-1">
                                                    <textarea id="about_mission_desc" name="about_mission_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_mission_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_mission_desc', $webpage->about_mission_desc) }}</textarea>
                                                    <div class="mt-1 text-sm text-red-600 alert-about_mission_desc text-danger">{{ $errors->first('about_mission_desc') }}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($webpage->id == 3)
                                            <div>
                                                <label for="contact_page_header" class="block text-sm font-medium text-gray-700">Page Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="contact_page_header" id="contact_page_header" value="{{ old('contact_page_header', $webpage->contact_page_header) }}" autocomplete="contact_page_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_page_header') border-red-500 @enderror" placeholder="Committed to helping you meet all your Businessing needs.">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('contact_page_header') }}</div>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_office" class="block text-sm font-medium text-gray-700">Corporate Office</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="contact_office" id="contact_office" value="{{ old('contact_office', $webpage->contact_office) }}" autocomplete="contact_office" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_office') border-red-500 @enderror" placeholder="Afia Mall 4th Floor, Addis Ababa, Ethiopia.">
                                                        <div class="mt-1 text-sm text-red-600 alert-contact_office text-danger">{{ $errors->first('contact_office') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_office_hours" class="block text-sm font-medium text-gray-700">Office Hours</label>
                                                    <input type="text" name="contact_office_hours" id="contact_office_hours" value="{{ old('contact_office_hours', $webpage->contact_office_hours) }}" autocomplete="contact_office_hours" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_office_hours') border-red-500 @enderror" placeholder="Mon - Fri: 9:00am to 5:00pm">
                                                    <div class="mt-1 text-sm text-red-600 alert-contact_office_hours text-danger">{{ $errors->first('contact_office_hours') }}</div>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_front_desk_phone" class="block text-sm font-medium text-gray-700">Front Desk Phone</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="contact_front_desk_phone" id="contact_front_desk_phone" value="{{ old('contact_front_desk_phone', $webpage->contact_front_desk_phone) }}" autocomplete="contact_front_desk_phone" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_front_desk_phone') border-red-500 @enderror" placeholder="+251-11-565-****">
                                                        <div class="mt-1 text-sm text-red-600 alert-contact_front_desk_phone text-danger">{{ $errors->first('contact_front_desk_phone') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_front_desk_email" class="block text-sm font-medium text-gray-700">Front Desk Email</label>
                                                    <input type="text" name="contact_front_desk_email" id="contact_front_desk_email" value="{{ old('contact_front_desk_email', $webpage->contact_front_desk_email) }}" autocomplete="contact_front_desk_email" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_front_desk_email') border-red-500 @enderror" placeholder="contact@aingroup.ae">
                                                    <div class="mt-1 text-sm text-red-600 alert-contact_front_desk_email text-danger">{{ $errors->first('contact_front_desk_email') }}</div>
                                                </div>
                                            </div>

                                            <hr>

                                            <h5>Offices</h5>
                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="site_area" class="block text-sm font-medium text-gray-700">Building</label>
                                                    <input type="text" name="site_area" id="site_area" value="{{ old('site_area.0', $webpage->site_area) }}" autocomplete="site_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('site_area.*') border-red-500 @enderror" placeholder="Name of building">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('site_area.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="floor_area" class="block text-sm font-medium text-gray-700">Address</label>
                                                    <input type="text" name="floor_area" id="floor_area" value="{{ old('floor_area', $webpage->floor_area) }}" autocomplete="floor_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('floor_area') border-red-500 @enderror" placeholder="Afia Mall 4th Floor, Addis Ababa, Ethiopia.">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('floor_area') }}</div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="architects[]" class="block text-sm font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="architects[]" id="architects[]" value="{{ old('architects.0', $webpage->architects[0] ?? '') }}" autocomplete="architects" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('architects.*') border-red-500 @enderror" placeholder="+251-90-777-88**">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('architects.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="client" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="text" name="client" id="client" value="{{ old('client', $webpage->client) }}" autocomplete="client" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="contact@aingroup.ae">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('client') }}</div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-gray-500" style="margin-top: .4rem !important;">
                                                First Office Ends Here
                                            </p>

                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="site_area" class="block text-sm font-medium text-gray-700">Building</label>
                                                    <input type="text" name="site_area" id="site_area" value="{{ old('site_area.0', $webpage->site_area) }}" autocomplete="site_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('site_area.*') border-red-500 @enderror" placeholder="Name of building">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('site_area.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="floor_area" class="block text-sm font-medium text-gray-700">Address</label>
                                                    <input type="text" name="floor_area" id="floor_area" value="{{ old('floor_area', $webpage->floor_area) }}" autocomplete="floor_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('floor_area') border-red-500 @enderror" placeholder="Afia Mall 4th Floor, Addis Ababa, Ethiopia">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('floor_area') }}</div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="architects[]" class="block text-sm font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="architects[]" id="architects[]" value="{{ old('architects.0', $webpage->architects[0] ?? '') }}" autocomplete="architects" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('architects.*') border-red-500 @enderror" placeholder="+251-90-777-88**">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('architects.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="client" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="text" name="client" id="client" value="{{ old('client', $webpage->client) }}" autocomplete="client" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="contact@aingroup.ae">
                                                    <div class="mt-1 text-sm text-red-600 alert-description text-danger">{{ $errors->first('client') }}</div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <input type="hidden" name="postedBy" id="postedBy" value="{{ Auth::user()->id }}">
                                    
                                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                        <button type="submit" class="w-full h-12 text-base font-bold text-white normal-case align-middle transition duration-500 ease-in-out bg-red-600 border-transparent rounded-md hover:text-white hover:bg-purple-700 active:bg-purple-700 focus:border-purple-500 focus:ring focus:ring-purple-500">
                                        Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function addNewFAQ() {
        var faqContainer = document.querySelector('.faq-container');
        var faqPair = document.createElement('div');
        faqPair.classList.add('grid', 'grid-cols-2', 'gap-6', 'mt-1');

        // Add two input fields for the new FAQ pair
        for (var i = 0; i < 2; i++) {
            var inputDiv = document.createElement('div');
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'faq[]');
            input.setAttribute('placeholder', i === 0 ? 'Frequently Asked Question' : 'Your explanation to the Question');
            input.classList.add('mt-1', 'focus:ring-red-600', 'focus:border-red-600', 'block', 'w-full', 'shadow-sm', 'sm:text-sm', 'border-gray-300', 'rounded-md');
            inputDiv.appendChild(input);
            faqPair.appendChild(inputDiv);
        }

        // Append the new FAQ pair to the faqContainer
        faqContainer.appendChild(faqPair);
    }

    function addNewService() {
        var serviceContainer = document.querySelector('.service-container');
        var servicePair = document.createElement('div');
        servicePair.classList.add('grid', 'grid-cols-3', 'gap-6', 'mt-1');

        // Image input
        var imageDiv = document.createElement('div');
        var imageInput = document.createElement('input');
        imageInput.setAttribute('type', 'file');
        imageInput.setAttribute('name', 'service_image[]');
        imageInput.classList.add('mt-1', 'focus:ring-red-600', 'focus:border-red-600', 'block', 'w-full', 'shadow-sm', 'sm:text-sm', 'border-gray-300', 'rounded-md');
        imageDiv.appendChild(imageInput);
        servicePair.appendChild(imageDiv);
        
        // Loop to create two input fields
        for (var i = 0; i < 2; i++) {
            var inputDiv = document.createElement('div');
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'service[]');
            input.setAttribute('placeholder', i === 0 ? 'Service Title' : 'Service Description');
            input.classList.add('mt-1', 'focus:ring-red-600', 'focus:border-red-600', 'block', 'w-full', 'shadow-sm', 'sm:text-sm', 'border-gray-300', 'rounded-md');
            inputDiv.appendChild(input);
            servicePair.appendChild(inputDiv);
        }


        // Append the new Service pair to the serviceContainer
        serviceContainer.appendChild(servicePair);
    }
</script>