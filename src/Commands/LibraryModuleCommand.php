<?php

namespace Aadi\LibraryModule\Commands;

use Illuminate\Console\Command;

class LibraryModuleCommand extends Command
{
    public $signature = 'library-module';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
