<?php

namespace App\Controller;

class HomeController
{
    public function index(): void
    {
        echo "HomeController.index";
    }

    public function hello(): void
    {
        echo "HomeController.hello";
    }

    public function world(): void
    {
        echo "HomeController.world";
    }

    public function about(): void
    {
        echo "Author: Hai Nama Saya royandi Lagi belajar mvc ";
    }
}
