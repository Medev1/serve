<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Http\Requests\cv_request;

use App\Cv;
use Auth;

class CvController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function show($id){
         
        return view('Cv.show');
    }

    public function index(){
      $cvs=Auth::user()->cvs;
      return view('Cv.index',['cvs'=>$cvs]);
    }

    public function create(){
        return view('Cv.create');
    }

    public function edit($id){
        $cv =Cv::find($id);
        return view('Cv.edit',['cv'=>$cv]);
    }

    public function store(cv_request $request){
        
        $cv = new Cv();
        $cv->title=$request->title;
        $cv->presentation=$request->presentation;
        $cv->user_id=Auth::user()->id;
        if($request->hasFile('image')){
          $cv->image=$request->image->store('images');
        }
        $cv->save();
        session()->flash('success','The cv saved successfully');
        return redirect('cvs');
    }

    public function update(cv_request $request, $id){
         $cv=Cv::find($id);
         $cv->title=$request->input('title');
         $cv->presentation=$request->input('presentation');
         $cv->save();
         return redirect('cvs');

    }

    public function destroy(Request $request, $id){
        $cv=Cv::find($id);
        $cv->delete();
        
        return redirect('cvs');
        
    }
}
