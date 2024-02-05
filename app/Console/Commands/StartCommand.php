<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StartCommand extends Command
{
    protected $signature = 'start';
    protected $description = 'Handle the /start command';

    public function handle()
    {
        $this->info('Привет! Это приветственное сообщение для команды /start.');
    }
}
