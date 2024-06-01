<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Home;
use App\Models\Services;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use JulioMotol\AuthTimeout\AuthTimeout;
use JulioMotol\AuthTimeout\Events\AuthTimedOut;

class HomeController extends Controller
{
    public function handle(AuthTimedOut $event)
    {
        $event->user;
        $event->guard;
    }
    //
    public function index()
    {
         // The last activity time of the user.
        Session::put('name','admin');
        return view('home.index');
    }
    public function list(): View
    {
        $homecategories =  ['Slider','services','what we have done'];
        $homes = Home::latest()->paginate(3);

        return view('pages.home.list',compact('homes','homecategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function lists($id): View
    {
        $homecategories =   ['Slider','services','what we have done'];
        $homes = Home::where('category_id',$id)->paginate(3);
        return view('pages.home.list',compact('homes','homecategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $homecategories =   ['Slider','services','what we have done'];

        return view('pages.home.create', compact('homecategories'));
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
            'image' => 'image|mimes:jpeg,png,webp,jpg,gif|max:2048',
        ]);
        $imageName ="";
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $home = new Home();
        $home->category_id = $request->category_id;
        $home->title = $request->title;
        $home->description = $request->description;
        $home->image = 'images/'.$imageName;
        $home->save();
        return redirect()->route('home.list')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $home=Home::where('id',$id)->first();
        return view('pages.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $home=Home::where('id',$id)->first();
        $homecategories =   ['Slider','services','what we have done'];
        return view('pages.home.edit', compact('home','homecategories'));
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

        if (!empty($input['image'])) {
            $image = $request->file('image');
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = "images/".$Images;

        }else{
            unset($input['image']);
        }

        $home = Home::find($id);
        $home->category_id = $request->category_id;
        $home->title = $request->title;
        $home->description = $request->description;
        $home->image = $input['image'];
        $home->save();
        return redirect()->route('home.list')
            ->with('success', 'Data updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        Home::where('id', $id)->delete();
        return redirect()->route('home.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {

        $homes = Home::query()
            ->when(
                $request->search,
                function(Builder $builder) use ($request){
                    $builder->where('description', 'like', "%{$request->search}%")
                        ->orWhere('title', 'like', "%{$request->search}%");
                }
            )->paginate(3);
        return view('pages.home.list',compact('homes'));

    }
    public function wellcome()
    {
        return view('welcome');
    }
}
