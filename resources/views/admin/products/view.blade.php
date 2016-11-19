@extends('admin.master')

@section('scripts')

@stop

@section('styles')
 <style>
     table form{display: inline-block}
 </style>
@stop

@section('title')
    All Products
@stop

@section('content')

    <div class="col-md-12" style="background: #fff;padding: 20px">
        <table class="table table-hover">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Visibility</th>
                <th>Quantity</th>
                <th style="width: 168px;"></th>
            </tr>

            <tr>
                <td>Coconut</td>
                <td>2026-05-09</td>
                <td>Private</td>
                <td>50</td>
                <td>
                    <a href="{{url('products')}}/1">
                        <button class="btn btn-default btn-sm">View</button>
                    </a>
                    <a href="{{url('products')}}/edit/1">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </a>
                    <a href="">
                        <form action="{{url('products')}}" method="delete">
                            <input type="hidden" value="1" name="product_id">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </a>
                </td>
            </tr>

            <tr>
                <td>Coconut</td>
                <td>2026-05-09</td>
                <td>Private</td>
                <td>50</td>
                <td>
                    <a href="{{url('products')}}/1">
                        <button class="btn btn-default btn-sm">View</button>
                    </a>
                    <a href="{{url('products')}}/edit/1">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </a>
                    <a href="">
                        <form action="{{url('products')}}" method="delete">
                            <input type="hidden" value="1" name="product_id">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </a>
                </td>
            </tr>

            <tr>
                <td>Coconut</td>
                <td>2026-05-09</td>
                <td>Private</td>
                <td>50</td>
                <td>
                    <a href="{{url('products')}}/1">
                        <button class="btn btn-default btn-sm">View</button>
                    </a>
                    <a href="{{url('products')}}/edit/1">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </a>
                    <a href="">
                        <form action="{{url('products')}}" method="delete">
                            <input type="hidden" value="1" name="product_id">
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </a>
                </td>
            </tr>
        </table>
    </div>


@stop