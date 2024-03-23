<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    use HasFactory;
    protected $fillable =
     [
        'id','name','father name','company_name','address','email','phone_num','additional_info'
     ];



}
