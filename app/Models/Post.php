<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'content',
        'category_id',
        'image_path',
        'is_published'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

}
