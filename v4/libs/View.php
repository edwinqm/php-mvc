<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 10/20/2018
 * Time: 09:29
 */

class View
{
    public function show($view, $vars = [])
    {
        $config = SConfig::singleton();

        // ej. views/product/listar.php
        $path = $config->get('viewsFolder') . $view . '.php';

        if (!file_exists($path)) {
            trigger_error(
                'La vista no existe.',
                E_USER_NOTICE
            );
            return false;
        }

        // paso de parametros
        if (is_array($vars)) {
            foreach ($vars as $key => $value) {
                $$key = $value;
            }
        }

        require $path;

    }

}