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

        #table-data tr:nth-child(even){background-color: #f2f2f2;}

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
            <td width="70px"><b>فاتورة</b></td>
            <td width="">: {{ $product_masuk->id }}</td>
            <td width="30px"><b>تاريخ التصدير</b></td>
            <td>: {{ $product_masuk->tanggal }}</td>
        </tr>

        <tr>
            <td><b>الهاتف</b></td>
            <td>: {{ $product_masuk->supplier->telepon }}</td>
            <td><b>العنوان</b></td>
            <td>: {{ $product_masuk->supplier->alamat }}</td>
        </tr>

        <tr>
            <td><b>المزود</b></td>
            <td>: {{ $product_masuk->supplier->nama }}</td>
            <td><b>البريد الالكتروني</b></td>
            <td>: {{ $product_masuk->supplier->email }}</td>
        </tr>

        <tr>
            <td><b>المنتوج</b></td>
            <td >: {{ $product_masuk->product->nama }}</td>
            <td><b>الكمية</b></td>
            <td >: {{ $product_masuk->qty }}</td>
        </tr>

    </table>

</div>
