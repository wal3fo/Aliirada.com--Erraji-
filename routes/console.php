<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Support\Facades\Schedule;

Schedule::command('app:membership-auto-invoicing')->everyMinute();