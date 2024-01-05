<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
            integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <script
            src="https://kit.fontawesome.com/739e3ae0dc.js"
            crossorigin="anonymous"
    ></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg fixed-top bg-primary-subtle">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="row mt-5 pt-4">
        <div class="col-md-12 m-auto">
            <div class="card">
                <div class="card-header bg-primary">List of Bicycles</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Owner</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Price</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Category</th>
                            <th scope="col">Wheel Size</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($bikes as $bike)
                                <tr >
                                    <td>{{ $bike->owner }}</td>
                                    <td>{{ $bike->brand }}</td>
                                    <td>{{ $bike->price }}</td>
                                    <td>{{ $bike->gender ? "Men's Bike" : "Women's Bike"  }}</td>
                                    <td>{{ $bike->category }}</td>
                                    <td>{{ $bike->wheel_size }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
</body>
</html>
