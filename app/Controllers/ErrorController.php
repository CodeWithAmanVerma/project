<?php

class ErrorController extends Controller
{
    function _404()
    {
        $this->render("404");
    }

    function _500()
    {
        $this->render("500");
    }
}
