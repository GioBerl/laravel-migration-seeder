@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Lista Prodotti</h1>

            <table class="table mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th>
                        <th scope="col">Availability</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodotti as $prodotto)
                    <tr>
                        <th scope="row">{{$prodotto->id}}</th>
                        <td>{{$prodotto->description}}</td>
                        <td>{{$prodotto->availability}}</td>
                        <td>{{$prodotto->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('page-title', 'lista prodotti')