<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /*______________________ index page ____________________________*/
    public function index()
    {

        $App =Application::orderBy('id','desc')->paginate(5);
        $count=Application::count();
        return view('Applications.index' , compact('App','count'));
    }

    /*_____________________ show page ______________________________ */
    public function show($id)
    {
       $App =Application::find($id);
       return view('Applications.show' ,compact('App'));
    }

    /*______________________create project ____________________________ */
   public function create()
   {
       return view('Applications.create');
   }

    /*______________________store project ____________________________ */
    public function store(Request $request)
    {
         $request->validate([
             'title' => 'required|max:200',
             'body' => 'required|max:500'
         ]);

        $Application =new Application();
        $Application->title =$request->title;
        $Application->body = $request->body  ;
        $Application->user_id =auth()->user()->id;
        $Application->save();

        return redirect('/Applications')->with('status', 'New project is created ..');

    }

     /*______________________edit   page ____________________________ */
     public function edit($id)
     {
         
            $App =Application::find($id);
        if (auth()->user()->id == $App->user_id) 
         {
            return view('Applications.edit', compact('App'));
         }
         else
         {
             return redirect('/Applications')->with('error', 'Not allow ..');
         }
         

     }
      /*______________________update page ____________________________ */
      public function update(Request $request ,$id)
      {
          $request->validate([
              'title' => 'required|max:200',
              'body' => 'required|max:500'
          ]);

          $Application = Application::find($id);
          $Application->title = $request->title;
          $Application->body= $request->body;

          $Application->save();
          return redirect('/Applications')->with('statu','Project is updated ..');

      }

       /*______________________destroy function ____________________________ */

       public function destroy($id)
       {
           $App = Application::find($id);
           $App->delete();

           return redirect('/Applications')->with('status','Projects is deleted successfully ..');

       }

}
