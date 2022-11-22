<?php
declare(strict_types=1);
namespace App\classes;

class Invoice
{
    public function index(): string
    {
        setcookie(
            'userName',
            'Gio',
            time() - (24 * 60 * 60),
        );
        return 'Invoices';
    }

    public function create(): string
    {
        return '<form action="/invoices/create" method="post"><label>Amount</label><input type="text"name="amount"></form';

    }
    public function Store()
    {
        $amount = $_POST['amount'];
        var_dump($amount);
    }

}