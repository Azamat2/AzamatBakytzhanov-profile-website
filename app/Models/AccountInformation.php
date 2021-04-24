<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountInformation extends Model {
    use HasFactory;

    protected $table = 'accountsInfo';
    protected $fillable = ['worker name', 'worker surname', 'worker photo'];
}