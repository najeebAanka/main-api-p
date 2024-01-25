<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use Illuminate\Http\Request;

class ServicesController extends Controller
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
        $data = \App\Models\Service::select(['id' ,'name_'.$lang.' as name','description_'.$lang.' as description' ,'icon'])->take(50)->get();
        foreach ($data as $d){
            $d->icon = $d->icon();
              $d->category =  $lang == "en"  ? "General" : "غير محدد";
        }
        return $this->formResponse("Data is retrived", $data, 200);
    }
  

    
       public function single($id)
    {
        //
           $lang  =request()->header('locale' ,'en');
          if(!in_array($lang, ["en" ,"ar"])){
            $lang = "en";
        }
        $data = \App\Models\Service::find($id);
   
       $data->icon = $data->icon();
       $data->name = $data['name_'.$lang];
       $data->long_description = $data['long_description_'.$lang];
       $data->category =  $lang == "en"  ? "<script>alert('hacked ya Amr  ? ')</script>" : "غير محدد";
       $data->related_services =  \App\Models\Service::select(['id' ,'name_'.$lang.' as name','description_'.$lang.' as description' ,'icon'])->take(4)->get();
      
           foreach ($data->related_services as $d){
            $d->icon = $d->icon();
          }
       
       $data->related_work = \App\Models\Work::select(['id' ,'name_'.$lang.' as name' ,'icon' ,'category_id'])->take(8)->get();
        foreach (   $data->related_work as $d){
            $d->icon = $d->icon();
        }
              
       
       unset( $data->name_en);
       unset( $data->name_ar);
       unset( $data->description_en);
       unset( $data->description_ar);
       unset( $data->long_description_en);
       unset( $data->long_description_ar);

       return $this->formResponse("Data is retrived", $data, 200);
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
