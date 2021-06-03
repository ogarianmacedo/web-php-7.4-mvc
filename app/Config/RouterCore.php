<?php

namespace App\Config;

use ArrayIterator;
use Exception;
use ReflectionClass;

/**
 * Class RouterCore
 * @package App\Config
 */
class RouterCore
{
    /**
     * @var string
     */
    private string $uri;

    /**
     * @var string
     */
    private string $method;

    /**
     * @var array
     */
    private array $getArr = [];

    /**
     * RouterCore constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->initialize();
        require_once "../App/Routes/route.php";
        $this->execute();
    }

    private function initialize(): void
    {
        $this->method = $_SERVER['REQUEST_METHOD'];

        $uri = $_SERVER['REQUEST_URI'];

        if (strpos($uri, '?')) {
            $uri = mb_substr($uri, 0, strpos($uri, '?'));
        }

        $ex = explode('/', $uri);

        $uri = $this->normalizeURI($ex);

        $this->uri = implode('/', $this->normalizeURI($uri));
    }

    /**
     * @param $router
     * @param $call
     */
    private function get($router, $call)
    {
        $this->getArr[] = [
            'router' => $router,
            'call' => $call
        ];
    }

    /**
     * @param $router
     * @param $call
     */
    private function post($router, $call)
    {
        $this->getArr[] = [
            'router' => $router,
            'call' => $call
        ];
    }

    /**
     * @throws Exception
     */
    private function execute()
    {
        switch ($this->method) {
            case 'GET':
                $this->executeGet();
                break;
            case 'POST':
                $this->executePost();
                break;
        }
    }

    /**
     * @throws Exception
     */
    private function executeGet()
    {
        foreach ($this->getArr as $get) {
            $r = substr($get['router'], 1);

            if (substr($r, -1) == '/') {
                $r = substr($r, 0, -1);
            }
            if ($r == $this->uri) {
                if (is_callable($get['call'])) {
                    $get['call']();
                    break;
                } else {
                    $this->executeController($get['call']);
                }
            }
        }
    }

    /**
     * @throws Exception
     */
    private function executePost()
    {
        foreach ($this->getArr as $get) {
            $r = substr($get['router'], 1);

            if (substr($r, -1) == '/') {
                $r = substr($r, 0, -1);
            }

            if ($r == $this->uri) {
                if (is_callable($get['call'])) {
                    $get['call']();
                    return;
                }

                $this->executeController($get['call']);
            }
        }
    }

    /**
     * @param $get
     * @throws Exception
     */
    private function executeController($get)
    {
        $ex = explode('@', $get);
        if (!isset($ex[0]) || !isset($ex[1])) {
            throw new Exception('Dados inválidos', 404);
        }

        $cont = 'App\\Controllers\\' . $ex[0];
        if (!class_exists($cont)) {
            throw new Exception('Dados inválidos', 404);
        }

        if (!method_exists($cont, $ex[1])) {
            throw new Exception('Dados inválidos', 404);
        }

        call_user_func_array([
            new $cont(),
            $ex[1]
        ], [new Request]);
    }

    /**
     * @param $arr
     * @return array
     */
    private function normalizeURI($arr): array
    {
        return array_values(array_filter($arr));
    }
}
