<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorInfo extends Model
{
    protected $table = "Author_info";
    public $timestamps = false;
    public function Author() {
        return $this->belongsTo("App\Author");
    }
}
