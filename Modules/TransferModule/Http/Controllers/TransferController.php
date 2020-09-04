<?php

namespace Modules\TransferModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TransferModule\Repository\TransferRepository;
use Yajra\DataTables\Facades\DataTables;
use Modules\CommonModule\Helper\UploaderHelper;

class TransferController extends Controller
{
    use UploaderHelper;
    private $transferRepo;

    public function __construct(TransferRepository $transferRepo) {
        $this->transferRepo = $transferRepo;
    }

    /**
     * Return all data to be indexed for Datatables using AJAX.
     *
     * @return  [type]  [return description]
     */
    public function dataTables()
    {
        $transfers = $this->transferRepo->findAll();

        return DataTables::of($transfers)
            ->addColumn('title', function($row) {
                return  $row->title;
            })
            ->addColumn('photo', function($row) {
                if($row->photo){
                    return '<img src='. asset("public/images/transfer/thumb/" . $row->photo).'/>';
                } else {
                    return '<strong> No Photo </strong>';
                }
            })
            ->addColumn('edit', function($row) {
            return '<a href="'. url("admin-panel/transfers/" . $row->id . "/edit") .'" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('admin-panel/transfers/delete', $row->id) .'" class="btn btn btn-danger" data-confirm="Are you sure, You want to delete?" data-method="delete"><i class="glyphicon glyphicon-trash"></i></a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit', 'photo' => 'photo'])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $transfers = $this->transferRepo->findAll();
        return view('transfermodule::transfers.index', ['transfers' => $transfers]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('transfermodule::transfers.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token', 'photo');

        if ($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'transfer', true); // resize option executed.
            $data['photo'] = $imageName;
        }
        $this->transferRepo->save($data);

        return redirect('/admin-panel/transfers')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $transfer = $this->transferRepo->find($id);

        return view('transfermodule::transfers.edit', ['transfer' => $transfer]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $transferPic = $this->transferRepo->find($id);
        $transferData = $request->except('_token', '_method', 'photo', 'en');

        $activeLangCode = \LanguageHelper::getDynamicLangCode();
        $transferTrans = $request->only($activeLangCode);



        if ($request->hasFile('photo'))
        {
            // Delete old image first.
            $thumbnail_path = public_path() . '/images/transfer/thumb/' . $transferPic->photo;
            $thumbnail_path2 = public_path() . '/images/transfer/' . $transferPic->photo;
            File::delete([$thumbnail_path, $thumbnail_path2]);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'transfer', true); // resize option executed.
            $transferData['photo'] = $imageName;
        }

        $this->transferRepo->update($id, $transferData, $transferTrans);

        return redirect('admin-panel/transfers')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $transfer = $this->transferRepo->find($id);

        # Delete the Main photo and Thumbnail.
        $this->transferRepo->delete($transfer);

        return redirect()->back();
    }
}
