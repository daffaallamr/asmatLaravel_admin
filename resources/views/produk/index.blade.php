@extends('layout.main')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel Produk</h1>
        <div>
            <a class="btn btn-primary btn-icon-split" href="{{ route('product.create') }}">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data Produk</span>
            </a>
        </div>
        <br>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th style="width: 40%;">Deskripsi</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                                <th style="min-width: 80px;">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Coklat Bar</td>
                                <td>IDR 10.000</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet venenatis urna cursus.</td>
                                <td>5</td>
                                <td>
                                    <img src="{{ asset('images/produk_1.jpg') }}" alt="" style="width: 200px; height: auto;">
                                </td>
                                <td>
                                    <span>
                                        <a class="btn btn-success btn-circle" href="{{ URL::to('product/' . 2) }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <button type="button" class="btn btn-danger">Hapus</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tr>
                                <td>2.</td>
                                <td>Coklat Permen</td>
                                <td>IDR 15.000</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet venenatis urna cursus.</td>
                                <td>12</td>
                                <td>
                                    <img src="{{ asset('images/produk_2.jpg') }}" alt="" style="width: 200px; height: auto;">
                                </td>
                                <td>
                                    <span>
                                        <a class="btn btn-success btn-circle" href="tambah_produk.html">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a class="btn btn-danger btn-circle" href="tambah_produk.html">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Hand Sanitizer Spray</td>
                                <td>IDR 20.000</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet venenatis urna cursus.</td>
                                <td>15</td>
                                <td>
                                    <img src="{{ asset('images/produk_3.jpg') }}" alt="" style="width: 200px; height: auto;">
                                </td>
                                <td>
                                    <span>
                                        <a class="btn btn-success btn-circle" href="#">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a class="btn btn-danger btn-circle" href="tambah_produk.html">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection