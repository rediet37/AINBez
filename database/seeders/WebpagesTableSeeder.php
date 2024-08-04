<?php

namespace Database\Seeders;

use App\Models\Webpage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebpagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $webpages = [
            [
                'id'                => 1,
                'title'             => 'Homepage',
                'color'             => '#000000',
                'slides'            => '["slide-v1-1.jpg", "slide-v1-2.jpg", "slide-v1-3.jpg"]',
                'features'          => '[
                                         ["Importing", "Products", "Take trivial example which of us ever all undertakes laborious.", "Cars", "Equal blame belongs to those who fail their duty through weakness.", "Services", "Duty or the obligations of business will frequently occur repudiated."], 
                                         ["Exporting", "Products", "Take trivial example which of us ever all undertakes laborious.", "Cars", "Equal blame belongs to those who fail their duty through weakness.", "Services", "Duty or the obligations of business will frequently occur repudiated."]
                                        ]',
                'industries'        => '[ "Industries We Are Operating In",
                                         ["Exporting", "Lorem ipsum dolor sit amet consectetur", "Repudiandae ducimus necessitatibus voluptate odit perspiciatis"], 
                                         ["Importing", "Lorem ipsum dolor sit amet consectetur", "Repudiandae ducimus necessitatibus voluptate odit perspiciatis"], 
                                         ["Forwarding", "Lorem ipsum dolor sit amet consectetur", "Repudiandae ducimus necessitatibus voluptate odit perspiciatis"]
                                        ]',
                'services'          => '[
                                         ["wealth-secure-1.jpg", "Product Sourcing", "Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Obcaecati temporibus praesentium."], 
                                         ["wealth-secure-2.jpg", "Deals Management", "Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Obcaecati temporibus praesentium."]
                                        ]',
                'faqs'              => '[
                                         ["FAQ1", "Adipisicing elit rerum quasi ipsam vitae nam, pariatur dicta libero? Nobis nulla alias ducimus nisi quidem deserunt similique praesentium."], 
                                         ["FAQ2", "Adipisicing elit rerum quasi ipsam vitae nam, pariatur dicta libero? Nobis nulla alias ducimus nisi quidem deserunt similique praesentium."]
                                        ]',
                'slide1_header'     => 'Welcome to AIN Business Group',
                'slide1_sub'        => 'Repudiandae ducimus dolor natus, nisi ad, ipsa similique Repudiandae perferendis deserunt saepe minima.',
                'slide2_header'     => 'Welcome to AIN Business Group',
                'slide2_sub'        => 'Repudiandae ducimus dolor natus, nisi ad, ipsa similique Repudiandae perferendis deserunt saepe minima.',
                'slide3_header'     => 'Welcome to AIN Business Group',
                'slide3_sub'        => 'Repudiandae ducimus dolor natus, nisi ad, ipsa similique Repudiandae perferendis deserunt saepe minima.',
                'about_page_header' => NULL,
            ],
            [
                'id'                => 2,
                'title'             => 'About Us',
                'color'             => '#000000',
                'slides'            => NULL,
                'features'          => NULL,
                'industries'        => NULL,
                'services'          => NULL,
                'faqs'              => NULL,
                'slide1_header'     => NULL,
                'slide1_sub'        => NULL,
                'slide2_header'     => NULL,
                'slide2_sub'        => NULL,
                'slide3_header'     => NULL,
                'slide3_sub'        => NULL,
                'about_page_header' => 'Known For Trust, Honesty & Customer Support',
            ],
            [
                'id'                => 3,
                'title'             => 'Contact Us',
                'color'             => '#000000',
                'slides'            => NULL,
                'features'          => NULL,
                'industries'        => NULL,
                'services'          => NULL,
                'faqs'              => NULL,
                'slide1_header'     => NULL,
                'slide1_sub'        => NULL,
                'slide2_header'     => NULL,
                'slide2_sub'        => NULL,
                'slide3_header'     => NULL,
                'slide3_sub'        => NULL,
                'about_page_header' => NULL,
            ],
        ];

        Webpage::insert($webpages);
    }
}
