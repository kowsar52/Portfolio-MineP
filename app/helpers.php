<?php 
use App\Models\Setting;
use App\Models\ThemeManagement;

function getOption($option_name){
    $data = Setting::where('name',$option_name)->first();
    if(empty($data)){
        Setting::insert([
            'name' => $option_name,
            'value' => $option_name,
            'type' => 1,
            'comment' => 'settings',
        ]);
        $data = Setting::where('name',$option_name)->first();
    }
    return $data->value;
}


function getThemeOption($page,$slug){
    $data = ThemeManagement::where('page',$page)
                            ->where('slug',$slug)
                            ->where('language',\App::getLocale())
                            ->first();
    if(empty($data)){
        ThemeManagement::insert([
            'page' => $page,
            'slug' => $slug,
            'data' => $slug,
            'language' => \App::getLocale(),
        ]);
        $data = ThemeManagement::where('page',$page)->where('slug',$slug)->first();
    }
    return $data->data;
}