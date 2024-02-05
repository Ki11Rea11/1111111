<?php

namespace App\Models;

use App\Enums\StatusAppealEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;




class Appeal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'status' => StatusAppealEnum::class,
    ];


}
