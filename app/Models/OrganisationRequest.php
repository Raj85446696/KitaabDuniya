<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisationRequest extends Model
{
    use HasFactory;
    protected $table = "organisation_requests";
    protected $fillable = ['name', 'email', 'phone', 'address', 'gender', 'org_licence', 'password'];
}
