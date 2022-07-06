<?php 

namespace Bogordesain\BackupManager;

use Illuminate\Console\Command;

/**
 * Class Laravel5DbBackupCommand
 * @package BackupManager\Laravel
 */
class Laravel55DbBackupCommand extends DbBackupCommand {
    use Laravel55Compatibility;
}
