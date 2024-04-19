<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opps!</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body style="background-color: rgb(205, 205, 205)">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5 text-center text-lg text-danger">Opps!..</h1>
            <h3 class=" text-center text-lg">403 Access denied</h3>
            <p class="lead text-center">
                You are not authorized to access this page, please return <a href="" id="backButton">back</a>
            </p>
        </div>
    </main>
    <script>
        document.getElementById("backButton").addEventListener("click", function(event) {
                event.preventDefault(); // Prevent the default behavior of the anchor tag
                history.back(); // Navigate back to the previous page
            });
    </script>
</body>

</html>