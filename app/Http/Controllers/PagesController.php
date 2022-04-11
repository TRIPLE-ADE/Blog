<?php

namespace App\Http\Controllers;

class pagesController extends Controller{
    public function getIndex() {
        return view('home   ');
    }
    public function getAbout() {
        $first ='Abdulrasheed';
        $last ='Abdulsalam';

        $fullname = $first." ".$last;
        $email = 'adetomiwa@gmail';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $email;
        return view('about')->withData($data);
    }
    public function getContact() {
        return view('contact');
    }

}