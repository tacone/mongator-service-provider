<?php

namespace Mongator\Silex\Command;

use Silex\Application;
use Symfony\Component\Console\Command\Command;

class ContextualCommand extends Command
{

    /**
     * @var Application 
     */
    protected $silexApplication = null;

    public function __construct(Application $app)
    {
        $this->setSilexApplication($app);
        parent::__construct();
    }

    public function getSilexApplication()
    {
        return $this->silexApplication;
    }

    public function setSilexApplication(Application $silexApplication)
    {
        $this->silexApplication = $silexApplication;
        return $this;
    }

}
