<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(Type::class);
    }

    protected $fillable = [
        'title',
        'type_id',
        'slug',
        'text',
        'image',
        'image_original_name',
    ];
}
