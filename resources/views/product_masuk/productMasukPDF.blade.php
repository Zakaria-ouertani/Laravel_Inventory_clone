<!doctype html>
<html>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>

<style>
        #table-data {
            font-family: DejaVu Sans, Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table-data td, #table-data th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table-data td:nth-child(odd){background-color: #f2f2f2;}
        #table-data tr:hover {background-color: #ddd;}

        #table-data th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
</style>

<body>
<div class="invoice-box">


    <table border="0" dir="rtl" id="table-data" width="100%">
        <tr>
            <td width="30px"><b>تاريخ التصدير</b></td>
            <td>: {{ $product_masuk->tanggal }}</td>
            <td><b>الهاتف</b></td>
            <td>: {{ $product_masuk->supplier->telepon }}</td>
        </tr>

        <tr>
            <td><b>العنوان</b></td>
            <td>: {{ $product_masuk->supplier->alamat }}</td>
            <td><b>المزود</b></td>
            <td>: {{ $product_masuk->supplier->nama }}</td>
        </tr>

        <tr>
            <td><b>البريد الالكتروني</b></td>
            <td>: {{ $product_masuk->supplier->email }}</td>
            <td><b>المنتوج</b></td>
            <td >: {{ $product_masuk->product->nama }}</td>
        </tr>

        <tr>
            <td><b>الكمية</b></td>
            <td >: {{ $product_masuk->qty }}</td>
        </tr>

    </table>

</div>
