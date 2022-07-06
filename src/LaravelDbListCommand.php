<?php 


namespace Bogordesain\BackupManager;

use Illuminate\Console\Command;

/**
 * Class Laravel5DbListCommand
 * @package BackupManager\Laravel
 */
class LaravelDbListCommand extends DbListCommand {
    use LaravelCompatibility;
}
