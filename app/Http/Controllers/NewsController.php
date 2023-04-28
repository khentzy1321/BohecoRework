<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view ('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        return view('news.create',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required|min:3|max:255',
            'article' => 'required',
            'dateTime' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($request->hasfile('image'))
        {

           foreach($request->file('image') as $image)
           {
               $nameImage =$image->getClientOriginalName();
               $image->move(public_path().'/uploads/news', $nameImage);
               $data[] = $nameImage;
           }


           $news = new News();
           $news->title = $request->title;
           $news->article = $request->article;
           $news->dateTime = $request->dateTime;
           $news->image=json_encode($data);

           $news->save();
        }

        Alert::toast('Created Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $news = News::find($id);
        // $images = Storage::files('/uploads/news');
        // return view('news.view', compact('news','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'dateTime' => 'required',
            'image' => 'nullable|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $news = News::find($id);

        // Update the post without changing the image file if the image input is empty
        if ($request->image == null) {
            $news->update([
                'title' => $request->title,
                'article' => $request->article,
                'dateTime' => $request->dateTime,
            ]);
        }
        // Otherwise, upload the new image file and update the post with the new image file
        else {
            if($request->hasfile('image'))
        {
            $image = [];

           foreach($request->file('image') as $image)
           {
               $nameImage = $image->getClientOriginalName();
               $image->move(public_path().'/uploads/news', $nameImage);
               $data[] = $nameImage;

               $news = News::find($id);
               $news->title = $request->title;
               $news->article = $request->article;
               $news->dateTime = $request->dateTime;
               $news->image=json_encode($data);
           }
           $news->save();
        }
    }
        Alert::toast('Updated Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->route('news.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        if (!empty($news->image) && file_exists(public_path('uploads/news/' . $news->image))) {
            File::delete(public_path('uploads/news/' . $news->image));
        }

        if (!empty($news->image)) {
            $imageArray = json_decode($news->image, true);
            foreach ($imageArray as $imageName) {
                if (file_exists(public_path('uploads/news/' . $imageName))) {
                    File::delete(public_path('uploads/news/' . $imageName));
                }
            }
        }
        $news->delete();

        Alert::toast('Deleted Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->back();
    }
}
