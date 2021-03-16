<?php


if(!function_exists('page_title')) {
    function page_title(?string $title = null): string {

        return $title 
        ? config('app.name') . ' | ' . $title 
        : config('app.name');
    }
}