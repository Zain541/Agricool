<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =
    [
        'project_name',
        'farm_name',
        'project_start_date',
        'project_end_date',
        'investment',
        'location',
        'commodity',
        'rio',
        'collected_funds',
        'risk',
        'farm_description',
        'project_date',
        'project_manager_detail',
        'farm_owner',
        'project_image',
        'owner_image',
        'project_manager_image',

    ];
}
