<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\ORM\TableRegistry;


class CommonHelper extends Helper {

	public function getCategoryInfo() {
		$categories = TableRegistry::get("Categories")->find('all');
		return $categories;
	}
}

