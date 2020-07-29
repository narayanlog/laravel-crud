<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankModel extends Model
{
    protected $fillable = [
        'name',
        'account_num ',
        'address',
        'mobile'
    ];


}
