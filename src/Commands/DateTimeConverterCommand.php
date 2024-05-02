<?php

namespace Mehasan\DateTimeConverter\Commands;

use Illuminate\Console\Command;

class DateTimeConverterCommand extends Command
{
    public $signature = 'laravel-datetime-converter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
