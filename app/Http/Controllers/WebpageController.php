<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebpageRequest;
use App\Http\Requests\UpdateWebpageRequest;
use App\Traits\StoreHeroImageTrait;
use App\Models\Webpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class WebpageController extends Controller
{

    use StoreHeroImageTrait;
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // abort_if(Gate::denies('webpages_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $webpages = Webpage::latest()->get();
        $pageData = array (
            'pageTitle' => 'AIN — Webpages'
        );

        return view('backend.webpages.indexPage', compact('webpages', 'pageData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $webpage_id = 1;
        $uploaded_images = $this->verifyAndStoreHeroImage($request, 'slides', $webpage_id);

        return $uploaded_images;

        
    }

    /**
     * Display the specified resource.
     */
    public function show($webpage_id)
    {
        // abort_if(Gate::denies('webpages_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $webpage = Webpage::FindOrFail($webpage_id);
        $pageData = array (
            'pageTitle' => 'Webpage'
        );

        return view('backend.webpages.viewPage', compact('webpage', 'pageData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($webpage_id)
    {
        // abort_if(Gate::denies('webpages_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $webpage = Webpage::FindOrFail($webpage_id);
        if ($webpage_id == 1) {
            $webpage->ind_section_header = $webpage->industries[0] ?? '';
            $webpage->ind_one_title = $webpage->industries[1][0] ?? '';
            $webpage->ind_one_head = $webpage->industries[1][1] ?? '';
            $webpage->ind_one_desc = $webpage->industries[1][2] ?? '';
            $webpage->ind_two_title = $webpage->industries[2][0] ?? '';
            $webpage->ind_two_head = $webpage->industries[2][1] ?? '';
            $webpage->ind_two_desc = $webpage->industries[2][2] ?? '';
            $webpage->ind_three_title = $webpage->industries[3][0] ?? '';
            $webpage->ind_three_head = $webpage->industries[3][1] ?? '';
            $webpage->ind_three_desc = $webpage->industries[3][2] ?? '';
            $webpage->faq = json_encode($webpage->faqs);
        }
        return view('backend.webpages.editPage', compact('webpage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebpageRequest $request, $webpage_id)
    {
        $webpage = Webpage::FindOrFail($webpage_id);

        if ($request->validated()){
            if ($webpage_id == 1) {

                $uploaded_images = $this->verifyAndStoreHeroImage($request);
                

                $webpage->update([
                    'color' => $request->color,
                    'color2' => $request->color2,

                    /* WHAT WE ADDED START */
                    'slide1_header' => $request->hero_slide1_title,
                    'slide1_sub' => $request->hero_slide1_text,
                    'slide2_header' => $request->hero_slide2_title,
                    'slide2_sub' => $request->hero_slide2_text,
                    'slide3_header' => $request->hero_slide3_title,
                    'slide3_sub' => $request->hero_slide3_text,
                    'download_btn_ref' => $request->download_btn_ref,
                    'enquiry_btn_ref' => $request->enquiry_btn_ref,
                    'discover_btn_ref' => $request->discover_btn_ref, 
                    'slides' => $uploaded_images,


                    /* WHAT WE ADDED END */

                    'industries' => [
                        $request->ind_section_header,
                        [
                            $request->ind_one_title,
                            $request->ind_one_head,
                            $request->ind_one_desc
                        ],
                        [
                            $request->ind_two_title,
                            $request->ind_two_head,
                            $request->ind_two_desc
                        ],
                        [
                            $request->ind_three_title,
                            $request->ind_three_head,
                            $request->ind_three_desc
                        ],
                    ],
                    'services_header' => $request->services_header,
                ]);

                $faqsArray = [];
                $pairIndex = 0;
                collect($request->faq)->chunk(2)->each(function ($chunk) use ($webpage, &$faqsArray, &$pairIndex) {
                    $faqPair = [];

                    foreach ($chunk as $faqData) {
                        $faqPair[] = $faqData;
                    }

                    $faqsArray[$pairIndex++] = $faqPair;

                    $webpage->update([
                        'faqs' => $faqsArray
                    ]);
                });

                $servicesArray = [];
                $pairIndex = 0;
                collect($request->service)->chunk(2)->each(function ($chunk) use ($webpage, &$servicesArray, &$pairIndex) {
                    $servicePair = [];

                    $index = 0;
                    foreach ($chunk as $serviceData) {
                        if ($index == 0 || ($index % 3 == 0 && $index != 0)) { // Add 'img' before the first entry and every third entry afterward
                            $servicePair[] = 'img';
                        }
                        $servicePair[] = $serviceData;
                        $index++;
                    }

                    $servicesArray[$pairIndex++] = $servicePair;

                    $webpage->update([
                        'services' => $servicesArray
                    ]);
                });
            } else if ($webpage_id == 2) {
                // dd($request);
                $webpage->update([
                    'about_page_header' => $request->about_page_header,
                    'about_page_header_desc' => $request->about_page_header_desc,
                    'about_us_title1' => $request->about_us_title1,
                    'about_us_desc1' => $request->about_us_desc1,
                    'about_us_title2' => $request->about_us_title2,
                    'about_us_desc2' => $request->about_us_desc2,
                    'about_value_title1' => $request->about_value_title1,
                    'about_value_desc1' => $request->about_value_desc1,
                    'about_value_title2' => $request->about_value_title2,
                    'about_value_desc2' => $request->about_value_desc2,
                    'about_value_title3' => $request->about_value_title3,
                    'about_value_desc3' => $request->about_value_desc3,
                    'about_mission_statement' => $request->about_mission_statement,
                    'about_mission_desc' => $request->about_mission_desc,   
                ]);
            } else if ($webpage_id == 3) {
                $webpage->update([
                    'contact_page_header' => $request->contact_page_header,
                    'contact_office' => $request->contact_office,
                    'contact_office_hours' => $request->contact_office_hours,
                    'contact_front_desk_phone' => $request->contact_front_desk_phone,
                    'contact_front_desk_email' => $request->contact_front_desk_email,    
                ]);
            }
        
            return redirect()->route('post_webpages.index')->with('update_success', $webpage->title .' updated successfully!');
        }
        else {
            return redirect()->route('post_webpages.index')->with('update_failed', $webpage->title .' updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Webpage $webpage)
    {
        //
    }
}
