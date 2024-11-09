<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>ecommerce</title>

    </head>
    <body >
        <livewire:header />
        <livewire:hero-section />
        <livewire:products-section />
        <livewire:product-details />

    </body>
</html>
