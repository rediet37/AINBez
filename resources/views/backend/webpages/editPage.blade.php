<x-app-layout>
    <x-slot name="header">

        <a href="{{route('post_webpages.index') }}" class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: inline;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
            </svg>
        </a>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle" style="display: inline;">
            {{ __('Back to webpages') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto md:py-10 sm:px-6 lg:px-8">
            <div class="md:mt-5 md:mt-0 md:col-span-6">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-6">
                            <form method="post" action="{{ route('post_webpages.update', $webpage->id) }}">
                                @csrf
                                @method('PUT')
                                
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="bg-red-600 px-4 py-5 sm:px-6 sm:flex text-white font-bold">
                                        Webpage editting form
                                    </div>
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        {{-- <h1 class="font-bold mb-2 py-3 px-3 rounded bg-purple-300 text-white">Creating</h1> --}}

                                        @if($errors->any())
                                            <div class="alert flex flex-row items-center bg-red-200 p-2 pl-5 rounded border-b-2 border-red-300">
                                                <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                                    <span class="text-red-500">
                                                        <svg fill="currentColor"
                                                            viewBox="0 0 20 20"
                                                            class="h-6 w-6">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="alert-content ml-4">
                                                    <div class="alert-title font-semibold text-lg text-red-800">
                                                        Error
                                                    </div>
                                                    <div class="alert-description text-sm text-red-600">
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
                                                <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('title') }}</div>
                                            </div>
                                        </div>

                                        @if ($webpage->id == 1)
                                            <div style="margin-top:10px;">
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Website Color</label>
                                                <div class="mt-1">
                                                    <input type="text" name="color" id="color" value="{{ old('color', $webpage->color) }}" autocomplete="color" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color') border-red-500 @enderror" placeholder="Enter hex code here ...">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('color') }}</div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Secondary Color</label>
                                                <div class="mt-1">
                                                    <input type="text" name="color2" id="color2" value="{{ old('color2', $webpage->color2) }}" autocomplete="color2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('color2') border-red-500 @enderror" placeholder="Enter hex code here ...">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('color2') }}</div>
                                                </div>
                                            </div>

                                            <div style="margin-top:10px;">
                                                <label for="description" class="block text-sm font-medium text-gray-700">Webpage description</label>
                                                <div class="mt-1">
                                                    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('description', $webpage->description) }}</textarea>
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('description') }}</div>
                                                </div>
                                            </div>

                                            <hr>

                                            <h5>Industries</h5>
                                            <div>
                                                <label for="ind_section_header" class="block text-sm font-medium text-gray-700">Section Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="ind_section_header" id="ind_section_header" value="{{ old('ind_section_header', $webpage->ind_section_header) }}" autocomplete="ind_section_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_section_header') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_section_header') }}</div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-3 gap-6" style="margin-top:10px;">
                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="ind_one_title" class="block text-sm font-medium text-gray-700">Industry #1</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_one_title" id="ind_one_title" value="{{ old('ind_one_title', $webpage->ind_one_title) }}" autocomplete="ind_one_title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_one_title') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_one_title') }}</div>
                                                    </div>

                                                    <label for="ind_one_head" class="block text-sm font-medium text-gray-700 mt-3">Industry heading</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_one_head" id="ind_one_head" value="{{ old('ind_one_head', $webpage->ind_one_head) }}" autocomplete="ind_one_head" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_one_head') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_one_head') }}</div>
                                                    </div>
                                                        
                                                    <label for="ind_one_desc" class="block text-sm font-medium text-gray-700 mt-3">Industry description</label>
                                                    <div class="mt-1">
                                                        <textarea id="ind_one_desc" name="ind_one_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('ind_one_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('ind_one_desc', $webpage->ind_one_desc) }}</textarea>
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_one_desc') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="ind_two_title" class="block text-sm font-medium text-gray-700">Industry #2</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_two_title" id="ind_two_title" value="{{ old('ind_two_title', $webpage->ind_two_title) }}" autocomplete="ind_two_title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_two_title') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_two_title') }}</div>
                                                    </div>

                                                    <label for="ind_two_head" class="block text-sm font-medium text-gray-700 mt-3">Industry heading</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_two_head" id="ind_two_head" value="{{ old('ind_two_head', $webpage->ind_two_head) }}" autocomplete="ind_two_head" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_two_head') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_two_head') }}</div>
                                                    </div>

                                                    <label for="ind_two_desc" class="block text-sm font-medium text-gray-700 mt-3">Industry description</label>
                                                    <div class="mt-1">
                                                        <textarea id="ind_two_desc" name="ind_two_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('ind_two_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('ind_two_desc', $webpage->ind_two_desc) }}</textarea>
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_two_desc') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="ind_three_title" class="block text-sm font-medium text-gray-700">Industry #3</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_three_title" id="ind_three_title" value="{{ old('ind_three_title', $webpage->ind_three_title) }}" autocomplete="ind_three_title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_three_title') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_three_title') }}</div>
                                                    </div>

                                                    <label for="ind_three_head" class="block text-sm font-medium text-gray-700 mt-3">Industry heading</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ind_three_head" id="ind_three_head" value="{{ old('ind_three_head', $webpage->ind_three_head) }}" autocomplete="ind_three_head" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('ind_three_head') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_three_head') }}</div>
                                                    </div>
                                                        
                                                    <label for="ind_three_desc" class="block text-sm font-medium text-gray-700 mt-3">Industry description</label>
                                                    <div class="mt-1">
                                                        <textarea id="ind_three_desc" name="ind_three_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('ind_three_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('ind_three_desc', $webpage->ind_three_desc) }}</textarea>
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('ind_three_desc') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <hr>

                                            <h5>Services</h5>
                                            <div>
                                                <label for="code_name" class="block text-sm font-medium text-gray-700">Section Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="services_header" id="services_header" value="{{ old('services_header', $webpage->services_header) }}" autocomplete="services_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('services_header') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('code_name') }}</div>
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
                                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('service_image['.($loop->parent->index).']') }}</div>
                                                                    @else
                                                                        <input type="text" name="service[{{$loop->parent->index * 2 + $index}}]" id="service[{{$loop->parent->index * 2 + $index}}]" value="{{ old('service['.($loop->parent->index * 2 + $index).']', $service) }}" autocomplete="service[{{$loop->parent->index * 2 + $index}}]" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('service['.($loop->parent->index * 2 + $index).']') border-red-500 @enderror" placeholder="{{ $index === 0 ? 'Service Title' : 'Service Description' }}">
                                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('service['.($loop->parent->index * 2 + $index).']') }}</div>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Button to add new Service pair -->
                                                <button type="button" onclick="addNewService()" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Add a Service</button>
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
                                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('faq['.($loop->parent->index * 2 + $index).']') }}</div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Button to add new FAQ pair -->
                                                <button type="button" onclick="addNewFAQ()" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Add an FAQ</button>
                                            </div>
                                        @endif
                                        
                                        @if ($webpage->id == 2)
                                            <div>
                                                <label for="about_page_header" class="block text-sm font-medium text-gray-700">Page Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="about_page_header" id="about_page_header" value="{{ old('about_page_header', $webpage->about_page_header) }}" autocomplete="about_page_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_page_header') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_page_header') }}</div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <label for="about_page_header_desc" class="block text-sm font-medium text-gray-700">Page Description</label>
                                                <div class="mt-1">
                                                    <textarea id="about_page_header_desc" name="about_page_header_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_page_header_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_page_header_desc', $webpage->about_page_header_desc) }}</textarea>
                                                    <div class="alert-about_page_header_desc text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_page_header_desc') }}</div>
                                                </div>
                                            </div>
                                            
                                            <hr>

                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="about_us_title1" class="block text-sm font-medium text-gray-700">Title #1</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="about_us_title1" id="about_us_title1" value="{{ old('about_us_title1', $webpage->about_us_title1) }}" autocomplete="about_us_title1" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_us_title1') border-red-500 @enderror" placeholder="Title">
                                                        <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_us_title1') }}</div>
                                                    </div>
                                                    
                                                    <div>
                                                        <label for="about_us_desc1" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <div class="mt-1">
                                                            <textarea id="about_us_desc1" name="about_us_desc1" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_us_desc1') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_us_desc1', $webpage->about_us_desc1) }}</textarea>
                                                            <div class="alert-about_us_desc1 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_us_desc1') }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="about_us_title2" class="block text-sm font-medium text-gray-700">Title #2</label>
                                                    <input type="text" name="about_us_title2" id="about_us_title2" value="{{ old('about_us_title2', $webpage->about_us_title2) }}" autocomplete="about_us_title2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_us_title2') border-red-500 @enderror" placeholder="Title">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_us_title2') }}</div>

                                                    <div>
                                                        <label for="about_us_desc2" class="block text-sm font-medium text-gray-700">Description</label>
                                                        <div class="mt-1">
                                                            <textarea id="about_us_desc2" name="about_us_desc2" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_us_desc2') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_us_desc2', $webpage->about_us_desc2) }}</textarea>
                                                            <div class="alert-about_us_desc2 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_us_desc2') }}</div>
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
                                                        <div class="alert-about_value_title1 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_value_title1') }}</div>
                                                    </div>
                                                    <div>
                                                        
                                                <label for="about_value_desc1" class="block text-sm font-medium text-gray-700 mt-3">Description</label>
                                                <div class="mt-1">
                                                        <textarea id="about_value_desc1" name="about_value_desc1" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_value_desc1') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_value_desc1', $webpage->about_value_desc1) }}</textarea>
                                                        <div class="alert-about_value_desc1 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_value_desc1') }}</div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="about_value_title2" class="block text-sm font-medium text-gray-700">About #2</label>
                                                    <input type="text" name="about_value_title2" id="about_value_title2" value="{{ old('about_value_title2', $webpage->about_value_title2) }}" autocomplete="about_value_title2" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_value_title2') border-red-500 @enderror" placeholder="Title">
                                                    <div class="alert-about_value_title2 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_value_title2') }}</div>
                                                    <div>
                                                        
                                                <label for="about_value_desc2" class="block text-sm font-medium text-gray-700 mt-3">Description</label>
                                                <div class="mt-1">
                                                        <textarea id="about_value_desc2" name="about_value_desc2" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_value_desc2') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_value_desc2', $webpage->about_value_desc2) }}</textarea>
                                                        <div class="alert-about_value_desc2 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_value_desc2') }}</div>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-12">
                                                    <label for="about_value_title3" class="block text-sm font-medium text-gray-700">About #3</label>
                                                    <input type="text" name="about_value_title3" id="about_value_title3" value="{{ old('about_value_title3', $webpage->about_value_title3) }}" autocomplete="about_value_title3" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_value_title3') border-red-500 @enderror" placeholder="Title">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_value_title3') }}</div>
                                                    <div>
                                                        
                                                <label for="about_value_desc3" class="block text-sm font-medium text-gray-700 mt-3">Description</label>
                                                <div class="mt-1">
                                                        <textarea id="about_value_desc3" name="about_value_desc3" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_value_desc3') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_value_desc3', $webpage->about_value_desc3) }}</textarea>
                                                        <div class="alert-about_value_desc3 text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_value_desc3') }}</div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div>
                                                <label for="about_mission_statement" class="block text-sm font-medium text-gray-700">Mission Statement Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="about_mission_statement" id="about_mission_statement" value="{{ old('about_mission_statement', $webpage->about_mission_statement) }}" autocomplete="about_mission_statement" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('about_mission_statement') border-red-500 @enderror" placeholder="Committed to helping our customers succeed.">
                                                    <div class="alert-about_mission_statement text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_mission_statement') }}</div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <label for="about_mission_desc" class="block text-sm font-medium text-gray-700">Mission Statement description</label>
                                                <div class="mt-1">
                                                    <textarea id="about_mission_desc" name="about_mission_desc" rows="3" class="shadow-sm focus:ring-red-600 focus:border-red-600 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about_mission_desc') border-red-500 @enderror" placeholder="Enter description here ...">{{ old('about_mission_desc', $webpage->about_mission_desc) }}</textarea>
                                                    <div class="alert-about_mission_desc text-sm text-red-600 text-danger mt-1">{{ $errors->first('about_mission_desc') }}</div>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($webpage->id == 3)
                                            <div>
                                                <label for="contact_page_header" class="block text-sm font-medium text-gray-700">Page Header</label>
                                                <div class="mt-1">
                                                    <input type="text" name="contact_page_header" id="contact_page_header" value="{{ old('contact_page_header', $webpage->contact_page_header) }}" autocomplete="contact_page_header" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_page_header') border-red-500 @enderror" placeholder="Committed to helping you meet all your Businessing needs.">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('contact_page_header') }}</div>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_office" class="block text-sm font-medium text-gray-700">Corporate Office</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="contact_office" id="contact_office" value="{{ old('contact_office', $webpage->contact_office) }}" autocomplete="contact_office" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_office') border-red-500 @enderror" placeholder="Afia Mall 4th Floor, Addis Ababa, Ethiopia.">
                                                        <div class="alert-contact_office text-sm text-red-600 text-danger mt-1">{{ $errors->first('contact_office') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_office_hours" class="block text-sm font-medium text-gray-700">Office Hours</label>
                                                    <input type="text" name="contact_office_hours" id="contact_office_hours" value="{{ old('contact_office_hours', $webpage->contact_office_hours) }}" autocomplete="contact_office_hours" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_office_hours') border-red-500 @enderror" placeholder="Mon - Fri: 9:00am to 5:00pm">
                                                    <div class="alert-contact_office_hours text-sm text-red-600 text-danger mt-1">{{ $errors->first('contact_office_hours') }}</div>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_front_desk_phone" class="block text-sm font-medium text-gray-700">Front Desk Phone</label>
                                                    <div class="mt-1">
                                                        <input type="text" name="contact_front_desk_phone" id="contact_front_desk_phone" value="{{ old('contact_front_desk_phone', $webpage->contact_front_desk_phone) }}" autocomplete="contact_front_desk_phone" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_front_desk_phone') border-red-500 @enderror" placeholder="+251-11-565-****">
                                                        <div class="alert-contact_front_desk_phone text-sm text-red-600 text-danger mt-1">{{ $errors->first('contact_front_desk_phone') }}</div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="contact_front_desk_email" class="block text-sm font-medium text-gray-700">Front Desk Email</label>
                                                    <input type="text" name="contact_front_desk_email" id="contact_front_desk_email" value="{{ old('contact_front_desk_email', $webpage->contact_front_desk_email) }}" autocomplete="contact_front_desk_email" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact_front_desk_email') border-red-500 @enderror" placeholder="contact@aingroup.ae">
                                                    <div class="alert-contact_front_desk_email text-sm text-red-600 text-danger mt-1">{{ $errors->first('contact_front_desk_email') }}</div>
                                                </div>
                                            </div>

                                            <hr>

                                            <h5>Offices</h5>
                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="site_area" class="block text-sm font-medium text-gray-700">Building</label>
                                                    <input type="text" name="site_area" id="site_area" value="{{ old('site_area.0', $webpage->site_area) }}" autocomplete="site_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('site_area.*') border-red-500 @enderror" placeholder="Name of building">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('site_area.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="floor_area" class="block text-sm font-medium text-gray-700">Address</label>
                                                    <input type="text" name="floor_area" id="floor_area" value="{{ old('floor_area', $webpage->floor_area) }}" autocomplete="floor_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('floor_area') border-red-500 @enderror" placeholder="Afia Mall 4th Floor, Addis Ababa, Ethiopia.">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('floor_area') }}</div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="architects[]" class="block text-sm font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="architects[]" id="architects[]" value="{{ old('architects.0', $webpage->architects[0] ?? '') }}" autocomplete="architects" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('architects.*') border-red-500 @enderror" placeholder="+251-90-777-88**">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('architects.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="client" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="text" name="client" id="client" value="{{ old('client', $webpage->client) }}" autocomplete="client" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="contact@aingroup.ae">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('client') }}</div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-gray-500" style="margin-top: .4rem !important;">
                                                First Office Ends Here
                                            </p>

                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="site_area" class="block text-sm font-medium text-gray-700">Building</label>
                                                    <input type="text" name="site_area" id="site_area" value="{{ old('site_area.0', $webpage->site_area) }}" autocomplete="site_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('site_area.*') border-red-500 @enderror" placeholder="Name of building">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('site_area.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="floor_area" class="block text-sm font-medium text-gray-700">Address</label>
                                                    <input type="text" name="floor_area" id="floor_area" value="{{ old('floor_area', $webpage->floor_area) }}" autocomplete="floor_area" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('floor_area') border-red-500 @enderror" placeholder="Afia Mall 4th Floor, Addis Ababa, Ethiopia">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('floor_area') }}</div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-6 gap-6" style="margin-top:10px;">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="architects[]" class="block text-sm font-medium text-gray-700">Phone</label>
                                                    <input type="text" name="architects[]" id="architects[]" value="{{ old('architects.0', $webpage->architects[0] ?? '') }}" autocomplete="architects" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('architects.*') border-red-500 @enderror" placeholder="+251-90-777-88**">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('architects.*') }}</div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="client" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="text" name="client" id="client" value="{{ old('client', $webpage->client) }}" autocomplete="client" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('client') border-red-500 @enderror" placeholder="contact@aingroup.ae">
                                                    <div class="alert-description text-sm text-red-600 text-danger mt-1">{{ $errors->first('client') }}</div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <input type="hidden" name="postedBy" id="postedBy" value="{{ Auth::user()->id }}">
                                    
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="transition duration-500 ease-in-out bg-red-600 border-transparent font-bold text-base align-middle normal-case rounded-md text-white hover:text-white hover:bg-purple-700 active:bg-purple-700 focus:border-purple-500 focus:ring focus:ring-purple-500 w-full h-12">
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