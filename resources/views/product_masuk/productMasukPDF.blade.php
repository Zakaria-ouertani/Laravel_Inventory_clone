<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>


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
    <!-- <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table> -->


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
            <td><b>Supplier</b></td>
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

    {{--<hr  size="2px" color="black" align="left" width="45%">--}}


    <table border="0" width="80%">
        <tr align="right">
            <td>Best Regard</td>
        </tr>
    </table>

    <!-- <table border="0" width="80%">
        <tr align="right">
            <td><img src="https://upload.wikimedia.org/wikipedia/en/f/f4/Timothy_Spall_Signature.png" width="100px" height="100px"></td>
        </tr>

    </table> -->
    <table border="0" width="80%">
        <tr align="right">
            <td>I M S</td>
        </tr>
    </table>
</div>
