<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list(): View
    {
        $events = Events::latest()->orderBy('id', 'desc')->paginate(3);
        return view('pages.events.list',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        //
        return view('pages.events.create');
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
        $events = new Events();
        $events->title = $request->title;
        $events->description = $request->description;
        $events->image = 'images/'.$imageName;
        $events->save();
        return redirect()->route('events.list')->with('success', 'Data created successfully.');
  
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $events=Events::where('id',$id)->first();
        return view('pages.events.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $events=Events::where('id',$id)->first();
        return view('pages.events.edit', compact('events'));
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
        $events = Events::find($id);
        if (!empty($input['image'])) {
            $image = $request->file('image');
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = "images/".$Images;
            $events->image = $input['image'];
        }else{
            unset($input['image']);
        }
        $events->title = $request->title;
        $events->description = $request->description;

        $events->save();

        return redirect()->route('events.list')
            ->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Events::where('id', $id)->delete();

        return redirect()->route('events.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {

        $events = Events::query()
        ->when(
            $request->search,
            function(Builder $builder) use ($request){
                $builder->where('description', 'like', "%{$request->search}%")
                    ->orWhere('title', 'like', "%{$request->search}%");
            }
        )->paginate(3);
        return view('pages.events.list',compact('events'));

    }
}
