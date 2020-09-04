<?php

namespace Modules\BlogModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\BlogModule\Http\Requests\BlogCategoryRequest;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\BlogModule\Repository\BlogCategoryRepository;

class CategoriesController extends Controller
{

    use UploaderHelper;

    private $categoryRepo;

    public function __construct(BlogCategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categs = $this->categoryRepo->findAll();

        return view('blog::category.index')->withCategs($categs);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories=$this->categoryRepo->findAll();
        return view('blog::category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($request->parent_id == 0){
            $categoryData = $request->except('_token', '_wysihtml5_mode', 'photo', 'parent_id');
        } else {
            $categoryData = $request->except('_token', '_wysihtml5_mode', 'photo');
        }

        $categoryData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $imageName = $this->upload($image, 'category');
            $categoryData['photo'] = $imageName;
        }
        $this->categoryRepo->save($categoryData);

        return redirect('admin-panel/blog-categories')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepo->find($id);

        return view('blog::category.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepo->find($id);
        $categories = $this->categoryRepo->findAll();

        return view('blog::category.Edit', ['category' => $category, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if ($request->parent_id == 0) {
            $category = $request->except('_token', '_wysihtml5_mode', 'photo', 'parent_id', 'ar', 'en');
            $category['parent_id'] = null;
        } else {
            $category = $request->except('_token', '_wysihtml5_mode', 'photo', 'ar', 'en');
        }

        $category_parent = $request->only('parent_id');

        $category_trans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {

            $image = $request->file('photo');

            $imageName = $this->upload($image, 'category');
            $category['photo'] = $imageName;
        }

        $category = $this->categoryRepo->update($id, $category, $category_trans);

        return redirect('admin-panel/blog-categories')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepo->delete($id);

        return redirect()->back();
    }

    /**
     * AJAX data source for Datatables.
     *
     * @return void
     */
    public function ajaxDataSrc()
    {
        $datasrc = $this->categoryRepo->findAll();

        return \Response::json($datasrc);
    }
}
