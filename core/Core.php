<?php

namespace WebLab;

/**
 * Core - test core app class
 * @author Andrey Lisnyak <munspel@ukr.net>
 */
class Core {

    protected $BASE_DIR = "";
    protected $BASE_URL = "";
    protected $config = array();

    /**
     * Статическая переменная, в которой мы
     * будем хранить экземпляр класса
     *
     * @var SingletonTest
     */
    protected static $_instance;

    /**
     * Закрываем доступ к функции вне класса.
     * Паттерн Singleton не допускает вызов
     * этой функции вне класса
     *
     */
    private function __construct() {
        /**
         * При этом в функцию можно вписать
         * свой код инициализации. Также можно
         * использовать деструктор класса.
         * Эти функции работают по прежднему,
         * только не доступны вне класса
         */
    }

    /**
     * Закрываем доступ к функции вне класса.
     * Паттерн Singleton не допускает вызов
     * этой функции вне класса
     *
     */
    private function __clone() {
        
    }

    /**
     * Статическая функция, которая возвращает
     * экземпляр класса или создает новый при
     * необходимости
     *
     * @return SingletonTest
     */
    public static function getInstance() {
        // проверяем актуальность экземпляра
        if (null === self::$_instance) {
            // создаем новый экземпляр
            self::$_instance = new self();
        }
        // возвращаем созданный или существующий экземпляр
        return self::$_instance;
    }

    /**
     * 
     * @param type $config
     */
    public function run($config) {

        if (is_file($config)) {
            $this->config = include $config;
        } else {
            // load default config   
        }
        $route = !empty($_REQUEST['q']) ? trim($_REQUEST['q']) : '';

        $this->handleRequest($route);
    }

    /**
     * 
     * @param type $uri
     */
    protected function handleRequest($uri) {
        if (empty($uri)) {
            $uri = $this->config["DefaultRoute"];
        }
        $request = explode('/', $uri);
        $className = '\\WebLab\\Controllers\\' . ucfirst(array_shift($request));
        $actionName = "do" . ucfirst(array_shift($request));
        $controller = new $className();
        $controller->init($this);
        if (method_exists($controller, $actionName)) {
            $controller->{$actionName}();
        }
    }

    /**
     * Return site name from config
     */
    public function getSiteName() {
        return $this->config["SiteName"];
    }

}
