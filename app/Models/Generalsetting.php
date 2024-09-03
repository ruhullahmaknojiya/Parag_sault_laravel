<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generalsetting extends Model
{
    use HasFactory;
    protected $table = '_general_settings';
    protected $fillable = [
        'bazar_logo_site',
        'contact_info',
        'home_page_banner',
        'email',
        'address',
        'social_media'
    ];

}
