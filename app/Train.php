<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public function resetDate()
    {
        return date('d-n-Y', strtotime($this->data_partenza));
    }
}
