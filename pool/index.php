use App\WorkerPool;

require 'vendor/autoload.php';

$pool = new WorkerPool();
$worker1 = $pool->get();
$worker2 = $pool->get();

var_dump('Workers pool contain: ' . count($pool));

$pool->dispose($worker1);
