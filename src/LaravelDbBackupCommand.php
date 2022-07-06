<?php 

namespace Bogordesain\BackupManager;

use Illuminate\Console\Command;

/**
 * Class Laravel5DbBackupCommand
 * @package BackupManager\Laravel
 */
class LaravelDbBackupCommand extends DbBackupCommand {
    use LaravelCompatibility;
}
