<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Validate</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased w-[100vw] h-[100vh]">
        <form>
            <input
                type="text"
                required
                maxlength="100"
                placeholder="First Name and Last Name"
                name="name"
            />
            <input
                type="text"
                required
                maxlength="9"
                placeholder="Phone Number"
                name="phone"
            />
            <input
                type="email"
                required
                placeholder="Email Address"
                name="email"
            />
            <textarea
                required
                placeholder="Your message"
                name="text"
                maxlength="500"
            >
            </textarea>
            <input
                type="file"
                accept="image/jpeg, application/pdf, .pdf, .jpg"
                name="file"
            />
        </form>
    </body>
</html>
