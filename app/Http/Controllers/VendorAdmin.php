<?php

namespace App\Http\Controllers;

use App\Admin;
use App\ChangeLog;
use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\vendors;
use App\Models\packages;
use App\Models\vendor_image;
use App\Models\vendor_features;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use View;
use File;

class VendorAdmin extends Controller
{


    public function index()
    {
        //echo "do";
        //$datas = vendors::with('packages')->get();
        $datas = catagory::where('is_service',1)->get();
        //dd($datas);


        //badge
        $badges = array();
        $i = 0;
        foreach($datas as $data){
            $badges[$i] = vendors::where('catagory_id',$data->id)->count();
            $i++;
        }

        //return $badges;

        return view('admin.vendor_categories', compact('datas','badges'));
    }
    public function index_as_category($id)
    {
        //echo "ok";
        //exit;
        $datas = vendors::where('catagory_id',$id)
            ->with('packages')->get();


        //dd($datas);
        return view('admin.vendors', compact('datas'));
    }


    public function getPath()
    {
        $pattern = "/.com/";
        $server_name = $_SERVER['SERVER_NAME'];
        //echo "Server Name:".$server_name;

        $path = public_path();

        if (preg_match($pattern, $server_name)) {

            $path = str_replace("ayojok_base/public", "public_html", $path);
        }
        //echo "<br> $path";
        return $path;
    }


    public function create()
    {
        $catagories = catagory::where('is_service', 1)->where('status', 1)->get();
        return view('admin.add-vendor', compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $add = new vendors;
        $add->catagory_id = $request->vendor_catagory;
        $add->title = $request->vendor_title;
        $add->about_us = $request->about_us;
        $add->contact = $request->vendor_contact;
        $add->startingat_1_title = $request->startingat_1_title;
        $add->startingat_1_price = $request->startingat_1_price;
        $add->startingat_2_title = $request->startingat_2_title;;
        $add->startingat_2_price = $request->startingat_2_price;
        $add->startingat_3_title = $request->startingat_3_title;;
        $add->startingat_3_price = $request->startingat_3_price;
        $add->save();

        $catagorydata = catagory::find($request->vendor_catagory);
        $model = '\App\Models\\' . $catagorydata->feature_table;

        $datas = new $model;

        $datas->vendor_id = $add->id;
        $datas->feature_1 = $request->feature1;
        $datas->feature_2 = $request->feature2;
        $datas->feature_3 = $request->feature3;
        $datas->feature_4 = $request->feature4;


        /*Edit for Bridal Outfit & Jewellery*/
        if (isset($request->feature5)) {
            $datas->feature_5 = $request->feature5;
        }
        if (isset($request->feature6)) {
            $datas->feature_6 = $request->feature6;
        }
        if (isset($request->feature7)) {
            $datas->feature_7 = $request->feature7;
        }
        if (isset($request->feature8)) {
            $datas->feature_8 = $request->feature8;
        }

        /*Types*/

        if (isset($request->lowest_price)) {
            $datas->low_price = $request->lowest_price;
        }
        /**type_1 is an array of jewellery type*/
        if (isset($request->type_1)) {
            $type_1 = implode(',', $request->type_1);
            $datas->type_1 = $type_1;
        }
        if (isset($request->type_2)) {
            $datas->type_2 = $request->type_2;
        }
        if (isset($request->type_3)) {
            $datas->type_3 = $request->type_3;
        }
        if (isset($request->type_4)) {
            $datas->type_4 = $request->type_4;
        }
        if (isset($request->type_5)) {
            $datas->type_5 = $request->type_5;
        }

        /*End of Bridal Outfit & Jewellery*/


        /*Edit for kazi & Mehdi*/
        /*if (isset($request->feature5)) {
            $datas->feature_5 = $request->feature5;
        }
        if (isset($request->feature6)) {
            $datas->feature_6 = $request->feature6;
        }
        if (isset($request->feature7)) {
            $datas->feature_7 = $request->feature7;
        }
        if (isset($request->feature8)) {
            $datas->feature_8 = $request->feature8;
        }
        if (isset($request->lowest_price)) {
            $datas->low_price = $request->lowest_price;
        }*/

        /*End of Edit for kazi & Mehdi*/


        if (isset($request->venue_area)) {
            $datas->area = $request->venue_area;
        }
        if (isset($request->kazi_area)) {
            $datas->area = $request->kazi_area;
        }
        if (isset($request->menu_type)) {
            $menu = implode(',', $request->menu_type);
            $datas->menu_type = $menu;
        }
        if (isset($request->event_type)) {
            $event = implode(',', $request->event_type);
            $datas->event_type = $event;
        }
        if (isset($request->speciality)) {
            $special = implode(',', $request->speciality);
            $datas->speciality_type = $special;
        }
        if (isset($request->bakery_speciality)) {
            $special = implode(',', $request->bakery_speciality);
            //dd($special);
            $datas->speciality_type = $special;
        }
        $datas->save();


        /** Update Profile Image **/
        if ($request->hasFile('profile_image')) {
            $path = $this->getPath();
            $destinationPath = $path . '/img/vendor-profile/';

            $image = $request->file('profile_image');
            $input['imagename'] = $add->id . '.' . $image->getClientOriginalExtension();


            if ($image->move($destinationPath, $input['imagename'])) {
                $fileurl = 'img\vendor-profile\\' . $input['imagename'];
                vendors::where('id', $add->id)->update(['profile_img' => $fileurl]);
            } else {
                echo "Error";
            }
        }

        /** Update logo **/
        if ($request->hasFile('logo_image')) {
            $path = $this->getPath();
            $destinationPath = $path . '/img/vendor-logo/';

            $image = $request->file('logo_image');
            $input['imagename'] = $add->id . '.' . $image->getClientOriginalExtension();

            if ($image->move($destinationPath, $input['imagename'])) {
                $fileurl = 'img\vendor-logo\\' . $input['imagename'];
                vendors::where('id', $add->id)->update(['logo' => $fileurl]);
            } else {
                echo "Error";
            }
        }

        /** featuer Image Upload **/
        if ($request->hasFile('feature_image')) {
            $i = 0;
            $path = $this->getPath();
            $destinationPath = $path . '/img/feature-image/';

            foreach ($request->feature_image as $feature) {
                $i++;
                $input['imagename'] = $add->id . '_f' . $i . '.' . $feature->getClientOriginalExtension();
                $column = 'feature_image_' . $i;

                $feature->move($destinationPath, $input['imagename']);

                $fileurl = 'img\feature-image\\' . $input['imagename'];
                vendors::where('id', $add->id)->update([$column => $fileurl]);
            }
        }


        /**Change Logs- Start*/
        $message = "Add a new Vendor ( $add->title -> $catagorydata->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor",null,"vendors",$add->id,$message,"add",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/


        return redirect()->back();
    }


    public function show($id, Request $r)
    {
        //dd($r->all(),$id);
        $table = catagory::find($r->catagoryid);
        $ftable = $table->feature_table;
        $model = '\App\Models\\' . $ftable;
        //dd($model);
        $datas = new $model;
        $datas = $datas->where('vendor_id', $id)->firstOrFail();
        $vendors = vendors::where('id', $id)->with('catagory')->with('packages')->with('images')->get();
        $features = vendor_features::where('catagory_id', $r->catagoryid)->firstOrFail();
        //dd($datas,$vendors,$features);
        return view('admin.vendors-single', compact('datas', 'vendors', 'features'));
    }


    public function edit($id)
    {
        $vendata = vendors::where('id', $id)->with('catagory')->firstOrFail();
        $ftable = $vendata->catagory->feature_table;
        //dd($ftable);
        $model = '\App\Models\\' . $ftable;
        $datas = new $model;
        $data = $datas->where('vendor_id', $id)->firstOrFail();
        //dd($datas,$vendata);
        return view('admin.edit-vendor', compact('vendata', 'data'));
    }


    public function update($id, Request $request)
    {
        //dd($request->all());
        $update = vendors::find($id);
        if (isset($request->vendor_title)) {
            $update->title = $request->vendor_title;
        }
        if (isset($request->about_us)) {
            $update->about_us = $request->about_us;
        }
        if (isset($request->vendor_contact)) {
            $update->contact = $request->vendor_contact;
        }
        if (isset($request->startingat_1_title)) {
            $update->startingat_1_title = $request->startingat_1_title;
        }
        if (isset($request->startingat_1_price)) {
            $update->startingat_1_price = $request->startingat_1_price;
        }
        if (isset($request->startingat_2_title)) {
            $update->startingat_2_title = $request->startingat_2_title;
        }
        if (isset($request->startingat_2_price)) {
            $update->startingat_2_price = $request->startingat_2_price;
        }
        if (isset($request->startingat_3_title)) {
            $update->startingat_3_title = $request->startingat_3_title;
        }
        if (isset($request->startingat_3_price)) {
            $update->startingat_3_price = $request->startingat_3_price;
        }

        $update->save();

        $catagorydata = catagory::find($request->vendor_catagory);
        $model = '\App\Models\\' . $catagorydata->feature_table;


        $datas = $model::where('vendor_id', $id)->first();
        //dd($datas);
        //$datas->vendor_id = $update->id;
        if (isset($request->feature1)) {
            $datas->feature_1 = $request->feature1;
        }
        if (isset($request->feature2)) {
            $datas->feature_2 = $request->feature2;
        }
        if (isset($request->feature3)) {
            $datas->feature_3 = $request->feature3;
        }
        if (isset($request->feature4)) {
            $datas->feature_4 = $request->feature4;
        }
        if (isset($request->feature5)) {
            $datas->feature_5 = $request->feature5;
        }
        if (isset($request->feature6)) {
            $datas->feature_6 = $request->feature6;
        }
        if (isset($request->feature7)) {
            $datas->feature_7 = $request->feature7;
        }
        if (isset($request->feature8)) {
            $datas->feature_8 = $request->feature8;
        }
        if (isset($request->lowest_price)) {
            $datas->low_price = $request->lowest_price;
        }
        if (isset($request->venue_area)) {
            //dd($request->venue_area);
            $datas->area = $request->venue_area;
        } elseif (isset($request->kazi_area)) {
            $datas->area = $request->kazi_area;
        }
        if (isset($request->menu_type)) {
            $menu = implode(',', $request->menu_type);
            $datas->menu_type = $menu;
        }
        if (isset($request->event_type)) {
            $event = implode(',', $request->event_type);
            $datas->event_type = $event;
        }
        if (isset($request->speciality)) {
            $special = implode(',', $request->speciality);
            $datas->speciality_type = $special;
        }
        if (isset($request->bakery_speciality)) {
            $special = implode(',', $request->bakery_speciality);
            //dd($special);
            $datas->speciality_type = $special;
        }


        if (isset($request->bakery_speciality)) {
            $special = implode(',', $request->bakery_speciality);
            //dd($special);
            $datas->speciality_type = $special;
        }

        /*Bridal Outfit & */

        if (isset($request->type_1)) {
            $type_1 = implode(',', $request->type_1);
            //dd($special);
            $datas->type_1 = $type_1;
        }
        if (isset($request->type_2)) {
            $datas->type_2 = $request->type_2;
        }
        if (isset($request->type_3)) {
            $datas->type_3 = $request->type_3;
        }
        if (isset($request->type_4)) {
            $datas->type_4 = $request->type_4;
        }
        if (isset($request->type_5)) {
            $datas->type_5 = $request->type_5;
        }
        if (isset($request->type_6)) {
            $datas->type_6 = $request->type_6;
        }
        if (isset($request->type_7)) {
            $datas->type_7 = $request->type_7;
        }
        if (isset($request->type_8)) {
            $datas->type_8 = $request->type_8;
        }


        $datas->save();


        /** Update Profile Image **/
        if ($request->hasFile('profile_image')) {

            $path = $this->getPath();
            $destinationPath = $path . '/img/vendor-profile/';



            /** Deactivate this on live server **/
            //File::delete($update->profile_img);
            /** End of Deactivate this on live server **/

            $extrapath = $path . '\\' . $update->profile_img;
            $extrapath = str_replace("\\", '/', $extrapath);
            if (File::exists($extrapath)) {
                File::delete($extrapath);
            }
            /** End of active on live server **/

            $image = $request->file('profile_image');
            $input['imagename'] = $update->id . '.' . $image->getClientOriginalExtension();

            if ($image->move($destinationPath, $input['imagename'])) {
                $fileurl = 'img\vendor-profile\\' . $input['imagename'];
                vendors::where('id', $update->id)->update(['profile_img' => $fileurl]);
            } else {
                echo "Error";
            }
        }

        /** Update logo **/
        if ($request->hasFile('logo_image')) {
            $path = $this->getPath();
            $destinationPath = $path . '/img/vendor-logo/';

            /** Deactivate this on live server **/
            //File::delete($update->logo);
            /** End of Deactivate this on live server **/

            /** Activate on live server, Delete feature image from directory **/
            $extrapath = $path . '\\' . $update->logo;
            $extrapath = str_replace("\\", '/', $extrapath);
            if (File::exists($extrapath)) {
                File::delete($extrapath);
            }
            /** End of active on live server **/

            $image = $request->file('logo_image');
            $input['imagename'] = $update->id . '.' . $image->getClientOriginalExtension();

            if ($image->move($destinationPath, $input['imagename'])) {
                $fileurl = 'img\vendor-logo\\' . $input['imagename'];
                vendors::where('id', $update->id)->update(['logo' => $fileurl]);
            } else {
                echo "Error";
            }
        }

        /** featuer Image Upload **/
        if ($request->hasFile('feature_image')) {

            $path = $this->getPath();
            $destinationPath = $path . '/img/feature-image/';

            for ($a = 1; $a < 4; $a++) {
                $column = 'feature_image_' . $a;

                /** Deactivate this on live server **/
                //File::delete($update->$column);
                /** End of Deactivate this on live server **/

                /** Activate on live server, Delete feature image from directory **/
                $extrapath = $path . '\\' . $update->$column;
                $extrapath = str_replace("\\", '/', $extrapath);
                if (File::exists($extrapath)) {
                    File::delete($extrapath);
                }
                /** End of active on live server **/
            }

            $i = 0;
            foreach ($request->feature_image as $feature) {
                $i++;
                $input['imagename'] = $update->id . '_f' . $i . '.' . $feature->getClientOriginalExtension();
                $column = 'feature_image_' . $i;

                $feature->move($destinationPath, $input['imagename']);

                $fileurl = 'img\feature-image\\' . $input['imagename'];
                vendors::where('id', $update->id)->update([$column => $fileurl]);
            }
        }

        /**Change Logs- Start*/
        $message = "Vendor ( $update->title -> $catagorydata->name ) Updated  by ".Auth::user()->name;
        $this->saveChangeLog("vendor",null,"vendors",$update->id,$message,"update",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return redirect()->back();
    }


    public function destroy($id, Request $r)
    {
        $table = catagory::find($r->catagoryid);
        $ftable = $table->feature_table;
        $model = '\App\Models\\' . $ftable;
        $data = new $model;
        $data = $data->where('vendor_id', $id)->delete();

        $del = vendors::find($id);





        /**Change Logs- Start*/
        $message = "Vendor ( $del->title -> $table->name ) Deleted  by ".Auth::user()->name;
        $this->saveChangeLog("vendor",null,"vendors",null,$message,"delete",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/






        /** Activate on live server
         * When running in localhost this will not work, so in live share hosting server the following functuin will work.
         **/
        $path = $this->getPath();

        /**   Delete Logo from directory **/
        $logopath = $path . '\\' . $del->logo;
        $logopath = str_replace("\\", '/', $logopath);
        if (File::exists($logopath)) {
            File::delete($logopath);
        }

        /** Delete profile from directory **/
        $profilepath = $path . '\\' . $del->profile_img;
        $profilepath = str_replace("\\", '/', $profilepath);
        if (File::exists($profilepath)) {
            File::delete($profilepath);
        }

        /** Delete feaeture_image 1 from directory **/
        $f1path = $path . '\\' . $del->feature_image_1;
        $f1path = str_replace("\\", '/', $f1path);
        if (File::exists($f1path)) {
            File::delete($f1path);
        }

        /**  Delete feature_image 2 from directory **/
        $f2path = $path . '\\' . $del->feature_image_2;
        $f2path = str_replace("\\", '/', $f2path);
        if (File::exists($f2path)) {
            File::delete($f2path);
        }

        /** Delete feature_image 3 from directory **/
        $f3path = $path . '\\' . $del->feature_image_3;
        $f3path = str_replace("\\", '/', $f3path);
        if (File::exists($f3path)) {
            File::delete($f3path);
        }

        /**
         * End of activate on live server
         **/

        //File::delete($del->profile_img);
        //File::delete($del->logo);
        //File::delete($del->feature_image_1);
        //File::delete($del->feature_image_2);
        //File::delete($del->feature_image_3);
        $del->delete();

        $pack = packages::where('vendors_id', $id)->delete();

        $img = vendor_image::where('vendors_id', $id)->delete();
        // dd($pack,$img);

        //return redirect()->route('vendors.index');



        return Redirect::back();
    }

    /**
     * For any reason the admin can deactivate a user, its is not time base, its a manual system where admin
     * can deactivate any vendor.
     **/
    public function suspend($id, Request $r)
    {
        //dd($r->all());
        $table = catagory::find($r->catagoryid);
        $ftable = $table->feature_table;
        $model = '\App\Models\\' . $ftable;
        //dd($model);
        $data = new $model;
        $data = $data->where('vendor_id', $id)->update(['status' => 1]);

        $update = vendors::find($id);
        $update->status = 1;
        $update->save();


        /**Change Logs- Start*/
        $message = "Deactivate a Vendor ( $update->title -> $table->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor",null,"vendors",$update->id,$message,"deactivate",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return redirect()->route('vendors.index');
    }

    /**
     * If we want to active a deactivate vendor, we will use this function.
     **/
    public function active($id, Request $r)
    {
        $table = catagory::find($r->catagoryid);
        $ftable = $table->feature_table; //get the feature table name from the catagory table
        $model = '\App\Models\\' . $ftable;
        $data = new $model; //Assign the dynamic model
        $data = $data->where('vendor_id', $id)->update(['status' => 0]);

        $update = vendors::find($id); //find the vendor from vendor table
        $update->status = 0; //update the status of the vendor
        $update->save(); //save the vendor directly from the controller

        /**Change Logs- Start*/
        $message = "Activate a Vendor ( $update->title -> $table->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor",null,"vendors",$update->id,$message,"activate",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return redirect()->route('vendors.index');
    }

    /**
     * Show list of the vendor and the packages status, if any vendor has no package
     * then the list will show "Not Available" and if a single package is availabel
     * then it will show "Available"
     **/
    public function packages()
    {
        //echo "try";
        //exit;
        $datas = vendors::with('packages')->with('images')->get();

        //return $datas;

        return view('admin.vendors-packages', compact('datas'));
    }

    /**
     * Get all the packge from the package list inside a specific vendor
     **/
    public function getpackages($id)
    {
        $datas = vendors::where('id', $id)->with('packages')->firstOrFail();
        return view('admin.vendors-addPack', compact('datas'));
    }

    /**
     * Add a new packge from the package list inside a specific vendor packagelists
     **/
    public function addPackage($id, Request $r)
    {
        $find = vendors::find($id);
        $pack = packages::where('vendors_id', $id)->count();
        $pack++;
        $add = new packages;
        $add->catagory_id = $find->catagory_id;
        $add->vendors_id = $id;
        $add->title = $r->package_title;
        $add->price = $r->package_price;
        $add->description = $r->package_description;
        $add->save();


        /**  Activate For live server **/
        $path = $this->getPath();
        $destinationPath = $path . '/img/vendor-package/';

        /** End of Activate For live server **/
        $image = $r->file('package_image');
        $input['imagename'] = $id . '_' . $pack . '.' . $image->getClientOriginalExtension();

        $image->move($destinationPath, $input['imagename']);

        $fileurl = 'img\vendor-package\\' . $input['imagename'];

        packages::where('id', $add->id)->update(['image' => $fileurl]);


        /**Change Logs- Start*/
        $catagorydata = catagory::find($find->catagory_id);

        $message = "add new package in a Vendor ( $find->title -> $catagorydata->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor","package","vendors",$find->id,$message,"add",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return redirect()->back();
    }


    public function delPackage($id)
    {

        $del = packages::find($id);
        /** Activate on live server
         * When running in localhost this will not work, so in live share hosting server the following functuin will work.
         **/
        $path = $this->getPath();


        /**Change Logs- Start*/
        $vendor = vendors::find($del->vendors_id);
        $catagorydata = catagory::find($vendor->catagory_id);

        $message = "One package Deleted from a Vendor ( $vendor->title -> $catagorydata->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor","package","vendors",null,$message,"delete",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/


        /**   Delete package image from directory **/
        $packpath = $path . '\\' . $del->image;
        $packpath = str_replace("\\", '/', $packpath);
        if (File::exists($packpath)) {
            File::delete($packpath);
        }
        /** End of active on live server **/
        //File::delete($del->image);
        $del->delete();
        return redirect()->back();
    }




    public function getGalleries($id)
    {
        $datas = vendors::where('id', $id)->with('images')->firstOrFail();
        return view('admin.vendors-addGall', compact('datas'));
    }

    public function addGalleries(Request $request, $id)
    {

        // $vendor_image = new vendor_image();

        $category_id = $request->category_id;
        $vendor_id = $request->vendor_id;
        $vendor_title = $request->vendor_title;
        $vendor_title = strtolower($vendor_title);
        $vendor_title = str_replace(" ", "_", $vendor_title);

        $path = $this->getPath();
        $destinationPath = $path . '/img/vendor-image/' . $vendor_title . '/';

        $url_pre_Path = 'img/vendor-image/' . $vendor_title . '/';

        // echo "category : $category_id  <br>  vendor : $vendor_id <br> title: $vendor_title <br>  ";
        //echo $destinationPath."<br>";

        /** Vendor Image Upload **/
        if ($request->hasFile('vendor_images')) {


            //return $request->file('vendor_images');
            //exit;

            foreach ($request->vendor_images as $image) {

                $vendor_image = new vendor_image();
                $vendor_image->catagory_id = $category_id;
                $vendor_image->vendors_id = $vendor_id;
                $vendor_image->save();

                $image_name = $vendor_title . "_" . $vendor_image->id . "." . $image->getClientOriginalExtension();

                $image_url = $url_pre_Path . $image_name;

                $vendor_image->image_locations = $image_url;
                $vendor_image->save();  //it will update the image location column in the above id/row.

                $image->move($destinationPath, $image_name);


            }

        }

        /**Change Logs- Start*/
        $vendor = vendors::find($vendor_id);
        $catagorydata = catagory::find($category_id);

        $message = "Add new gallery in a Vendor ( $vendor->title -> $catagorydata->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor","gallery","vendors",$vendor->id,$message,"add",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return redirect()->back();
        //return $request->file('vendor_images');
    }

    public function deleteGall(Request $request, $id)
    {
        echo $id;

        $vendor_image = vendor_image::where('id', $id)->first();


        /**Change Logs- Start*/
        $vendor = vendors::find($vendor_image->vendors_id);
        $catagorydata = catagory::find($vendor_image->catagory_id);

        $message = "One gallery Deleted from  a Vendor ( $vendor->title -> $catagorydata->name  ) by ".Auth::user()->name;
        $this->saveChangeLog("vendor","gallery","vendors",null,$message,"delete",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/


        $path = $this->getPath(); // for live server

        /**   Delete package image from directory **/
        $packpath = $path . '\\' . $vendor_image->image_locations;
        $packpath = str_replace("\\", '/', $packpath);
        if (File::exists($packpath)) {
            File::delete($packpath);
        }
        /** End of active on live server **/
        // File::delete($vendor_image->image_locations);

        $vendor_image->delete();
        return redirect()->back();

    }



    public function saveChangeLog($vendor_service=null,$package_gallery=null,$table_name=null,$table_id=null,$message=null,$action=null,$order_action=null){

        $changeLog = new ChangeLog();

        $changeLog->admin_id = Auth::user()->id;

        $changeLog->vendor_service = $vendor_service;
        $changeLog->package_gallery = $package_gallery;
        $changeLog->table_name = $table_name;
        $changeLog->table_id = $table_id;
        $changeLog->message = $message;
        $changeLog->action = $action;
        $changeLog->order_action = $order_action;

        $changeLog->save();

    }


}
