@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<style>
    /* Custom CSS for RTL layout */
        .float-right {
            float: right;
    }
</style>
<div class="row justify-content-end">
   
    @if (Auth::id() == '1')
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ \App\User::count() }}</h3>

                <p>المستخدمون</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-secret"></i>
            </div>
            <a href="/user" class="small-box-footer">المزيد<i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    @endif
    <!-- ./col -->
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ \App\Category::where('owner_id', Auth::id())->count() }}<sup style="font-size: 20px"></sup></h3>

                <p>الفئة</p>
            </div>
            <div class="icon">
                <i class="fa fa-list"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ \App\Product::where('owner_id', Auth::id())->count() }}</h3>
                <p>المنتجات</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ \App\Customer::where('owner_id', Auth::id())->count() }}</h3>

                <p>الزبون</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('customers.index') }}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->



    
    <!-- ./col -->
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ \App\Supplier::where('owner_id', Auth::id())->count() }}<sup style="font-size: 20px"></sup></h3>

                <p>المزود</p>
            </div>
            <div class="icon">
                <i class="fa fa-signal"></i>
            </div>
            <a href="{{ route('suppliers.index') }}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>{{ \App\Product_Masuk::where('owner_id', Auth::id())->count() }}</h3>

                <p>المشتريات</p>
            </div>
            <div class="icon">
                <i class="fa fa-cart-plus"></i>
            </div>
            <a href="{{ route('productsIn.index') }}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-cs-6 float-right">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ \App\Product_Keluar::where('owner_id', Auth::id())->count()  }}</h3>

                <p>المبيعات</p>
            </div>
            <div class="icon">
                <i class="fa fa-minus"></i>
            </div>
            <a href="{{ route('productsOut.index') }}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div id="container" class=" col-cs-6 float-right"></div>
</div>

@endsection

@section('top')
@endsection
