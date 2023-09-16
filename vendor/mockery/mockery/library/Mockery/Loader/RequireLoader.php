<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license   https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link      https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery\Loader;

use Mockery\Generator\MockDefinition;
use Mockery\Loader\Loader;

class RequireLoader implements Loader
{
<<<<<<< HEAD
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $lastPath = '';

    public function __construct($path = null)
    {
        $this->path = realpath($path) ?: sys_get_temp_dir();

        register_shutdown_function([$this, '__destruct']);
=======
    protected $path;

    public function __construct($path = null)
    {
        $this->path = realpath($path) ?: sys_get_temp_dir();
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }

    public function __destruct()
    {
<<<<<<< HEAD
        $files = array_diff(
            glob($this->path . DIRECTORY_SEPARATOR . 'Mockery_*.php')?:[],
            [$this->lastPath]
        );

        foreach ($files as $file) {
=======
        foreach (glob($this->path . DIRECTORY_SEPARATOR . 'Mockery_*.php') as $file) {
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
            @unlink($file);
        }
    }

    public function load(MockDefinition $definition)
    {
        if (class_exists($definition->getClassName(), false)) {
            return;
        }

<<<<<<< HEAD
        $this->lastPath = sprintf('%s%s%s.php', $this->path, DIRECTORY_SEPARATOR, uniqid('Mockery_'));

        file_put_contents($this->lastPath, $definition->getCode());

        if (file_exists($this->lastPath)){
            require $this->lastPath;
        }
=======
        $fileName = sprintf('%s%s%s.php', $this->path, DIRECTORY_SEPARATOR, uniqid('Mockery_'));

        file_put_contents($fileName, $definition->getCode());

        require $fileName;
>>>>>>> 4c584ea2b7d485aa30030a331a53e1e239cdb6a1
    }
}
