<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Type;


class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function genSlug($title)
    {
        return Str::slug($title, "-");
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
