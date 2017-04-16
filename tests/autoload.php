include_once __DIR__.'/../vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr0("PHPUnitTutorial\", __DIR__, true);
$classLoader->register(); 
