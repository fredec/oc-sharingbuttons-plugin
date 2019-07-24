<?php namespace Diveramkt\Sharingbuttons;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Diveramkt\SharingButtons\Components\SharingButtons' => 'SharingButtons',
        ];
    }
    public function registerPageSnippets()
    {
        return [
            'Diveramkt\SharingButtons\Components\SharingButtons' => 'SharingButtons',
        ];
    }
}
