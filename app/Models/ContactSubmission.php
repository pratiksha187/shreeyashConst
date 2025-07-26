<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $table ='contact_submissions';
   // app/Models/ContactSubmission.php
    protected $fillable = ['name', 'mobile', 'project_type', 'location', 'details'];

}
