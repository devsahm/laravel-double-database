<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactionable extends Model
{
	protected $connection ='mysql2';
    protected $fillable=[
            'user_id',
            'transactionable_id',
            'transactionable_type',
            'entity_id',
            'entity_name',
            'transaction_state_id',
            'money_flow',
            'activity_title',
            'balance',
            'thumb',
            'gross',
            'fee',
            'net',
            'currency_id',
            'currency_symbol',
       
    ];
}
