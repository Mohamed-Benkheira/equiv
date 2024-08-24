<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclinedBacRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'bac_request_id',
        'email_sent_to',
        'message',
    ];

    /**
     * Relationship with the BacRequest model
     */
    public function bacRequest()
    {
        return $this->belongsTo(BacRequest::class);
    }
}
