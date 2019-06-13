@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Menu <span style="float: right"></span>
                    </div>

                    <div class="card-body">

                        <center> <h3>Choose Assessment</h3>  </center>
                        <br>
                        <div class="row">
                            <div class="col">
                                <a href="/c" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">C.P.P</h2>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" style="text-decoration: none">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">C.E.I.Q</h2>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col">

                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">C.E.T.A</h2>
                                        </center>

                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">L.C.P.A</h2>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col">

                                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">I.A.E</h2>
                                        </center>

                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">A.P.A</h2>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col">

                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">H.O.T.S</h2>
                                        </center>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
