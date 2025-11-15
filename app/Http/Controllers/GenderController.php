<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GenderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $genders = Gender::paginate();

        return view('gender.index', compact('genders'))
            ->with('i', ($request->input('page', 1) - 1) * $genders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $gender = new Gender();

        return view('gender.create', compact('gender'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenderRequest $request): RedirectResponse
    {
        Gender::create($request->validated());

        return Redirect::route('genders.index')
            ->with('success', 'Gender created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $gender = Gender::find($id);

        return view('gender.show', compact('gender'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $gender = Gender::find($id);

        return view('gender.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenderRequest $request, Gender $gender): RedirectResponse
    {
        $gender->update($request->validated());

        return Redirect::route('genders.index')
            ->with('success', 'Gender updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Gender::find($id)->delete();

        return Redirect::route('genders.index')
            ->with('success', 'Gender deleted successfully');
    }
}
