<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.21.9/css/uikit.min.css"
        integrity="sha512-qmn6fwScrOD5IvHCzweOcHgP6h2VVIvGD5Euq7ZJYtdwgIZ63xo6InrFPbc3D4cEgbi6/wWy33OjWvq4a9Sz8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.21.9/css/uikit.min.css"
        integrity="sha512-qmn6fwScrOD5IvHCzweOcHgP6h2VVIvGD5Euq7ZJYtdwgIZ63xo6InrFPbc3D4cEgbi6/wWy33OjWvq4a9Sz8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="global.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid p-0 m-0">
        @include('layouts.header')
        <div class="row h-full">
            <div class="col-sm-2 col-md-2 shadow rounded">
                @include('layouts.sidebar')
            </div>
            <div class="col-sm-10 col-md-10">
                @yield('content')
                @include('layouts.sweetalert')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
