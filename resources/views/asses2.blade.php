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
            <form action="{{route('assess2',['email'=>$email])}}" method="POST" role="form text-left">
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
                            <label for="user-email" class="form-control-label">What would you like to study: </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="study" value="Diploma" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Diploma (1,2 or 3 years)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="study" value="PDG" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Post Graduate Diploma (1 or 2 years)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="study" value="Bachelor`s" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Bachelor's (4 or 5 years)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="study" value="Masters" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Masters
                                </label>
                            </div>
                            @error('study')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="user-name" class="form-control-label">What is your budget for tution/year only (excluding living expenses)</label>
                            <div class="@error('tuition')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="eg. $20,000 CAD" id="user-name" name="tuition">

                            </div>
                            @error('tuition')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">What is your budget for living expenses</label>
                            <div class="@error('budget')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="eg. $10,000 CAD" id="user-name" name="budget">

                            </div>
                            @error('budget')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">Do you have a family member that is Candadian citizen of permanent Resident? : </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fpr" value="Yes" id="fpr1">
                            <label class="form-check-label" for="ytc1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fpr" value="No" id="fpr">
                            <label class="form-check-label" for="ytc2">
                                No
                            </label>
                        </div>

                        @error('fpr')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">What is the family relationship with you and what city do they reside in? :</label>
                            <div class="@error('budget')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="e.g Father" id="user-name" name="frelationship">

                            </div>
                            @error('frelationship')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="user-email" class="form-control-label">Have you taken any of these tests before? : </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="test" value="CELPIP" id="test21">
                                <label class="form-check-label" for="test21">
                                    CELPIP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="test" value="IELTS General" id="test22">
                                <label class="form-check-label" for="test22">
                                    IELTS General
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="test" value="IELTS Academic" id="test23">
                                <label class="form-check-label" for="test23">
                                    IELTS Academic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="test" value="None" id="test24">
                                <label class="form-check-label" for="test24">
                                    None
                                </label>
                            </div>
                            @error('test')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="doi" class="form-control-label">What date did you write the test? :</label>
                            <div class="@error('doi') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="date" id="name" name="dot" value="">
                            </div>
                            @error('dot')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Enter scores for reading</label>
                            <div class="@error('reading')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" id="user-name" name="reading">

                            </div>
                            @error('reading')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Enter Scores for Writing</label>
                            <div class="@error('writing')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" id="user-name" name="writing">

                            </div>
                            @error('writing')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Enter scores for Speaking</label>
                            <div class="@error('speaking')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" id="user-name" name="speaking">

                            </div>
                            @error('speaking')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Enter Scores for Listening</label>
                            <div class="@error('writing')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" id="user-name" name="listening">

                            </div>
                            @error('writing')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Enter the information for your high school and all schools attended (Post secondary school)</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">High School:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="from1">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="to1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Name of School" id="user-name" name="nos1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="scity">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Certificate" id="user-name" name="cert">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">School 1:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="from2">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="to2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Name of School" id="user-name" name="nos2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="scity2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Certificate" id="user-name" name="cert2">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">School 2:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="from3">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="to3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Name of School" id="user-name" name="nos3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="scity3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Certificate" id="user-name" name="cert3">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">School 3:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="from4">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="to4">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Name of School" id="user-name" name="nos4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="scity4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Certificate" id="user-name" name="cert4">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">School 4:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="from5">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="to5">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Name of School" id="user-name" name="nos5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="scity5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Certificate" id="user-name" name="cert5">
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Employment History: Provide your employment history for the past 10 years beginning with current emmployment (including some part-time experience)</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Current Employment:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromemp1">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="toemp1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Job Title" id="user-name" name="jt1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="jscity1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Full time/Part time" id="user-name" name="ft1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Employment 2:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromemp2">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="toemp2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Job Title" id="user-name" name="jt2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="jscity2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Full time/Part time" id="user-name" name="ft2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Employment 3:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromemp3">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="toemp3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Job Title" id="user-name" name="jt3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="jscity3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Full time/Part time" id="user-name" name="ft3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Employment 4:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromemp4">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="toemp4">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Job Title" id="user-name" name="jt4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="jscity4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Full time/Part time" id="user-name" name="ft4">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Employment 5:</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromemp5">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="toemp5">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Job Title" id="user-name" name="jt5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="jscity5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Full time/Part time" id="user-name" name="ft5">
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label"> Travel- Please list all the international travel for the last 10 years. </label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Travel 1:</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromtravel1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="totravel1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Purpose of Visit" id="user-name" name="pov1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="tcity1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Travel 2:</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromtravel2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="totravel2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Purpose of Visit" id="user-name" name="pov2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="tcity2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Travel 3:</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromtravel3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="totravel3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Purpose of Visit" id="user-name" name="pov3">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="tcity3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Travel 4:</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromtravel4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="totravel4">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Purpose of Visit" id="user-name" name="pov4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="tcity4">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Travel 5:</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="From" id="user-name" name="fromtravel5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="date" placeholder="To" id="user-name" name="totravel5">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="Purpose of Visit" id="user-name" name="pov5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input class="form-control" value="" type="text" placeholder="City/Country" id="user-name" name="tcity5">
                        </div>
                    </div>
                </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn bg-gradient-danger btn-md mt-4 mb-4">Submit</button>
        </div>
        </form>

    </div>
</div>

</div>

@endsection