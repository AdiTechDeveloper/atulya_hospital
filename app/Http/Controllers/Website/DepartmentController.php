<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
     public function show($slug)
    {
        $json = file_get_contents(storage_path('app/departments.json'));

        $departments = json_decode($json, true);

        $department = collect($departments)
            ->firstWhere('slug', $slug);

        if (!$department) {
         
        return redirect('/');
    }

       

        return view('website.pages.show', compact('department'));
    }
}
