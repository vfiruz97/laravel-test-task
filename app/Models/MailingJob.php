<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingJob extends Model
{
    use HasFactory;

    public const STATUS_PANDING = 'panding';
    public const STATUS_SUCCESS = 'success';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email_to',
        'post_id',
        'status',
        'sent_at',
    ];
}
