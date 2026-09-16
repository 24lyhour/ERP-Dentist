<?php

namespace Modules\Accountings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Accountings\Database\Factories\AccountingFactory;

class Accounting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): AccountingFactory
    // {
    //     // return AccountingFactory::new();
    // }
}
