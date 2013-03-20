<?php namespace Sitecore\Bootstrap;

use Illuminate\View\Environment;
use Illuminate\Config\Repository;

class Bootstrap {

    /**
     * Illuminate view environment.
     *
     * @var Illuminate\View\Environment
     */
    protected $view;

    /**
     * Illuminate config repository.
     *
     * @var Illuminate\Config\Repository
     */
    protected $config;

    /**
     * Create a new profiler instance.
     *
     * @param  Illuminate\View\Environment  $view
     * @param  Illuminate\Config\Repository  $config
     * @return void
     */
    public function __construct(Environment $view, Repository $config)
    {
        $this->view = $view;
        $this->config = $config;
    }

    public function loadStyles()
    {
        return $this->view->make('bootstrap::styles', array('responsive' => $this->config->get('bootstrap::responsive', true)));
    }

    public function loadScripts()
    {
        return $this->view->make('bootstrap::scripts');
    }

}