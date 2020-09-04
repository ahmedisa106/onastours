<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\BookingModule\Entities\Booking;
use Modules\FrontModule\Emails\sendEmail;
use Modules\TripModule\Entities\Trip;
use Modules\WidgetsModule\Entities\Page;
use Modules\WidgetsModule\Repository\SliderRepository;
use Modules\TripModule\Repository\DestinationRepository;
use Modules\TripModule\Repository\TripRepository;
use Modules\TripModule\Repository\TripCategoryRepository;
use Modules\ConfigModule\Repository\ConfigRepository;
use Modules\WidgetsModule\Repository\TestimonialRepository;
use Modules\WidgetsModule\Repository\TeamRepository;
use Illuminate\Support\Facades\View;


class FrontModuleController extends Controller
{

    private $sliderRepo;
    private $destinationRepo;
    private $tripRepo;
    private $configRepository;
    private $monialRepo;
    private $teamRepo;
    private $categRepo;

    public function __construct(SliderRepository $sliderRepo, DestinationRepository $destinationRepo
        , TripRepository $tripRepo, ConfigRepository $configRepository,
                                TestimonialRepository $monialRepo, TeamRepository $teamRepo, TripCategoryRepository $categRepo)
    {
        $this->sliderRepo = $sliderRepo;
        $this->destinationRepo = $destinationRepo;
        $this->tripRepo = $tripRepo;
        $this->configRepository = $configRepository;
        $this->monialRepo = $monialRepo;
        $this->teamRepo = $teamRepo;
        $this->categRepo = $categRepo;

//        $config = $configRepository->findAll();
//        $tripcategs = $this->categRepo->findAllParent();
//
//
//        $configmail = $configRepository->get('var', 'email');
//        $configphone = $configRepository->get('var', 'phone');
//        $configyoutube = $configRepository->get('var', 'youtube');
//        $configinstgram = $configRepository->get('var', 'instgram');
//        $configtwitter = $configRepository->get('var', 'tw_link');
//        $configfacebook = $configRepository->get('var', 'fb_link');
//
//
//        View::share([
//            'config' => $config,
//            'configfacebook' => $configfacebook->static_value,
//            'configtwitter' => $configtwitter->static_value,
//            'configinstgram' => $configinstgram->static_value,
//            'configyoutube' => $configyoutube->static_value,
//            'configphone' => $configphone->static_value,
//            'configmail' => $configmail->static_value,
//            'tripcategs' => $tripcategs,
//        ]);

    }

    public function index()
    {
        $sliders = $this->sliderRepo->findAll();
        $destinations = $this->destinationRepo->findLastByLimit(4);
        $trips = $this->tripRepo->findLastByLimit(4);

        return view('frontmodule::index', compact('sliders', 'destinations', 'trips'));
    }


    public function about()
    {
        $monials = $this->monialRepo->findAll();
        $teams = $this->teamRepo->findAll();

        return view('frontmodule::pages.about', compact('monials', 'teams'));
    }


    public function tours()
    {
        $trips = $this->tripRepo->findAll();
        return view('frontmodule::pages.tours', compact('trips'));

    }


    public function destinations()
    {

        $destinations = $this->destinationRepo->findAll();

        return view('frontmodule::pages.destinations', compact('destinations'));

    }


    public function contact()
    {
        return view('frontmodule::pages.contact');

    }


    public function booking()
    {
        return view('frontmodule::pages.booking');
    }

    public function booking_now($id)
    {

        $tour = Trip::find($id);

        return view('frontmodule::pages.booking_now', compact('tour'));

    }

    public function book(Request $request)
    {



        if ($request->captcha === $request->valid_captcha) {




            $dep_date = str_replace(' / ', '/', $request->departure_date);
            $arr_date = str_replace(' / ', '/', $request->arrival_date);


            $data = $request->except(['_token', 'captcha', 'valid_captcha']);
            $data['departure_date'] = $dep_date;
            $data['arrival_date'] = $arr_date;


            Booking::create($data);

            $EmailData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'departure_date' => $data['departure_date'],
                'arrival_date' => $data['arrival_date'],
                'adults_number' => $data['adult_number'],
                'kids_number' => $data['kids_number'],
                'abbreviation' => $data['abbr'],
                'mobile'=>$data['mobile'],
                'notes'=>$data['note'],


            ];

            Mail::to('info@onastours.com')->send(new sendEmail($EmailData));


            return redirect()->route('front.index');


        } else {
            return redirect()->back();
        }

    }


    public function tourItem($slug)
    {
        $tour = $this->tripRepo->findSlug($slug);

        $trips = $this->tripRepo->findAll();

        return view('frontmodule::pages.tour_item', compact('tour', 'trips'));

    }

    public function categoryTours($slug)
    {
        $categoryTours = $this->categRepo->findSlug($slug);

        $trips = $this->tripRepo->findAll();

        return view('frontmodule::pages.categorytours', compact('categoryTours', 'trips'));

    }

    public function destinationItem($slug)
    {
        $destination = $this->destinationRepo->findSlug($slug);

        return view('frontmodule::pages.destination_item', compact('destination'));

    }

    public function getPage($id)
    {
        $page = Page::find($id);
        return view('frontmodule::pages.page', compact('page'));

    }
}
