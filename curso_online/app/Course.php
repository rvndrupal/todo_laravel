<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    const PUBLISHED= 1;
    const PENDIG = 2;
    const REJECTED = 3;
}
