<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Childcat extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded  = [''];

    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcat_id');
    }

    public function subchildcategory(){
        return $this->hasMany(Subchildcat::class,'childcat_id');
    }
}
