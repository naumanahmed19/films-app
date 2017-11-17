<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFilmRequest;
use App\Notifications\ApartmentPosted;
use Illuminate\Support\Facades\Notification;
use App\Film;
use Psy\Util\Json;

class ApiFilmController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        $films = Film::latest()->paginate(1);
        $films->map(function ($film) {
            if ($image = $film->getFirstMediaUrl('featured', 'thumb')) {
                $film['thumb'] = url($image);
                return $film;
            }
        });
        return $films;
    }

}
