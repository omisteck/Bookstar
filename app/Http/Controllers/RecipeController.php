<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Recipe;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'desc')->get();

        return Inertia::render('Index', [
            'recipes' => $recipes,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeRequest $request)
    {
        $fileName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('upload'), $fileName);

        $recipe = Recipe::create([
            'title' => $request->title,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'time' => $request->time,
            'image' => $fileName,
        ]);

        return response()->json([
            'message' => 'Recipe created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeRequest  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
