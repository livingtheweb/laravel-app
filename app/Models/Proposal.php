<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proposal extends Model
{
    use HasFactory;

    // Lot of proposals may belong to one user
    public function user(): BelongsTo
    {
        return $this-> belongsTo(User::Class);
    }
    public function usersLikedThis(): BelongsToMany
    {
        return $this-> belongsToMany(User::Class);
    }
}
