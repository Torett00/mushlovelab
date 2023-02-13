<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minicommande extends Model
{
    use HasFactory;
    protected $table = 'minicommande';
    protected $primaryKey = 'id';
    protected $fillable = [
        'quantite',
        'pict',
        'productname',
        'product_id',
        'user_id',
        
    ];
    public function product()
    {
        return $this->hasone(product::class);
    }
}
