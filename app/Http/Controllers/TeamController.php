<?php

namespace App\Http\Controllers;


use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.pages.team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list(): View
    {
        $teams = Team::latest()->paginate(3);
        return view('pages.team.list',compact('teams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'social_links' => 'required|string|max:5000',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,svg,webp,png,jpg,gif|max:2048',
        ]);
        $imageName ="";
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $team = new Team();
        $team->title = $request->title;
        $team->position = $request->position;
        $team->social_links = $request->social_links;
        $team->description = $request->description;
        $team->image = 'images/'.$imageName;
        $team->save();
        return redirect()->route('team.list')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $team=Team::where('id',$id)->first();
        return view('pages.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $team=Team::where('id',$id)->first();
        return view('pages.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'social_links' => 'required|string|max:5000',
            'description' => 'required|string'
        ]);

        $input = $request->all();
        if (!empty($input['image'])) {
            $image = $request->file('image');
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = "images/".$Images;

        }else{
            unset($input['image']);
        }

        $team = Team::find($id);

        $team->title = $request->title;
        $team->position = $request->position;
        $team->social_links = $request->social_links;
        $team->description = $request->description;
        $team->image = $input['image'];
        $team->save();

        return redirect()->route('team.list')
            ->with('success', 'Data updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        Team::where('id', $id)->delete();

        return redirect()->route('team.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {
        $teams = Team::query()
            ->when(
                $request->search,
                function(Builder $builder) use ($request){
                    $builder->where('description', 'like', "%{$request->search}%")
                        ->orWhere('title', 'like', "%{$request->search}%");
                }
            )->paginate(3);
        return view('pages.team.list',compact('teams'));

    }
}
