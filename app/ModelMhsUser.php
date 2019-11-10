<?php

namespace App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;

class ModelMhsUser extends Model
{
     public function down()
    {
        Schema::dropIfExists('mhsuser');
    }
}
