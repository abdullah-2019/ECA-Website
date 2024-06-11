<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function list(): View
    {
        $news = News::latest()->orderBy('id', 'desc')->paginate(3);
        return view('pages.news.list',compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
        ]);
        $imageName ="";
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = 'images/'.$imageName;
        $news->save();
        return redirect()->route('news.list')->with('success', 'Data created successfully.');
  
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $news=News::where('id',$id)->first();
        return view('pages.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $news=News::where('id',$id)->first();
        return view('pages.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        $input = $request->all();
        $news = News::find($id);
        if (!empty($input['image'])) {
            $image = $request->file('image');
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = "images/".$Images;
            $news->image = $input['image'];
        }else{
            unset($input['image']);
        }
        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return redirect()->route('news.list')
            ->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        News::where('id', $id)->delete();

        return redirect()->route('news.list')
            ->with('success', 'Data deleted successfully');
    }

    public function search(Request $request) :View
    {

        $news = News::query()
        ->when(
            $request->search,
            function(Builder $builder) use ($request){
                $builder->where('description', 'like', "%{$request->search}%")
                    ->orWhere('title', 'like', "%{$request->search}%");
            }
        )->paginate(3);
        return view('pages.news.list',compact('news'));

    }
}
