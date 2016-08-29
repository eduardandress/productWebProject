<?php

namespace Core\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    protected $name;

    protected $description;

    protected $mainPictureURL;

    protected $fillable = array('name', 'description', 'mainPictureURL');
}
