<?php

namespace Core\Models\Company;

use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
    protected $table = 'company';

    protected $name;

    protected $description;

    protected $fillable = array('name', 'description','missionStatement', 'visionStatement', 'mainLandPhone', 'mainMobilePhone', 'mainEmail', 'mainFacebookProfile', 'mainTwitterProfile', 'mainGooglePlusProfile', 'mainInstagramProfile', 'mainLinkedInProfile', 'mainCountry', 'mainState', 'mainCity', 'mainZIPCode', 'mainAddress');
}
