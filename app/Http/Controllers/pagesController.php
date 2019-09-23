<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{

    /*____________________index page_________________________ */
    public function index ()
    {
        return view('pages.index');
    }
   /*_____________________about page_________________________ */
    public function about ()
    {
        return view('pages.about');
    }
    /*____________________services page_________________________ */

    public function services ()
    {
        $techSkills =[

            'title' => 'My Technical Skills is :',

            'skills'=> ['Android Development' ,
                        'XML',
                        'Firebase',
                        'Sqlite',
                        'OOP',
                        'Git hub',
                        'php',
                        'laravel',
                        'Html']

        ];
        return view('pages.services')->with($techSkills);
    }



}
