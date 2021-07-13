<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>laravel-comics</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <head>
            <h1>Header</h1>
        </head>

        <main>
            <section class="container">
                <div class="cards">
                    @foreach ($comics as $item)
                        <div class="card">
                            <img src="{{ $item["thumb"] }}" alt="">
                            <p>{{ $item["series"] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>

        <footer>
            <h1>Footer</h1>
        </footer>

    </body>
</html>