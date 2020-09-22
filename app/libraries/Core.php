<?php

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    protected $url = "";

    public function __construct()
    {
        $this->url = $this->getUrl();

        $this->setCurrentControllerFromUrl();
        $this->setMethodAndPAramsFromUrl();

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    private function setCurrentControllerFromUrl()
    {
        if (file_exists('../app/controllers/' . ucwords($this->url[0]) . '.php')) {
            $this->currentController = ucwords($this->url[0]);
            unset($this->url[0]);
        }

        require_once '../app/controllers/' .  $this->currentController . '.php';
        $this->currentController = new $this->currentController;
    }

    private function setMethodAndParamsFromUrl()
    {
        if (isset($this->url[1])) {
            if (method_exists($this->currentController, $this->url[1])) {
                $this->currentMethod = $this->url[1];

                unset($this->url[1]);
            }
            $this->params = $this->url ? array_values($this->url) : [];
        }
    }

    private function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
