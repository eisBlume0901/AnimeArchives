<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <!--            font awesome cheat sheet https://fontawesome.com/v4/cheatsheet/-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        customPurple: "#211951",
                        customDarkPink: "#FF2E9F",
                        customLightPink: "#FFCAD4"
                    },
                },
            },
        };
    </script>
    <title>Anime Archives | Anime Search Engine</title>
</head>
<body class="mb-48">
<nav class="flex justify-between items-center mb-4 bg-customPurple">
    {{--    We have to link back to our home page which is the index.blade.php template--}}
    <a href="/"
    {{--       Instead of using images/logo.png, we can use the asset() function to fetch the image from the public directory.--}}
    ><img class="w-40 mx-10" src="{{asset('images/logo.png')}}" alt="/" class="logo"
        /></a>
    <ul class="flex flex-col mx-10 text-lg text-customPurple">
        <li class="my-1.5">
            <a href="register.html" class="text-white hover:text-customLightPink"
            ><i class="mx-1.5 fa-solid fa-user text-white hover:text-customLightPink"></i> Register</a
            >
        </li>
        <li class="my-1.5">
            <a href="login.html" class="text-white hover:text-customLightPink"
            ><i class="mx-1.5 fa-solid fa-arrow-right-to-bracket text-white hover:text-customLightPink"></i>
                Login</a
            >
        </li>
    </ul>
</nav>
<main>
    @yield('content')
</main>
</body>
<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-customPurple text-white h-24 mt-24 opacity-90 md:justify-center"
>
    <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

    <a
        href="create.html"
        class="absolute top-1/3 right-10 bg-customPurple text-white hover:text-customLightPink hover:rounded-lg hover:bg-customDarkPink py-2 px-5"
    >Post Anime</a
    >
</footer>
</body>
</html>
