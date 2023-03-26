@extends('layouts.main')
@section('container')
    <h1>ini about</h1>
    <!-- video ke 3 versi 1 -->
    <!-- <h3>Galih Mahendra Putra</h3>
            <p>galihmahendrastudio@gmail.com</p>
            <img width="100" src="img/pp.png" alt="pp"> -->


    <!-- vid 3 ver 2 -->
    {{-- <h3><?= $name ?></h3>
    <p><?php echo $email; ?></p>
    <img src="<?= $image ?>" alt="<?= $name ?>" width="200"> --}}
    <!-- <script src="js/script.js"></script> -->

    <!-- vid 4 -->

    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="200">
@endsection
