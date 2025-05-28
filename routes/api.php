<?php
use App\Http\Controllers\Callbacks;

use Illuminate\Support\Facades\Route;

Route::get('handleJSONCampaigns', [Callbacks::class, 'handleJSONCampaigns']);
