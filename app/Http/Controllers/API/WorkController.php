<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang  =request()->header('locale' ,'en');
        if(!in_array($lang, ["en" ,"ar"])){
            $lang = "en";
        }
        $data = \App\Models\Work::select(['id' ,'name_'.$lang.' as name' ,'icon' ,'category_id'])->take(50)->get();
        foreach ($data as $d){
            $d->icon = $d->icon();
        }
        return $this->formResponse("Data is retrived", $data, 200);
    }
        public function single($id)
    {
        $lang  =request()->header('locale' ,'en');
          if(!in_array($lang, ["en" ,"ar"])){
            $lang = "en";
        }
        $data = \App\Models\Work::find($id);
   
       $data->icon = $data->icon();
       $data->name = $data['name_'.$lang];
       $data->description = $data['description_'.$lang];
       
       
       unset( $data->name_en);
       unset( $data->name_ar);
       unset( $data->description_en);
       unset( $data->description_ar);

       return $this->formResponse("Data is retrived", $data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PricingPackage  $pricingPackage
     * @return \Illuminate\Http\Response
     */
    public function show(PricingPackage $pricingPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PricingPackage  $pricingPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PricingPackage $pricingPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PricingPackage  $pricingPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricingPackage $pricingPackage)
    {
        // destroy -->   -->   -->   -->   -->
    }
}
