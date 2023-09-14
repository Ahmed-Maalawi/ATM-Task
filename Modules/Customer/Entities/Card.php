<?php

namespace Modules\Customer\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Customer\Database\factories\CardFactory;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'pin', 'user_id'];

    protected $hidden = ['pin'];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory()
    {
        return CardFactory::new();
    }
}
