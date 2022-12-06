<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
            return view('homepage');
    }

    public function searchCountries(Request $request)
    {
        
        $countries = $this->manticoreSearch($request->country);

        if (count($countries) == 0) {
            $countries = 'no matches found';
        }

        return json_encode($countries);
    }


    public function manticoreSearch($request)
    {
        $countries = [];

        $countries = DB::connection('manticore')
            ->select("select id, name from countriesIndex where match('@(name) ^{$request}*') limit 10 OPTION ranker=sph04;");

        return $countries;
    }
}
