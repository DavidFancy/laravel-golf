<?php

namespace App\Http\Controllers;
use App\Package;

class PackageController extends Controller {

    public function index($id) {
        $package = Package::find($id);
        if(empty($package)){
            $package = $this->first();
        }
        if(!empty($package)){
            $package['features'] = explode(";", $package['features']);
        }
        return view('packages')->with("package", $package);
    }

    public function getAll() {
        $packages = Package::all();

        foreach ($packages as $package){

            if(empty($package)){
                $package = $this->first();
            }
            if(!empty($package)){
                $package['features'] = explode(";", $package['features']);
            }
        }

        return view('packages')->with("packages", $packages);
    }
    
    private function first(){
        $packet = array();
        $packet['title'] = "test";
        $packet['description'] = "test test test test test test test test ";
        $packet['features'] = "1.wee;2.eee;4.ssss;";
        $packet['video_url'] = "https://www.youtube.com/embed/vvxCX4xUik8";
        $packet['price'] = 299.99;
        return $packet;
    }
}