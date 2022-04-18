@extends('layouts.plantillabase')

@section('contenido')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bienvenido</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bienvenido</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="col-md-2">
                <a href="#add" class="btn btn-info " class="modal" data-toggle="modal">
                    Nuevo Usuario
                </a>



            </div>
            <p>


            <div class="container-fluid">


                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>

                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>EMAIL</th>
                                    <th>Edad</th>
                                    <th>ACCIONES</th>
                                </tr>

                            </thead>
                            <tbody>
                                


                               

                            </tbody>
                        </table>

                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>

                    <!-- /.card -->
                    <!-- /.content-wrapper -->
                    <!-- ./wrapper -->
                  
                </div>
        </section>
    </div>
</div>



@endsection