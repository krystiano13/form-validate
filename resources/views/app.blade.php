<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Validate</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="antialiased w-[100vw] h-[100vh] flex justify-center items-center bg-gray-200">
        <form enctype="multipart/form-data" method="POST" class="relative flex flex-col items-center w-[90%] md:w-96 justify-center bg-white p-6 pt-10 pb-10 rounded-xl">
            @csrf
            <div
                id="loading"
                class="absolute flex flex-col items-center w-[100%] h-[100%] justify-center bg-white
                p-6 pt-10 pb-10 rounded-xl hidden"
            >
                <span class="loader"></span>
            </div>
            <div
                id="status"
                class="absolute flex flex-col items-center w-[100%] h-[100%] justify-center bg-emerald-500
                p-6 pt-10 pb-10 rounded-xl hidden"
            >
                <p class="text-white font-bold text-3xl">Message Sent !</p>
            </div>
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
                id="fileInput"
                type="file"
                accept=".jpg, .pdf"
                name="file"
                required
                class="w-[80%] file:bg-emerald-500 file:border-none file:text-white file:cursor-pointer
                file:p-1 file:pr-5 file:pl-5 file:rounded-xl hover:file:bg-emerald-600 file:transition-colors"
            />
            <p class="hidden error" id="typeError">This file format is not allowed</p>
            <p class="hidden error" id="fileError">File is too big (max 5mb)</p>
            <section id="errors" class="w-[100%] flex flex-col items-center">
            </section>
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
