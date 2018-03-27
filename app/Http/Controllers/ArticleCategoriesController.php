<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ArticleCategory::all();

        return view('article_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new ArticleCategory();

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect()->route('article-categories.index')
            ->with('success', 'The Article Category: ' . $category->name . ' has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleCategory = ArticleCategory::findOrFail($id);

        return view('article_categories.edit', compact('articleCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articleCategory = ArticleCategory::findOrFail($id);

        $articleCategory->name = $request->input('name') ?? $articleCategory->name;
        $articleCategory->description = $request->input('description') ?? $articleCategory->description;

        $articleCategory->save();

        return redirect()->route('article-categories.index')
            ->with('message', 'The Article Category: ' . $articleCategory->name . ' has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articleCategory = ArticleCategory::findOrFail($id);

        $articleCategory->delete();

        return redirect()->route('article-categories.index')
            ->with('message', 'The Article Category: ' . $articleCategory->name . ' has been successfully deleted!');
    }

    /**
     * Delete all selected Currency at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = ArticleCategory::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }

        }
    }
}
