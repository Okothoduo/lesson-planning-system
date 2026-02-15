<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ArtisanCommand extends Command
{
    protected $signature = 'command:name';
    protected $description = 'Your command description';

    public function handle()
    {
        // Your command logic
        \Log::info('Artisan command executed');
    }
}