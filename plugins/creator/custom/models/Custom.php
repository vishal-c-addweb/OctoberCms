<?php 

namespace Creator\Custom\Models;

use Model;
use BackendAuth; //Add for current user

class Custom extends Model
{
    use \October\Rain\Database\Traits\Validation;

    // For Revisionable namespace
    use \October\Rain\Database\Traits\Revisionable; 

    //for sortable
    use \October\Rain\Database\Traits\Sortable;

    public $timestamps = false;

    // Add  for revisions limit
    public $revisionableLimit = 200; 

            // Add for revisions on particular field
    protected $revisionable = ["id","name","description"];

    protected $dates = ['created_at', 'updated_at'];

    public $table = 'creator_custom_';

    public $rules = [
    ];

    // Add  below relationship with Revision model 
    public $morphMany = [
        'revision_history' => [\System\Models\Revision::class, 'name' => 'revisionable']
    ];

    // Add below function use for get current user details
    public function diff(){
        $history = $this->revision_history;
    }
    public function getRevisionableUser()
    {
        return BackendAuth::getUser()->id;
    }
}