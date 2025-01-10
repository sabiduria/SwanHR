<?php

namespace App\Controller;

class GeneralController extends AppController
{
    /**
     * @return void
     */
    public function dashboard(): void
    {
        $this->viewBuilder()->setLayout('dashboard');
    }
}
