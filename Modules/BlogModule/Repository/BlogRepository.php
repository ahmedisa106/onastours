<?php

namespace Modules\BlogModule\Repository;

use DB;
use Modules\BlogModule\Entities\Blog;

class BlogRepository/*implements the interface*/ {
	# Show
	public function find($id) {
		$blog = Blog::where('id', $id)->with(['categories', 'categories.translations', 'translations'])->get()->first();

		return $blog;
	}

	# Index
	public function findAll() {
		$blog = Blog::with(['categories', 'categories.translations', 'translations'])->get();
		return $blog;
	}

	public function findLastByLimit($limit) {
		$blog = Blog::with(['categories', 'categories.translations', 'translations'])->orderBy('created_at', 'desc')->take($limit)->get();
		return $blog;
	}

	public function incrementViews($id) {
		Blog::where('id', $id)->update(
			['num_of_view' => DB::raw('num_of_view+1')]);
	}

	# Insert
	public function save($blogData) {
		$blog = Blog::create($blogData);
		$blog->categories()->sync($blogData['blog_category_id']);

		return $blog;
	}

	# Edit
	public function update($id, $data) {
		$blog = Blog::find($id)->update($data);
		$blog = Blog::find($id);
		$blog->categories()->sync($data['blog_category_id']);

		foreach (\LanguageHelper::getLang() as $lang) {
			if (isset($data_trans[$lang->lang]['title'])) {
				$blog->translate('' . $lang->lang)->title = $data_trans[$lang->lang]['title'];
				$blog->translate('' . $lang->lang)->description = $data_trans[$lang->lang]['description'];
				$blog->translate('' . $lang->lang)->slug = $data_trans[$lang->lang]['slug'];
				$blog->translate('' . $lang->lang)->meta_title = $data_trans[$lang->lang]['meta_title'];
				$blog->translate('' . $lang->lang)->meta_desc = $data_trans[$lang->lang]['meta_desc'];
				$blog->translate('' . $lang->lang)->meta_keywords = $data_trans[$lang->lang]['meta_keywords'];
			}
			$blog->save();
		}

		return $blog;
	}

	# Destroy
	public function delete($id) {
		Blog::destroy($id);
	}
}
