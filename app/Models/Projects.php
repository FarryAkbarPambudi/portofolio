<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'thumbnail'
    ];
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
