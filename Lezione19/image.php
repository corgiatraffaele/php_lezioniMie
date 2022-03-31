<?php

    //ridimensionare un immagine alla larghezza di 50px
    //composer require spatie/image
    require 'vendor/autoload.php';

    use Spatie\Image\Image;

    Image:: load('image.JPG')   //apre il filesist e si prende l'img
    ->width(50)               //modifica
    ->save('newimage.jpg');     //salva l'img

    