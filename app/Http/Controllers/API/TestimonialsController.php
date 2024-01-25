<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
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

       $list = [];
       $row = new \stdClass();


       $row->icon = "https://www.loveyournature.com/uploads/1/6/4/4/16443490/3972785_orig.jpg";
       $row->name  = "Julia Morphy";
       $row->rating = 4;
       $row->comment = "My experience was great , good service and brilliant software quality  , i highly recommend it to anyone who is interested in building "
               . "somthing beautiful";
       $list[]=$row;
       //--------------------
        $row = new \stdClass();
       $row->icon = "https://www.loveyournature.com/uploads/1/6/4/4/16443490/1645815_orig.jpg";
       $row->name  = "Mary Morphy";
              $row->rating = 4;
       $row->comment = "One of the best digital marketing companies in UAE";
       $list[]=$row;
       //--------------------
        $row = new \stdClass();
           $row->icon = "https://www.loveyournature.com/uploads/1/6/4/4/16443490/8356674_orig.jpg";
       $row->name  = "Christina Morphy";
              $row->rating = 5;
       $row->comment = "I highly recommend it to anyone who is interested in building "
               . "somthing beautiful";
       $list[]=$row;
       //--------------------
        $row = new \stdClass();
           $row->icon = "https://www.loveyournature.com/uploads/1/6/4/4/16443490/free-girl-brunette-on-forest-view-circle_orig.jpg";
       $row->name  = "Angelina Morphy";
           $row->rating = 4;
       $row->comment = "I am really stunned by the high performance of thier software products , and the accuarcy of delivery times";
       $list[]=$row;
       //--------------------
        $row = new \stdClass();
             $row->icon = "https://www.loveyournature.com/uploads/1/6/4/4/16443490/free-girl-asian-hat-in-meadow-circle_orig.jpg";
       $row->name  = "Sarah Morphy";
           $row->rating =5;
       $row->comment = "Good service and brilliant software quality  , i highly recommend it to anyone who is interested in building "
               . "somthing beautiful";
       $list[]=$row;
       //--------------------

        return $this->formResponse("Data is retrived",  $list, 200);
    }



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
        //
    }
}
