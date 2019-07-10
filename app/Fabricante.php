<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    //

    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['nome','cidade','produto'];


    public function produtos()
    {
        # code...
        return $this->hasMany('App\Produto');
    }

}
