<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ToyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $user = Auth::user();

        $toys = Toy::where('gender_id', $user->gender_id)->get();

        return view('home', compact('toys', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $toy = new Toy();

        return view('toy.create', compact('toy'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ToyRequest $request): RedirectResponse
    {
        Toy::create($request->validated());

        return Redirect::route('toys.index')
            ->with('success', 'Toy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $toy = Toy::find($id);

        return view('toy.show', compact('toy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $toy = Toy::find($id);

        return view('toy.edit', compact('toy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ToyRequest $request, Toy $toy): RedirectResponse
    {
        $toy->update($request->validated());

        return Redirect::route('toys.index')
            ->with('success', 'Toy updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Toy::find($id)->delete();

        return Redirect::route('toys.index')
            ->with('success', 'Toy deleted successfully');
    }
}
