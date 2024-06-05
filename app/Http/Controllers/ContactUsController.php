<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.pages.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function list()
    {
        $contacts = ContactUs::latest()->orderBy('id', 'desc')->paginate(10);

        return view('pages.contact.index',compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);


    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contactus.index')->with('success', 'Your Message has been succesfully submited.');

    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        ContactUs::where('id',$id)->delete();

        return redirect()->route('contact.list')
            ->with('success', 'Data deleted successfully');
    }
    public function search(Request $request) :View
    {
        $contacts = ContactUs::query()
            ->when(
                $request->search,
                function(Builder $builder) use ($request){
                    $builder->where('message', 'like', "%{$request->search}%")
                        ->orWhere('subject', 'like', "%{$request->search}%");
                }
            )->paginate(3);
        return view('pages.contact.index',compact('contacts'));

    }
}
