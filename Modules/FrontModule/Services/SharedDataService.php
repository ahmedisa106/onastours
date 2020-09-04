<?php
/**
 * Created by PhpStorm.
 * User: mallahsoft
 * Date: 19/06/20
 * Time: 08:07 م
 */

namespace Modules\FrontModule\Services;


use Modules\CommonModule\Helper\LanguageHelper;
use Modules\ConfigModule\Entities\Config;
use Modules\ProductModule\Entities\ProductCategory;
use Modules\TripModule\Entities\TripCategory;
use Modules\WidgetsModule\Entities\Page;

class SharedDataService
{


    public static function getAllCategory()
    {

        $parents = TripCategory::with(['child', 'translations', 'child.translations'])->where('parent_id', null)->get();
        return $parents;
    }

    public static function getConfig()
    {
        $configArr = [];

        $all = Config::all();
        foreach ($all as $item) {
            if ($item->is_static == 1) {
                $configArr[$item->var] = $item->static_value;
            } else {
                $configArr[$item->var] = $item->value;
            }
        }
        return $configArr;
    }

    public static function getLanguages()
    {

        $languages = \LanguageHelper::getLang();

        return $languages;
    }


    public static function getAllPages()
    {
        $pages = Page::all();
        return $pages;
    }
}