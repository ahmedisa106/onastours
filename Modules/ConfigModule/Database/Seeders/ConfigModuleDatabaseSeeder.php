<?php

namespace Modules\ConfigModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\ConfigModule\Entities\Config;
use Modules\ConfigModule\Entities\ConfigCategory;
use Modules\WidgetsModule\Entities\WorkHours;

class ConfigModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = Config::class;
        $config_categ = ConfigCategory::class;

        $config_categ::insert([
            'title' => 'General'
        ]);
        $config_categ::insert([
            'title' => 'Seo'
        ]);
        $config_categ::insert([
            'title' => 'Contact'
        ]);
        $config_categ::insert([
            'title' => 'Additional'
        ]);
      


        //////////////////////////////////////////////////////////////////////////////////////
        ///  General  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'title',
            'ar' => [
                'display_name' => 'اسم الموقع',
                'value' => 'جورنت',
            ],
            'en' => [
                'display_name' => 'website name',
                'value' => 'jorent',
            ],
            'type' => 1,
            'category_id' => 1
        ]);

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'about',
            'ar' => [
                'display_name' => 'وصف الموقع',
                'value' => 'وصف الموقع',
            ],
            'en' => [
                'display_name' => 'website description',
                'value' => 'website description',
            ],
            'type' => 3,
            'category_id' => 1
        ]);

       

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'about_index',
            'ar' => [
                'display_name' => 'وصف مختصر للموقع',
                'value' => 'وصف مختصر للموقع',
            ],
            'en' => [
                'display_name' => 'short description',
                'value' => 'short description',
            ],
            'type' => 3,
            'category_id' => 1
        ]);


        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'about_index',
            'ar' => [
                'display_name' => '  العنوان',
                'value' => 'العنوان  ',
            ],
            'en' => [
                'display_name' => 'address',
                'value' => 'address',
            ],
            'type' => 3,
            'category_id' => 1
        ]);

        //////////////////////////////////////////////////////////////////////////////////////
        ///  SEO  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 0,
            'var' => 'meta_title',
            'ar' => [
                'display_name' => 'اسم الميتا',
                'value' => 'اسم الميتا',
            ],
            'en' => [
                'display_name' => 'meta_title',
                'value' => 'meta_title',
            ],
            'type' => 1,
            'category_id' => 2
        ]);
        $config::create([
            'is_static' => 0,
            'var' => 'meta_desc',
            'ar' => [
                'display_name' => 'وصف الميتا',
                'value' => 'وصف الميتا',
            ],
            'en' => [
                'display_name' => 'meta_desc',
                'value' => 'meta_desc',
            ],
            'type' => 3,
            'category_id' => 2
        ]);
        $config::create([
            'is_static' => 0,
            'var' => 'meta_keywords',
            'ar' => [
                'display_name' => 'كلمات الميتا',
                'value' => 'كلمات الميتا',
            ],
            'en' => [
                'display_name' => 'meta_keywords',
                'value' => 'meta_keywords',
            ],
            'type' => 3,
            'category_id' => 2
        ]);
 

        $config::create([
            'is_static' => 1,
            'static_value' => 'meta_Tag_Manager',
            'ar' => [
                'display_name' => ' تاج مانيجر',
                
            ],
            'en' => [
                'display_name' => 'meta_Tag_Manager',
            ],
            'var' => 'meta_Tag_Manager',
            'type' => 3,
            'category_id' => 2
        ]);

        $config::create([
            'is_static' => 1,
            'static_value' => 'meta_Google_Analyist',
            'ar' => [
                'display_name' => ' جوجل اناليست ',
                
            ],
            'en' => [
                'display_name' => 'Google_Analyist',
            ],
            'var' => 'meta_Google_Analyist',
            'type' => 3,
            'category_id' => 2
        ]);

        
        //////////////////////////////////////////////////////////////////////////////////////
        ///  Contact  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 1,
            'static_value' => '0123456789',
            'ar' => [
                'display_name' => 'رقم الهاتف',
                'value' => 'dsadas',
            ],
            'en' => [
                'display_name' => 'phone',
            ],
            'var' => 'phone',
            'type' => 1,
            'category_id' => 3
        ]);
        $config::create([
            'var' => 'email',
            'is_static' => 1,
            'static_value' => '0123456789',
            'ar' => [
                'display_name' => 'البريد الالكتروني',
            ],
            'en' => [
                'display_name' => 'email',
            ],
            'type' => 1,
            'category_id' => 3
        ]);
        $config::create([
            'var' => 'tw_link',
            'is_static' => 1,
            'static_value' => 'tw_link',
            'ar' => [
                'display_name' => 'تويتر',
            ],
            'en' => [
                'display_name' => 'twitter',
            ],
            'type' => 1,
            'category_id' => 3
        ]);
        $config::create([
            'var' => 'fb_link',
            'is_static' => 1,
            'static_value' => 'fb_link',
            'ar' => [
                'display_name' => 'فيس بوك',
            ],
            'en' => [
                'display_name' => 'facebook',
            ],
            'type' => 1,
            'category_id' => 3
        ]);

        $config::create([
                        'var' => 'youtube',
                        'is_static' => 1,
                        'static_value' => 'youtube',
                        'ar' => [
                            'display_name' => 'اليوتيوب',
                        ],
                        'en' => [
                            'display_name' => 'youtube',
                        ],
                        'type' => 1,
                        'category_id' => 3
                    ]);
        $config::create([
                        'var' => 'instgram',
                        'is_static' => 1,
                        'static_value' => 'instgram',
                        'ar' => [
                            'display_name' => 'انستجرام',
                        ],
                        'en' => [
                            'display_name' => 'Instgram',
                        ],
                        'type' => 1,
                        'category_id' => 3
        ]);
         $config::create([
                        'var' => 'telegram',
                        'is_static' => 1,
                        'static_value' => 'telegram',
                        'ar' => [
                            'display_name' => 'تليجرام',
                        ],
                        'en' => [
                            'display_name' => 'telegram',
                        ],
                        'type' => 1,
                        'category_id' => 3
         ]);





        //////////////////////////////////////////////////////////////////////////////////////
        ///  Additional  ///////////////////////////////////////////////////////////////////////
        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'vision',
            'ar' => [
                'display_name' => ' وصف الفيجن',
                'value' => 'وصف vision',
            ],
            'en' => [
                'display_name' => 'vision description',
                'value' => 'vision description',
            ],
            'type' => 3,
            'category_id' => 4
        ]);

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'mission',
            'ar' => [
                'display_name' => 'وصف الميشن',
                'value' => 'وصف الميشن',
            ],
            'en' => [
                'display_name' => 'mission description',
                'value' => 'mission description',
            ],
            'type' => 3,
            'category_id' => 4
        ]);

        $config::create([
            'is_static' => 0,
            'static_value' => '',
            'var' => 'tour_description',
            'ar' => [
                'display_name' => 'وصف الرحلات',
                'value' => 'وصف الرحلات',
            ],
            'en' => [
                'display_name' => 'tour description',
                'value' => 'tour description',
            ],
            'type' => 3,
            'category_id' => 4
        ]);

     

      
           

            $config::create([
                'is_static' => 0,
                'static_value' => '',
                'var' => 'destination_description',
    
               
                'ar'  => [
                    'display_name' => 'وصف destination',
                    'value' => 'وصف destination',
                ],
                'en'  => [
                    'display_name' => 'destination description',
                    'value' => 'destination description',
                ],
            
                'type' => 3,
                'category_id' => 4
            ]);
        


    }
}
