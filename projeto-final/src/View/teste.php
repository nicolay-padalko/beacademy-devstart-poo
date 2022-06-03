<?php
declare(strict_types=1);

namespace App\Controller;

class IndexController {
    public function indexAction(): void
    {
        echo '<h1> Ola mundo, estou dentro de uma action, dentro do controller, esse é uma view</h1>';
    }
}