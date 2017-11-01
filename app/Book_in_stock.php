<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_in_stock extends Model
{
    /**
     * Get the phone record associated with the user.
     */

    public $incrementing=false;

//relation
    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }

    public function has_books()
    {
        return $this->belongsTo('App\Books');
    }
}
