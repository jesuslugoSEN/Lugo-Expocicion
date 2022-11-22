<?php
declare(strict_types=1);
namespace App\classes;
use App\View;
use Couchbase\View;


class Home
{
    public function index(): string
    {
        //mvc modelo de vista

        return (new View('index'))->render();


        /* uso de la cookies-buffer _ video 59
        echo 1;
        setcookie(
            'userName',
            'Gio',
            time() + (24 * 60 * 60),
        );
        return View::make('index', $_GET)->render(); */


        //video 60



    }

    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);
        $filePath = STORAGE_PATH .'/' . $_FILES['receipt']['name'];
        var_dump(pathinfo($_FILES['receipt']['tmp_name']));
        echo '<pre>';
        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        echo '<pre>';
        var_dump(pathinfo($filePath));

    }

}


