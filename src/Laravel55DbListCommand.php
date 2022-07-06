<?php 


namespace Bogordesain\BackupManager;

use Illuminate\Console\Command;

/**
 * Class Laravel5DbListCommand
 * @package BackupManager\Laravel
 */
class Laravel55DbListCommand extends DbListCommand {
    use Laravel55Compatibility;
}
