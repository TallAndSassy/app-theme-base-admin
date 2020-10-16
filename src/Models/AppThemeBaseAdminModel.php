<?php

namespace TallAndSassy\AppThemeBaseAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class AppThemeBaseAdminModel extends Model
{
    public $gaurded = [];// Defualt to no mass assignements
    public $fillable = ['name'];
    public $table = 'app-theme-base-admin';

    public function getUpperCasedName() : string
    {
        return strtoupper($this->name);
    }
}
