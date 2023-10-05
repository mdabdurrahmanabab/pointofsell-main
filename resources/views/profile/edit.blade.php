@extends('layouts.admin')
@section('content')
@if($user->profile)
<!-- {{$user->profile->phone}} -->
@else
<h1>No profile availave. Create your profile.</h1>
@endif
<section style="background-color: #D6EFC7; margin-top:20px;">
    <div class="row">
    <div class="col-md-11 mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4" style="background-color: #D6EFC7;">
                    <div class="card-body text-center">
                        <img style="height:200px; width:200px" src="{{asset('storage/'.$user->profile?->image)}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$user->profile?->nickname}}</h5>
                        <p class="text-muted mb-1">{{$user->profile?->phone}}</p>
                        <p class="text-muted mb-4">{{$user->profile?->address}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Follow</button>
                            <button type="button" id="editBtn" onclick="enabelEditBtn()" class="btn btn-outline-primary ms-1"> Edit </button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-md-0" style="background-color: #D6EFC7;">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                        </p>
                        <p class="mb-1" style="font-size: .77rem;">Laravel 9</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">PHP</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">JavaScript</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Jquery</p>
                        <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">AJAX</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">HTML</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 750%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">CSS</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-8">
                
                <div class="card mb-4" style="background-color: #D6EFC7;">
                    <fieldset id="profile_disable" disabled>
                        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data" class="">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>

                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="nickname" value="{{$user->profile?->nickname}}" placeholder="Nickname">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="phone" value="{{$user->profile?->phone}}" placeholder="Phone">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="address" value="{{$user->profile?->address}}" placeholder="Address">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Blood Group</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="blood_group" value="{{$user->profile?->blood_group}}" placeholder="Blood Group">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Gender</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="text-muted mb-0 form-control" name="gender" id="">
                                            <option value="-1">Select</option>
                                            <option value="m">Male</option>
                                            <option value="f">FeMale</option>
                                            <option value="o">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row border p-2">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Image</p>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" class="text-muted mb-0 form-control" name="image" placeholder="Image" onchange="loadFile(event)">
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{asset('storage/'.$user->profile?->image)}}" id="output" class="img-fluid rounded" style="height:150px; width:180px;" alt="Please upload image">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Facebook</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="facebook" value="{{$user->profile?->facebook}}" placeholder="Facebook">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Instagram</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="instagram" value="{{$user->profile?->instagram}}" placeholder="Instagram">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Linkdin</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="linkdin" value="{{$user->profile?->linkdin}}" placeholder="Linkdin">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Twitter</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="twitter" value="{{$user->profile?->twitter}}" placeholder="Twitter">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Fiver</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="fiver" value="{{$user->profile?->fiver}}" placeholder="Fiver">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Upwork</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="text-muted mb-0 form-control" name="upwork" value="{{$user->profile?->upwork}}" placeholder="Upwork">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Submit</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="submit" id="update" class="mb-0 btn btn-primary" name="update" value="Update">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

@section('script')
<script>
    const btnEnable = document.querySelector("#editBtn");
    btnEnable.addEventListener("click", enabelEditBtn);
  function enabelEditBtn() {
    document.querySelector("#profile_disable").removeAttribute('disabled');
}
</script>
@endsection