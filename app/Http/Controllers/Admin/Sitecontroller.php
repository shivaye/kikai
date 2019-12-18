<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City;

class Sitecontroller extends Controller
{
    public function getCities(Request $request){
    	
    	$cities = City::where('state_id',$request->state_id)->get();
    	
    	echo "<option>Select City</option>";
    	foreach($cities as $city){
    	echo "<option value='" . $city->id . "'>" . $city->city . "</option>";    		
    	}
    }
}
