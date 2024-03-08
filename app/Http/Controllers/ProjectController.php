<?php

namespace App\Http\Controllers;

use App\Models\developers;
use App\Models\logo;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\projects;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function projects(Request $request)
    {
        $logo = logo::first();
        $developer = developers::all();
        $categories = categories::all();
        $query = projects::query();

        // Check if a search term is provided
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($query) use ($search) {
                $query->where(DB::raw('LOWER(title)'), 'like', '%' . strtolower($search) . '%')
                    ->orWhere('year_level', 'like', "%{$search}%")
                    ->orWhere('semester', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%")
                    ->orWhere('school_year', 'like', "%{$search}%")
                    ->orWhereHas('developers', function ($query) use ($search) {
                        $query->where('first_name', 'like', "%{$search}%")
                            ->orWhere('last_name', 'like', "%{$search}%");
                    });
            });
        }

        // Check if a category filter is applied
        if ($request->has('category')) {
            $categoryName = $request->input('category');
            $category = categories::where('name', $categoryName)->first();
            if ($category) {
                $query->where('category', $category->id);
            }
        }

        $projects = $query->with('developers')->latest()->get();
        return view('projects.index', compact('categories', 'projects', 'logo'));
    }

    public function show($id)
    {
        $selectedProject = projects::with('developers')->find($id);
        return view('projects.index', [
            'selectedProject' => $selectedProject,
        ]);
    }
}
