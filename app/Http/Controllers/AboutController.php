<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.pages.about.index');
    }
    public function list(): View
    {
        $abouts = About::latest()->paginate(3);
        return view('pages.about.list',compact('abouts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = 'images/'.$imageName;
        $about->save();
        return redirect()->route('about.list')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $about=About::where('id',$id)->first();
        return view('pages.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $about=About::where('id',$id)->first();
        return view('pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = 'images/'.$Images;
        }else{
             unset($input['image']);
        }

        $about->update($input);

        return redirect()->route('about.list')
            ->with('success', 'Data updated successfully');
                //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        About::where('id', $id)->delete();

        return redirect()->route('about.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {

        $abouts = About::query()
        ->when(
            $request->search,
            function(Builder $builder) use ($request){
                $builder->where('description', 'like', "%{$request->search}%")
                    ->orWhere('title', 'like', "%{$request->search}%");
            }
        )->paginate(3);
        return view('pages.about.list',compact('abouts'));

    }
}
