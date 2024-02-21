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
    <body class="antialiased w-[100vw] h-[100vh] flex justify-center items-center bg-gray-200">
        <form class="flex flex-col items-center w-[90%] md:w-96 justify-center gap-7 bg-white p-6 pt-10 pb-10 rounded-xl">
            <input
                type="text"
                required
                maxlength="100"
                placeholder="First Name and Last Name"
                name="name"
                class="border-2 p-2 w-[80%] rounded-lg"
            />
            <input
                type="text"
                required
                maxlength="9"
                placeholder="Phone Number"
                name="phone"
                class="border-2 p-2 w-[80%] rounded-lg"
            />
            <input
                type="email"
                required
                placeholder="Email Address"
                name="email"
                class="border-2 p-2 w-[80%] rounded-lg"
            />
            <textarea
                required
                placeholder="Your message"
                name="text"
                maxlength="500"
                class="border-2 p-2 w-[80%] rounded-lg max-h-52 min-h-12"
            ></textarea>
            <input
                type="file"
                accept=".pdf, .jpg"
                name="file"
                class="w-[80%] file:bg-emerald-500 file:border-none file:text-white file:cursor-pointer
                file:p-1 file:pr-5 file:pl-5 file:rounded-xl hover:file:bg-emerald-600 file:transition-colors"
            />
            <button
                class="hover:bg-emerald-600 transition-colors bg-emerald-500
                text-white p-2 pr-12 pl-12 text-xl rounded-xl"
                type="submit"
            >
                Send
            </button>
        </form>
    </body>
</html>
