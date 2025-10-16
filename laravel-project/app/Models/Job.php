<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'user_email', 'title', 'location', 'category_id', 'tags',
        'description', 'application_email', 'application_url',
        'closing_date', 'company_name', 'website', 'tagline',
        'cover_image', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
