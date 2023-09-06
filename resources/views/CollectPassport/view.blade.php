@extends('layouts.staffStructure')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header" style="background-color: white;width: 100%;">
                  <center><h1>Passports</h1></center>
                <div class="card-body">
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/mark.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                     @if($message = Session::get('danger'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/error.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                    <table class="table tabel-hover table bordered" style="border-radius: 9px; background-color: white;width: 100%;"> 
                        <thead style="background-color: #29284a;">
                            <tr style="color: white;">
                                <th width="5">No.</th>
                                <th>Name</th>
                                <th> Email </th>
								<th>Address</th>
                                <th> Gender </th>
                                <th> DOB </th>
                                <th> Birth Place </th>
                                <th> Omang </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($passports as $row)
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td>{{$row -> name }}</td>
                                <td>{{$row-> email }}</td>
								<td>{{$row-> residential_address }}</td>
                                <td>{{$row-> gender }}</td>
                                 <td>{{$row-> date_of_birth }}</td>
                                 <td>{{$row-> place_of_birth }}</td>
                                 <td>{{$row-> omang }}</td>
                                 <td>{{$row-> status }}</td>
                                <td><a href="{{action('UserController@edit',$row ->id)}}" class="btn btn-success">edit</a> | <a href="" class="btn btn-danger">delete</a></td>

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
