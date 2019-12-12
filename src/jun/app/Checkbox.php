<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkbox extends Model
{
    function getNameIconpath(){
      return '<a href="' . $this->icon_path . '">' . $this->name . '</a>';
    }
}
