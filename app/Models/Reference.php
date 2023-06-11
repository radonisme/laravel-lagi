<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    public $guarded = [];
    public $table = 'references';

    public function setting(){
        $this->hasOne(Setting::class);
    }
}
