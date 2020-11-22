<?php

namespace Africode\Coa\Commands;

use Illuminate\Console\Command;

class CoaCommand extends Command
{
    public $signature = 'coa';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
