{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css ')}}">--}}
    {{--<!-- Font Awesome -->--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}} ">--}}
    {{--<!-- Ionicons -->--}}
    {{--<link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css')}} ">--}}

    {{--<title>Product Masuk Exports All PDF</title>--}}
{{--</head>--}}
{{--<body>--}}
    <style>
        #product-masuk {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #product-masuk td, #product-masuk th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #product-masuk tr:nth-child(even){background-color: #f2f2f2;}

        #product-masuk tr:hover {background-color: #ddd;}

        #product-masuk th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>

    <table dir="rtl" id="product-masuk" width="100%">
        <thead>
        <tr>
            <td>المنتوج</td>
            <td>الكمية</td>
            <td>التاريخ</td>
            <td>المزود</td>
        </tr>
        </thead>
        @foreach($product_masuk as $p)
            @if (Auth::id() == $p->owner_id)
                <tbody>
                <tr>
                    <td>{{ $p->product->nama }}</td>
                    <td>{{ $p->qty }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->supplier->nama }}</td>
                </tr>
                </tbody>
            @endif
        @endforeach

    </table>


    {{--<!-- jQuery 3 -->--}}
    {{--<script src="{{  asset('assets/bower_components/jquery/dist/jquery.min.js') }} "></script>--}}
    {{--<!-- Bootstrap 3.3.7 -->--}}
    {{--<script src="{{  asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>--}}
    {{--<!-- AdminLTE App -->--}}
    {{--<script src="{{  asset('assets/dist/js/adminlte.min.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}


