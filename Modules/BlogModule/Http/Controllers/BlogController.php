<?php

namespace Modules\BlogModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\BlogModule\Http\Requests\BlogRequest;
use Modules\BlogModule\Repository\BlogCategoryRepository;
use Modules\BlogModule\Repository\BlogRepository;
use Modules\CommonModule\Helper\UploaderHelper;

class BlogController extends Controller
{
    use UploaderHelper;

    private $blogRepo;
    private $blogCategoryRepository;

    public function __construct(BlogRepository $blogRepo,BlogCategoryRepository $blogCategoryRepository)
    {
        $this->blogRepo = $blogRepo;
        $this->blogCategoryRepository = $blogCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $blogs = $this->blogRepo->findAll();
        return view('blog::Blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories=$this->blogCategoryRepository->findAllParent();
        return view('blog::Blog.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $blogData = $request->except('_token', '_wysihtml5_mode','photo');
        $blogData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'blog');
            $blogData['photo'] = $imageName;
        }

        $this->blogRepo->save($blogData);

        return redirect('admin-panel/blogs')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepo->find($id);

        return view('blog::Blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $categories=$this->blogCategoryRepository->findAllParent();
        $blog = $this->blogRepo->find($id);

        foreach ($blog->categories as $value) {
            $selected_categ_ids[] = $value->id;
        }

        return view('blog::Blog.Edit',compact('categories', 'blog', 'selected_categ_ids'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $blog = $request->except('_token','photo','id');
        if ($request->hasFile('photo')) {

            $image = $request->file('photo');

            $imageName = $this->upload($image, 'blog');
            $blog['photo'] = $imageName;
        }

        $blog = $this->blogRepo->update($id, $blog);

        return redirect('admin-panel/blogs')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepo->delete($id);

        return redirect()->back();
    }
}
