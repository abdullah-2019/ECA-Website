<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Services;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Builder;

class ServicesController extends Controller
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
        $categories =  Categories::all();
    $services = Services::latest()->paginate(3);
    return view('pages.services.list',compact('services','categories'))
    ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function lists($id): View
    {
        $categories =  Categories::all();
        $services = Services::where('category_id',$id)->paginate(3);
        return view('pages.services.list',compact('services','categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =  Categories::all();

        return view('pages.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);
        $imageName ="";
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        $services = new Services();
        $services->category_id = $request->category_id;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->image = 'images/'.$imageName;
        $services->save();
        return redirect()->route('services.list')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $service=Services::where('id',$id)->first();
        return view('pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $service=Services::where('id',$id)->first();
        return view('pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        $services = Services::find($id);
        $input = $request->all();

        if (!empty($input['image'])) {
            $image = $request->file('image');
            $Images = time().'.'. $image->extension();
            $image->move(public_path('images'), $Images);
            $input['image'] = "images/".$Images;
            $services->image = $input['image'];
        }else{
            unset($input['image']);
        }
        $services->category_id = $request->category_id;
        $services->title = $request->title;
        $services->description = $request->description;
        $services->save();
        return redirect()->route('services.list')
            ->with('success', 'Data updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        Services::where('id', $id)->delete();
        return redirect()->route('services.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {
        $services = Services::query()
            ->when(
                $request->search,
                function(Builder $builder) use ($request){
                    $builder->where('description', 'like', "%{$request->search}%")
                        ->orWhere('title', 'like', "%{$request->search}%");
                }
            )->paginate(3);
        return view('pages.services.list',compact('services'));

    }
    public function audit()
    {
        return view('site.pages.services.audit');
    }
    public function tax()
    {
        return view('site.pages.services.tax');
    }

    public function legal()
    {
        return view('site.pages.services.legal');
    }

    public function advisory()
    {
        return view('site.pages.services.advisory');
    }

    public function training()
    {
        return view('site.pages.services.training');
    }

    public function payroll()
    {
        $services = DB::table('services')->where('category_id', '=', 6)->get();
        return view('site.pages.services.payroll' ,compact('services'));
    }

    public function cashDistribution()
    {
        return view('site.pages.services.cash-distribution');
    }
}
