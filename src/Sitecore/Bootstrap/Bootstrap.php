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
     * Create a new bootstrap instance.
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

    /**
     * Display the bootstrap css scripts
     *
     * @return Illuminate\View\View
     */
    public function loadStyles()
    {
        return $this->view->make('bootstrap::styles', array('responsive' => $this->config->get('bootstrap::responsive', true)));
    }

    /**
     * Display the bootstrap javascript scripts
     *
     * @return Illuminate\View\View
     */
    public function loadScripts()
    {
        return $this->view->make('bootstrap::scripts');
    }

}