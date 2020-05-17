<?php

namespace Master\Articles\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Sidebar;
use Maatwebsite\Sidebar\SidebarExtender;


class ExtenderSidebar implements SidebarExtender 
{
	public function extendWith(Menu $menu)
	{
		$menu->group('ADMINISTRATOR', function(Group $group) {
			$group->item('Articles', function(Item $item){
				$item->icon('mdi mdi-book');
        $item->url('articles');
				$item->item('Category', function(Item $item){
          $item->url(route('admin.categories'));
        });
        
        $item->item('Article', function(Item $item){
          $item->url(route('admin.articles'));
        });
			});
		});
		return $menu;
	}
}