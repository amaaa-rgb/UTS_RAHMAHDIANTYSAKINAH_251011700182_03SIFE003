<?php
namespace App\Http\Controllers;
use App\Models\Recipe;
class RecipeController extends Controller
{
    public function index()
    {
        $query = Recipe::query();
        if (request()->filled('category')) {
            $query->where('category', request('category'));
        }
        if (request()->filled('search')) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
        $recipes = $query->paginate(6)->withQueryString();
        return view('recipes.index', compact('recipes'));
    }
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }
}