<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    // Name of table
    protected $table = 'tbluserjob';

    // Columns in table
    protected $fillable = [
        'jobid',
        'jobname',
    ];

    // This will prevent Eloquent from requiring created_at and updated_at fields
    public $timestamps = false;

    // Customizing the primary key field name (default in Lumen is 'id')
    protected $primaryKey = 'jobid';
}