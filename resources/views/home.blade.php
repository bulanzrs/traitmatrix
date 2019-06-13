@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard <span style="float: right"><a href="/create-assesment">Add new Assesment</a></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       <center> <h3>Create Questions</h3>  </center>
                        <br>
                        <div class="row">
                            <div class="col">
                                <a href="/create_question" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">C.P.P</h2>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{--<div class="col">--}}
                                {{--<a href="/create_question" style="text-decoration: none">--}}
                                {{--<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<center>--}}
                                            {{--<h2 class="card-title">C.E.I.Q</h2>--}}
                                        {{--</center>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}

                            {{--<div class="col">--}}

                                {{--<div class="card text-white bg-success mb-3" style="max-width: 18rem;">--}}

                                    {{--<div class="card-body">--}}
                                        {{--<center>--}}
                                            {{--<h2 class="card-title">C.E.T.A</h2>--}}
                                        {{--</center>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">--}}

                                    {{--<div class="card-body">--}}
                                        {{--<center>--}}
                                            {{--<h2 class="card-title">L.C.P.A</h2>--}}
                                        {{--</center>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}

                            {{--<div class="col">--}}

                                {{--<div class="card text-white bg-info mb-3" style="max-width: 18rem;">--}}

                                    {{--<div class="card-body">--}}
                                        {{--<center>--}}
                                            {{--<h2 class="card-title">I.A.E</h2>--}}
                                        {{--</center>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="col">--}}
                                {{--<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">--}}

                                    {{--<div class="card-body">--}}
                                        {{--<center>--}}
                                            {{--<h2 class="card-title">A.P.A</h2>--}}
                                        {{--</center>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                </div>
            </div>
        </div>
    </div>

        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center> <h3>Respondent Marks</h3>  </center>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="/adt_all" style="text-decoration: none">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">C.P.P ADT Mark</h2>
                                        </center>

                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col">
                            <a href="/cpp_all" style="text-decoration: none">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">C.P.P Mark </h2>
                                        </center>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
