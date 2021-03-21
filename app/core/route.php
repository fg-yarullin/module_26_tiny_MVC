<?php

/**
 * Класс-маршрутизатор для определения запрашиваемой страницы.
 * > цепляет классы контроллера и моделей;
 * > создает экземпляры контроллеров и вызывает действия этих контроллеров
 */

 class Route {
     public function __construct() {}

     static function run() {
         // контроллер и действия по умолчанию
         $controller = 'Main';
         $action = 'index';

        // if (!empty($_GET)) {
        //     $request = $_GET['url'];
        //     print_r($_GET);
        // };

         $routes = explode('/', $_SERVER['REQUEST_URI']);
        // print_r($routes);

        // получаем имя контроллера
        if (!empty($routes)) {
            if (!empty($routes[0])) {
                $action = $routes[0];
            }
            if (!empty($routes[1])) {
                $controller =  $routes[1];
            }
        }
        // добавляем префиксы

        $model_name = 'Model_' . ucfirst($controller);
        $controller_name = 'Controller_' . ucfirst($controller);
        $action_name = 'action_' . $action;

        // подцепляем файл с классом моделя (файла модели может и не быть)
        // $model_file = strtolower($model_name) . '.php';
        // $model_path = __DIR__ . '/models/' . $model_file;
        
        // if (file_exists($model_path)) {
        //     include __DIR__ . '/models/' . $model_file;
        // };

        // подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name) . '.php';
        // $controller_path = __DIR__ . '/../controllers/' . $controller_file;

        // if (file_exists($controller_path)) {
        //     include __DIR__ . '/../controllers/' . $controller_file;
        // } else {
        //     /**
        //      * Правильно было бы кинут здесь исключение,
        //      * но для упрощения сразу сделаем ридирект на страницу 404
        //      */
        //     Route::ErrorPage404();
        // }

            // echo 'action: ' . $action . '<br>';
            // echo 'controller: ' . $controller_name . '<br>';
            // echo 'model: ' . $model_name . '<br>';
            // echo 'action_name: ' . $action_name . '<br>';
        if (!class_exists($controller_file) && !class_exists($model_name)) {
            Route::ErrorPage404();
            return;
        }

        // создаем контроллер
        $controller = new $controller_name($model_name);
        $action = $action_name;

        if (method_exists($controller, $action)) {
            // echo 'action: ' . $action . '<br>';
            // echo 'controller: ' . $controller_name . '<br>';
            // echo 'model: ' . $model_name . '<br>';
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
     }

     public static function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'];
        // echo $host . '?error=404';
        // header('HTTP/1.1 404 NOT FOUND');
        // header('Status: 404 Not Found');
        // header('location:' . $host . '/404');
        //header('location:' . $host . '?error=404');
        http_response_code(404);
        include __DIR__ . '/../views/templates/404_view.php'; // provide your own HTML for the error page
        die();
     }
 }