<?php

namespace Modules\TransferModule\Repository;

use File;
use Modules\TransferModule\Entities\Transfer;


class TransferRepository
{

    public function find($id)
    {
        $transfer = Transfer::where('id', $id)->with('translations')->first();

        return $transfer;
    }

    public function findAll()
    {
        $transfers = Transfer::with('translations')->get();

        return $transfers;
    }

    public function findLastByLimit($limit)
    {
        return Transfer::orderBy('created_at', 'desc')->with('translations')->take($limit)->get();
    }


    public function save($data)
    {
        return Transfer::create($data);
    }

    public function update($id, $transferData, $transferTrans)
    {
        $transfer = $this->find($id);
        $transfer->update($transferData);

        foreach (\LanguageHelper::getLang() as $lang) {

            if (isset($data_trans[$lang->lang]['title'])) {
                $transfer->translate('' . $lang->lang)->title = $transferTrans[$lang->lang]['title'];
            }
            if (isset($data_trans[$lang->lang]['description'])) {

                $transfer->translate('' . $lang->lang)->description = $transferTrans[$lang->lang]['description'];
                $transfer->translate('' . $lang->lang)->meta_title = $transferTrans[$lang->lang]['meta_title'];
                $transfer->translate('' . $lang->lang)->meta_desc = $transferTrans[$lang->lang]['meta_desc'];
                $transfer->translate('' . $lang->lang)->slug = $transferTrans[$lang->lang]['slug'];
                $transfer->translate('' . $lang->lang)->meta_keywords = $transferTrans[$lang->lang]['meta_keywords'];
            }

            $transfer->save();
        }
        return $transfer;
    }

    public function delete($transfer)
    {
        if ($transfer->photo) {
            $file_path = public_path() . '/images/transfer/' . $transfer->photo;
            $thumbnail_path = public_path() . '/images/transfer/thumb/' . $transfer->photo;
            File::delete([$file_path, $thumbnail_path]);
        }
        Transfer::destroy($transfer->id);
    }
}
