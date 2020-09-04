<?php

namespace Modules\CommonModule\Helper;

use Modules\CommonModule\Entities\Language;

class LanguageHelper
{
    /**
     * Retrieve all active lang from db.
     * active lang has [1] property.
     *
     * @return void
     */
    public static function getLang()
    {
        $lang = Language::where('active', '=', 1)->get();

        return $lang;
    }

    public function getDynamicLangCode()
    {
        $lang = Language::where('active', '=', 1)->where('lang_type', 1)->get();
        $result = [];
        foreach ($lang as $item) {
            $result[] = $item->lang;
        }

        return $result;
    }

    function getLangLinkByCode($code)
    {
       return  Language::where('active', '=', 1)->where('lang', $code)->pluck('link')->first();
    }

    function getLangNameByCode($code)
    {
        return  Language::where('active', '=', 1)->where('lang', $code)->pluck('display_lang')->first();

    }



    /**
     * Retrieve all langs from DB.
     *
     * @return  [type]  [return description]
     */
    public static function getAllLangs()
    {
        $langs = Language::all();

        return $langs;
    }

    public static function activateLangs($ar_lang, $en_lang)
    {

        Language::where('lang', 'ar')->update(['active' => 1]);
        Language::where('lang', 'en')->update(['active' => $en_lang]);
    }


    /**
     * @return mixed
     *   lang type => 1 => dynamic data
     *   lang type => 2 => static data
     *
     */

    public static function getDynamicLang()
    {
        $langs = Language::where('lang_type', 1)->where('active', 1)->get();
        return $langs;
    }


    /**
     * @return mixed
     *   lang type => 1 => dynamic data
     *   lang type => 2 => static data
     *
     */

    public static function getStaticLang()
    {
        $langs = Language::where('lang_type', 2)->where('active', 1)->get();
        return $langs;
    }


}
