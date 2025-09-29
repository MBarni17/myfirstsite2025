<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public static function csoportlista() {
        $diakok = [
            'Barney Mark',
            'Christoph Cook',
            'Hungarian Bale',
            'Kevin From Hargita'
        ];

        return $diakok;
    }
}
