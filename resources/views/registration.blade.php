@extends('welcome')

@section('content')
    <div class="justify-content-center mt-2 align-items-center">

        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add user
        </button>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add user</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <form >

                            @csrf

                            <div class="mb-2">
                                <label>Enter name:</label>
                                <input type="text" class="form-control" placeholder="Enter your name" name="uname"/>
                            </div>
                            <div class="mb-2">
                                <label>Enter mobile number:</label>
                                <input type="text" class="form-control" placeholder="Enter your mobile number" name="umobile" />
                            </div>
                            <div class="mb-2">
                                <label>Enter your email:</label>
                                <input type="text" class="form-control" placeholder="Enter your email" name="uemail" />
                            </div>
                            <div class="mb-2">
                                <label>Enter your password:</label>
                                <input type="password" class="form-control" placeholder="Enter your password" name="upassword" />
                            </div>
                            <div class="mb-2">
                                <label>Registration type:</label>
                                <input type="text" class="form-control" placeholder="Enter your registration type" name="uregtype" />
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Add</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection('content')
