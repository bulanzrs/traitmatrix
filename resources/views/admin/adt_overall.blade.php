@extends('admin.layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/home"><i class="fas fa-arrow-left" style="margin-right: 10px"></i></a>Back


                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table" >
                            <thead>
                            <tr>
                                <th scope="col">Respondent ID</th>
                                <th scope="col">Cluster1_a</th>
                                <th scope="col">Cluster1_d</th>
                                <th scope="col">Cluster1_t</th>

                                <th scope="col">Cluster2_a</th>
                                <th scope="col">Cluster2_d</th>
                                <th scope="col">Cluster2_t</th>

                                <th scope="col">Cluster3_a</th>
                                <th scope="col">Cluster3_d</th>
                                <th scope="col">Cluster3_t</th>

                                <th scope="col">Cluster4_a</th>
                                <th scope="col">Cluster4_d</th>
                                <th scope="col">Cluster4_t</th>

                                <th scope="col">Cluster5_a</th>
                                <th scope="col">Cluster5_d</th>
                                <th scope="col">Cluster5_t</th>

                                <th scope="col">Cluster6_a</th>
                                <th scope="col">Cluster6_d</th>
                                <th scope="col">Cluster6_t</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cpp_all = DB::table('cpp_mark_adt')->get();

                            ?>
                            @foreach($cpp_all as $share)
                                <tr>
                                    <td>{{$share->respondent_id}}</td>

                                    <td>{{$share->cluster1_a}}</td>
                                    <td>{{$share->cluster1_d}}</td>
                                    <td>{{$share->cluster1_t}}</td>

                                    <td>{{$share->cluster2_a}}</td>
                                    <td>{{$share->cluster2_d}}</td>
                                    <td>{{$share->cluster2_t}}</td>

                                    <td>{{$share->cluster3_a}}</td>
                                    <td>{{$share->cluster3_d}}</td>
                                    <td>{{$share->cluster3_t}}</td>

                                    <td>{{$share->cluster4_a}}</td>
                                    <td>{{$share->cluster4_d}}</td>
                                    <td>{{$share->cluster4_t}}</td>

                                    <td>{{$share->cluster5_a}}</td>
                                    <td>{{$share->cluster5_d}}</td>
                                    <td>{{$share->cluster5_t}}</td>

                                    <td>{{$share->cluster6_a}}</td>
                                    <td>{{$share->cluster6_d}}</td>
                                    <td>{{$share->cluster6_t}}</td>



                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
