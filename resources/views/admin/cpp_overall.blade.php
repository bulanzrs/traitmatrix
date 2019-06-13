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
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Respondent ID</th>
                                <th scope="col">Cluster 1</th>
                                <th scope="col">Cluster 2</th>
                                <th scope="col">Cluster 3</th>
                                <th scope="col">Cluster 4</th>
                                <th scope="col">Cluster 5</th>
                                <th scope="col">Cluster 6</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cpp_all = DB::table('cpp_mark_overall')->get();

                            ?>
                            @foreach($cpp_all as $share)
                                <tr>
                                    <td>{{$share->respondent_id}}</td>
                                    <td>{{$share->score_cluster1}}</td>
                                    <td>{{$share->score_cluster2}}</td>
                                    <td>{{$share->score_cluster3}}</td>
                                    <td>{{$share->score_cluster4}}</td>
                                    <td>{{$share->score_cluster5}}</td>
                                    <td>{{$share->score_cluster6}}</td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
