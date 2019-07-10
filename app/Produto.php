<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{


    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['nome', 'peso','id'];

    /**
     * get Created_at para formatar na data brasileira
     *
     */

    //Relacionamento
    public function fabricante()
    {
        # code...
        return $this->belongsTo('App\Fabricante');
    }


}
