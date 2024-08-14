<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedBacRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'bac_request_id',
        'email_sent_to',
        'message',
        'attachment',
    ];
    public function bacRequest()
    {
        return $this->belongsTo(BacRequest::class);
    }

}
