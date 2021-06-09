<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('notification_settings', 'about_app', 'phone', 'mail', 'fb_link', 'tw_link', 'youtube_link', 'insta_link', 'whatsapp_link', 'google_link');

}
