<?php

namespace App\Http\Controllers;


use App\Models\Sector;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('site.pages.sectors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list(): View
    {
        $sectors = Sector::latest()->paginate(3);
        return view('pages.sectors.list',compact('sectors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectorcategories =   ['Part 1','Part 2','Part 3'];
        return view('pages.sectors.create',compact('sectorcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,svg,png,jpg,gif|max:2048',
        ]);
        $imageName ="";
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $sector = new Sector();
        $sector->title = $request->title;
        $sector->description = $request->description;
        $sector->image = 'images/'.$imageName;
        $sector->save();
        return redirect()->route('sector.list')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $sector=Sector::where('id',$id)->first();
        return view('pages.sectors.show', compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $sectorcategories =   ['Part 1','Part 2','Part 3'];
        $sector=Sector::where('id',$id)->first();
        return view('pages.sectors.edit', compact('sector','sectorcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $input = $request->all();
        $sector = Sector::find($id);
        if (!empty($input['image'])) {
            $image = $request->file('image');
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = "images/".$Images;
            $sector->image = $input['image'];
        }else{
            unset($input['image']);
        }
        $sector->category_id = $request->category_id;
        $sector->title = $request->title;
        $sector->description = $request->description;
        $sector->save();

        return redirect()->route('sector.list')
            ->with('success', 'Data updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        Sector::where('id', $id)->delete();

        return redirect()->route('sector.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {

        $sectors = Sector::query()
            ->when(
                $request->search,
                function(Builder $builder) use ($request){
                    $builder->where('description', 'like', "%{$request->search}%")
                        ->orWhere('title', 'like', "%{$request->search}%");
                }
            )->paginate(3);
        return view('pages.sector.list',compact('sectors'));

    }
}
