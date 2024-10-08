<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class Transfer extends Model
{
    public bool $incrementing = false;
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'transferences';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['id','payer_id', 'payee_id', 'value', 'confirmed_at'];

    public function payer()
    {
        return $this->belongsTo(User::class, 'payer_id');
    }

    public function payee()
    {
        return $this->HasOne(User::class, 'payee_id');
    }

    public function setConfirmedAt(string $date)
    {
        $this->confirmed_at = $date;
    }
}
