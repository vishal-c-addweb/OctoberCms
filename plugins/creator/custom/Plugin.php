<?php namespace Creator\Custom;

use System\Classes\PluginBase;
use SaurabhDhariwal\Revisionhistory\Classes\Diff as Diff;
use System\Models\Revision as Revision;

class Plugin extends PluginBase
{
    public function boot()
    {

    /* Extetions for revision */
    Revision::extend(function($model){
        /* Revison can access to the login user */
        $model->belongsTo['user'] = ['Backend\Models\User'];

        /* Revision can use diff function */
        $model->addDynamicMethod('getDiff', function() use ($model){
        return Diff::toHTML(Diff::compare($model->old_value, $model->new_value));
        });
    });
    }
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}