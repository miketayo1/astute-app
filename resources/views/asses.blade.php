@extends('layouts.user_type.assess')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.png'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>

    </div>
    <div class="container-fluid py-4 justify-content-center"">
        <div class=" card">
        <div class="card-header pb-0 px-3 ">
            <h5 class="mb-0">{{ __('Assessment Form') }}</h5>
            <p class="">Answer all questions that applies to you.</p>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="{{route('assess')}}" method="POST" role="form text-left">
                @csrf
                @if($errors->any())
                <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                    <span class="alert-text text-white">
                        {{$errors->first()}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>
                @endif
                @if(session('success'))
                <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                    <span class="alert-text text-white">
                        {{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>
                @endif
                <div class="row ">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="user-name" class="form-control-label">{{ __('First Name') }}</label>
                            <div class="@error('fname')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder=" First Name" id="user-name" name="fname">

                            </div>
                            @error('fname')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">{{ __('Last Name') }}</label>
                            <div class="@error('lname')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="Last Name" id="user-name" name="lname">

                            </div>
                            @error('lname')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">{{ __('Middle Name') }}</label>
                            <div class="@error('mname')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="Middle Name" id="user-name" name="mname">

                            </div>
                            @error('mname')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <livewire:show-form />


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user-email" class="form-control-label">Sex: </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" value="Male" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" value="Female" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                            @error('sex')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user-email" class="form-control-label">Date of Birth:</label>
                            <div class="@error('dob')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="date" id="user-email" name="dob">

                            </div>
                            @error('dob')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">Country of birth</label>
                        <div class="@error('cob')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="" type="text" placeholder="eg Canada" id="user-email" name="cob">

                        </div>
                        @error('cob')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">Country of Residence (If different from Country of Birth)</label>
                        <div class="@error('cor')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="" type="text" placeholder="eg Canada" id="user-email" name="cor">

                        </div>
                        @error('cor')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                        <div class="@error('email')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="" type="email" placeholder="example@example.com" id="user-email" name="email">
                        </div>
                        @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Street Address: </label>
                            <div class="@error('street') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Street Address" id="name" name="street" value="">
                            </div>
                            @error('street')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user.location" class="form-control-label">City: </label>
                            <div class="@error('city') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="City" id="name" name="city" value="">
                            </div>
                            @error('city')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user.location" class="form-control-label">State or Province: </label>
                            <div class="@error('state') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="State or Province" id="name" name="state" value="">
                            </div>
                            @error('state')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Country: </label>
                            <div class="@error('user.country') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Country" id="name" name="country" value="">
                            </div>
                            @error('country')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user.phone" class="form-control-label">{{ __('Phone') }}</label>
                            <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="tel" placeholder="+234 9999999999" id="number" name="phone" value="">
                                @error('phone')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Passport Number</label>
                            <div class="@error('passport') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Passport Number" id="name" name="passport" value="">
                            </div>
                            @error('passport')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="doi" class="form-control-label">Date of Issue:</label>
                            <div class="@error('doi') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="date" placeholder="Date of Issue" id="name" name="doi" value="">
                            </div>
                            @error('doi')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="doe" class="form-control-label">Date of Expiry</label>
                            <div class="@error('doe') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="date" placeholder="Date of Expiry" id="name" name="doe" value="">
                            </div>
                            @error('doe')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">Marital Status: </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Single/Never Married" id="status1">
                            <label class="form-check-label" for="status1">
                                Single/Never Married
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Married" id="status2">
                            <label class="form-check-label" for="status2">
                                Married
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Divorced" id="status3">
                            <label class="form-check-label" for="status3">
                                Divorced
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Separated" id="status4">
                            <label class="form-check-label" for="status4">
                                Separated
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Widowed" id="status5">
                            <label class="form-check-label" for="status5">
                                Widowed
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Never Married" id="status6">
                            <label class="form-check-label" for="status6">
                                Never Married
                            </label>
                        </div>
                        @error('status')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ooc" class="form-control-label">Occupation of Spouse or Common Law partner</label>
                        <div class="@error('passport') border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Occupation of Spouse or Common Law partner" id="name" name="ooc" value="">
                        </div>
                        @error('ooc')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">Will your Spouse or Common Law partner be accompanying you to Canada : </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ytc" value="Yes" id="ytc1">
                            <label class="form-check-label" for="ytc1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ytc" value="No" id="ytc2">
                            <label class="form-check-label" for="ytc2">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ytc" value="Undecided" id="ytc3">
                            <label class="form-check-label" for="ytc3">
                                Undecided
                            </label>
                        </div>
                        @error('ytc')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="user-email" class="form-control-label">Do you Have Children ? : </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="children" value="Yes" id="Children1">
                                <label class="form-check-label" for="Children1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="children" value="No" id="Children2">
                                <label class="form-check-label" for="Children2">
                                    No
                                </label>
                            </div>
                            @error('Children')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="doe" class="form-control-label">How many Children do you have ?:</label>
                            <select class="custom-select custom-select-lg mb-3" name="noc">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                                <option value="6">Six</option>
                            </select>
                            @error('noc')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="user-email" class="form-control-label">Will any or all of your children be accompanying you to Canada? : </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="children2" value="Yes" id="Children21">
                                <label class="form-check-label" for="Children21">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="children2" value="No" id="Children22">
                                <label class="form-check-label" for="Children22">
                                    No
                                </label>
                            </div>
                            @error('Children2')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="doe" class="form-control-label">How many of your children will be accompanying you to Canada?:</label>
                            <select class="custom-select custom-select-lg mb-3" name="noc2">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                                <option value="6">Six</option>
                            </select>
                            @error('noc2')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-danger btn-md mt-4 mb-4">Save & Continue</button>
                </div>
            </form>

        </div>
    </div>

</div>



@endsection