<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = "employees";
    protected $fillable = [

'name',
'lastname',
'email',
'phone',
'project',
'award',
'summary',
'references',
'img',
'certificate',
'experience',
'reward',
'user_id',
'template_name'

    ];
}
