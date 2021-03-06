@extends('admin.layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/home"><i class="fas fa-arrow-left" style="margin-right: 10px"></i></a>Create Question


                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Button trigger modal -->
                            <button type="button" style="margin-bottom: 10px" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                               Add New Question
                            </button>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shares as $share)
                                    <tr>
                                        <td>{{$share->id}}</td>
                                        <td>{{$share->question_name}}</td>

                                        <td>
                                            <form action="{{ route('questions.destroy',$share->id) }}" method="POST">

                                                <a class="btn btn-outline-success btn-sm" href="{{ route('questions.show',$share->id) }}">Show</a>

                                                <a class="btn btn-outline-info btn-sm" href="{{ route('questions.edit',$share->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('question') }}">
                                        @csrf
                                        <input type="hidden" name="assesment_id" value="1">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Question</label>
                                            <textarea class="form-control" name="question_name" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Cluster</label>
                                            <select class="form-control"name="cluster" id="exampleFormControlSelect1">
                                                <option disabled selected>--Select--</option>
                                                <option>cluster1</option>
                                                <option>cluster2</option>
                                                <option>cluster3</option>
                                                <option>cluster4</option>
                                                <option>cluster5</option>
                                                <option>cluster6</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">ADT</label>
                                            <select class="form-control" name="adt" required id="exampleFormControlSelect1">
                                                <option disabled selected>--Select--</option>

                                                <option>cluster1_a</option>
                                                <option>cluster1_d</option>
                                                <option>cluster1_t</option>

                                                <option>cluster2_a</option>
                                                <option>cluster2_d</option>
                                                <option>cluster2_t</option>

                                                <option>cluster3_a</option>
                                                <option>cluster3_d</option>
                                                <option>cluster3_t</option>

                                                <option>cluster4_a</option>
                                                <option>cluster4_d</option>
                                                <option>cluster4_t</option>

                                                <option>cluster5_a</option>
                                                <option>cluster5_d</option>
                                                <option>cluster5_t</option>

                                                <option>cluster6_a</option>
                                                <option>cluster6_d</option>
                                                <option>cluster6_t</option>


                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Trait</label>
                                            <input type="text" name="trait_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stable/Balanced" required>
                                        </div>

                                        <div class="form-group" style="margin-left: 20px">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="reverse" class="form-check-input" value="1">Reverse Question
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success">CREATE</button>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>
        </div>
    </div>
@endsection
