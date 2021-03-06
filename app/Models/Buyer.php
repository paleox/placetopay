<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasOne};

class Buyer extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function payments() : HasMany
    {
        return $this->hasMany(Payment::class, 'buyer_id', 'id');
    }

    public function documentType() : BelongsTo
    {
        return $this->belongsTo(DocumentType::class, 'document_type_id');
    }
}
