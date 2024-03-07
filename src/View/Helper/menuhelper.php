<?php
namespace App\View\Helper;

use Cake\View\Helper;

class MenuHelper extends Helper
{
    public function makeMenu($menus)
{ 
    $menuHtml = '<ul>';

    foreach ($menus as $menu) {
        $menuHtml .= '<li>';
        $menuHtml .= '<a href='.$menu->url.'>'.$menu->namamenu.' </a>';
        $menuHtml .= '</li>';
    }

    $menuHtml .= '</ul>';

    return $menuHtml;
}

}