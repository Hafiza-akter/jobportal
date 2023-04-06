<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListController extends Controller
{
    public function index(){
       
        return view('listings.index',[
            'listings' => Listing::latest()->filter
            (request(['tag','search']))->paginate(4)]);

    }

    public function show(listing $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        // dd($request->file());
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'email' => ['required', 'email'],
            'locatios' => [],
            'website' => [],
            'tags' => [],
        ]);
        // dd($formFields);
        $formFields['user_id'] = auth()->user()->id;
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        Listing::create($formFields);
        return redirect('/')->with('message','Job created successfully!');
    }

    public function edit(Listing $listing){
        // dd($listing);

        return view('listings.edit',['listing'=>$listing]);
    }

    public function update(Request $request, Listing $listing){
        // dd($request->file());
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => ['required'],
            'email' => ['required'],
            'locatios' => [],
            'website' => [],
            'tags' => [],
        ]);
        // dd($formFields);
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $listing->update($formFields);
        return back()->with('message','Job updated successfully!');
    }

    public function destroy(Listing $listing){
// dd($listing);
        $listing->delete();
        return redirect('/')->with('message','Successfully Deleted');

    }

    public function manage(){
        // dd(auth()->user()->listings()->get());
        return view('listings.manage',['listings'=>auth()->user()->listings()->get()]);
    }
}
