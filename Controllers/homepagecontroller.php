<?php

namespace Controller\HomepageController;

class Homepage
{
    public function index()
    {
        include "./Views/header.html";
        include "./Views/signupForm.html";
    }
}

?>
