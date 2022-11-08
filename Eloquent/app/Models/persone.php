<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class persone extends Model
{
    public function Number(){
        return $this->hasOne(Number::class);
    }
}
