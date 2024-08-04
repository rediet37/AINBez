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
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col">

                <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-full">
                    <div class="md:flex">
                        <div class="">
                            <div class="bg-white shadow overflow-hidden sm:rounded-r-lg">
                                <div class="px-4 py-5 sm:px-6 bg-red-600 text-white">
                                    <h3 class="text-lg leading-6 font-medium">Webpage Information</h3>
                                    <p class="mt-1 max-w-2xl text-sm">Extended details and overview.</p>
                                </div>
                                <div class="md:flex-shrink-0 image-slider">
                                
                                    @php 
                                        $slider_images = $webpage->slides;
                                        $industries = $webpage->industries;
                                        $features = $webpage->features;
                                        $services = $webpage->services;
                                        $faqs = $webpage->faqs;
                                    @endphp
                                
                                    @if(is_array($slider_images) && !empty($slider_images))
                                        @foreach ($slider_images as $index => $image)
                                            <img class="h-full w-full object-cover" src="{{ asset('/images/slides/'.$image) }}" alt="Project Picture">
                                        @endforeach
                                    @endif
                                </div>
                                <div class="border-t border-gray-200">
                                    <dl>
                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Page Title</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">{{ $webpage->title ?? '' }}</dd>
                                        </div>
                                        @if (is_array($features) && !empty($features))
                                            <div class="bg-indigo-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Features Section</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">
                                                    @foreach ($features as $index => $feature)
                                                        {{ $feature[0] ?? '' }}<br>
                                                        {{ $feature[1] ?? '' }}<br>
                                                        {{ $feature[2] ?? '' }}<br><br>
                                                    @endforeach
                                                </dd>
                                            </div>
                                        @endif
                                        @if (is_array($industries) && !empty($industries))
                                            <div class="bg-red-100 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Industries Section</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6 break-all">
                                                        @foreach ($industries as $index => $industry)
                                                            {{ $industry[0] ?? '' }}<br>
                                                            {{ $industry[1] ?? '' }}<br>
                                                            {{ $industry[2] ?? '' }}<br><br>
                                                        @endforeach
                                                    </dd>
                                            </div>
                                        @endif
                                        @if (is_array($services) && !empty($services))
                                            <div class="bg-red-200 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Services Section</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6 break-all">
                                                    @foreach ($services as $index => $service)
                                                        {{ $service[0] ?? '' }}<br>
                                                        {{ $service[1] ?? '' }}<br><br>
                                                    @endforeach
                                                </dd>
                                            </div>
                                        @endif
                                        @if (is_array($faqs) && !empty($faqs))
                                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Faqs Section</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-6">
                                                    @foreach ($faqs as $index => $faq)
                                                        {{ $faq[0] ?? '' }}<br>
                                                        {{ $faq[1] ?? '' }}<br><br>
                                                    @endforeach
                                                </dd>
                                            </div>
                                        @endif
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>