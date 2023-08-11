<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo @yield('title')</title>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
    <x-navbar />
    @section("alert")
    @show
    <section>
        <div class="section-body m-5">
            @section("body")
            @show
        </div>
    </section>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
