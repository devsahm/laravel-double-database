<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentWallet extends Model
{
    protected $fillable=[
    	'id',
    	'agent_id',
    	'balance',
    	'created_at',
    	'updated_at',

    ];
}
