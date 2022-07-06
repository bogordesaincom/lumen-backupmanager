<?php 

namespace Bogordesain\BackupManager;

use Illuminate\Console\Command;

/**
 * Class Laravel55DbRestoreCommand
 * @package BackupManager\Laravel
 */
class LaravelDbRestoreCommand extends DbRestoreCommand {
    use LaravelCompatibility;
}
