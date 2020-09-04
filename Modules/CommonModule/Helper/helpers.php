<?php
/**
 * Created by PhpStorm.
 * User: aabed
 * Date: 3/20/19
 * Time: 02:36 PM
 */

use Modules\BlogModule\Repository\BlogCategoryRepository;
use Modules\BlogModule\Repository\BlogRepository;
use Modules\FrontModule\Repository\ConfigRepository;
use Modules\TripModule\Repository\DestinationRepository;
use Modules\TripModule\Repository\TripCategoryRepository;

if (!function_exists('ValueOf')) {

    function ValueOf($object, $lang, $variable)
    {
        if (isset($object->translate('' . $lang->lang)->$variable)) {
            $newVar = $object->translate('' . $lang->lang)->$variable;
        } else {
            $newVar = "";
        }
        return $newVar;
    }
}

if (!function_exists('getName')) {

    function getName($number)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        for ($i = 0; $i < $number; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;

    }

}

if (!function_exists('assets')) {

    function assets($url)
    {
        return asset('public/assets/front/' . $url);
    }
}

if (!function_exists('adminurl')) {

    function adminurl($url)
    {
        return asset('public/assets/admin/' . $url);
    }
}

if (!function_exists('categories')) {

    function categories()
    {
        $categRepo = new TripCategoryRepository();

        return $categRepo->findAll();

    }
}

if (!function_exists('destinations')) {

    function destinations()
    {
        $destinationRepo = new DestinationRepository();
        return $destinationRepo->findAll();

    }
}

if (!function_exists('cat_blogs')) {

    function cat_blogs()
    {
        $blogRepo = new BlogCategoryRepository;

        return $blogRepo->findAll();
    }
}

if (!function_exists('latestBlogs')) {

    function latestBlogs()
    {
        $blogRepo = new BlogRepository;

        return $blogRepo->findLastByLimit(3);
    }
}

if (!function_exists('about')) {

    function about()
    {
        $configRepo = new ConfigRepository;

        return $configRepo->get('var', 'about')->value;
    }
}

if (!function_exists('active')) {

    function active($key)
    {

        if (\Request::segment(2) == $key) {
            return 'active';
        }

    }


    if (!function_exists('yajra_lang')) {
        function yajra_lang()
        {
            $yajra_trans = [
                "sProcessing" => __('commonmodule::main.download'),
                "sLengthMenu" => __('commonmodule::main.show') . " _MENU_" . __('commonmodule::main.records'),
                "sZeroRecords" => __('commonmodule::main.zero_record'),
                "sEmptyTable" => __('commonmodule::main.none_record_table'),
                "sInfo" => __('commonmodule::main.showing') . " " . __('commonmodule::main.records') . __('commonmodule::main.ofthe') . " _START_ " . __('commonmodule::main.of') . " _END_ " . __('commonmodule::main.ofatotalof') . " _TOTAL_ " . __('commonmodule::main.records'),
                "sInfoEmpty" => __('commonmodule::main.zero_records'),
                "sInfoFiltered" => "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix" => "",
                "sSearch" => __('commonmodule::main.search'),
                "sUrl" => "",
                "sInfoThousands" => ",",
                "sLoadingRecords" => "Cargando...",
                "oPaginate" => [
                    "sFirst" => __('commonmodule::main.first'),
                    "sLast" => __('commonmodule::main.last'),
                    "sNext" => __('commonmodule::main.next'),
                    "sPrevious" => __('commonmodule::main.previous'),
                ],
                "oAria" => [
                    "sSortAscending" => "=> Activar para ordenar la columna de manera ascendente",
                    "sSortDescending" => "=> Activar para ordenar la columna de manera descendente",
                ],
            ];
            return json_encode($yajra_trans, JSON_UNESCAPED_UNICODE);
        }
    }
}

