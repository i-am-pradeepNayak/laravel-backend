<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addpost extends Model
{
    use HasFactory;
    protected $primaryKey = 'joid';
    protected $fillable = [
        'cid', 'cname', 'jobid', 'jobtype', 'jobspec', 'skills',
        'jqualy', 'jhires', 'jexpo', 'jloc', 'jpack', 'jtime'
    ];
}
