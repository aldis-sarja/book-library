<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Library</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="bg-warning-subtle">
<a href="/"><img src="./images/home.svg" width="24px" height="24px" alt="NO IMAGE" class="mx-1 my-1" /></a>
<div class="px-3 py-3">
    <h2 class="mx-auto" style="width: 300px;">Books Library</h2>

    <form action="/search" method="GET" class="py-3 mx-auto" style="width: 300px;" >
        <input type="text" name="search" placeholder="Book or Author..." class="rounded-start-pill bg-warning-subtle"
        required
        >
        <button type="submit" class="mx-1 px-2 rounded-end-pill bg-warning-subtle">
            Search
        </button>
    </form>


    @if ($books->count() < 1)
        <h3 class="mx-auto" style="width: 300px;">Sorry, no books found!</h3>
    @else
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">
                Book
            </th>
            <th scope="col">
                Author
            </th>
            <th scope="col" class="text-center">
                Available
            </th>
            <th scope="col" class="text-end">
                Times taken in this month
            </th>
            <th scope="col" class="text-end">
                Times taken
            </th>
        </tr>
        </thead>

        <tbody class="">

        @foreach ($books as $book)
            <tr class="hover:border-green-600 dark:hover:border-green-300">
                <td>
                    {{ $book->getTitle() }}
                </td>
                <td>
                    {{ $book->getAuthor() }}
                </td>
                <td class="text-center">
                    @if ($book->getHaveTaken())
                        <img src="./images/cross-svgrepo-com.svg" width="16px" height="16px" alt="NO IMAGE">
                    @else
                        <img src="./images/check-mark-svgrepo-com.svg" width="16px" height="16px" alt="NO IMAGE">
                    @endif
                </td>
                <td class="text-end">
                    {{ $book->getTakenInCurrentMonth() }}
                </td>
                <td class="text-end">
                    {{ $book->getTotalTaken() }}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    @endif
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>
</html>
