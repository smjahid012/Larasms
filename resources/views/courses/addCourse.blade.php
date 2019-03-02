@extends('layouts.master')
@section('course-content')
     <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">COURSE DETAILS</h5>
                                <form class="form-material m-t-40">

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Course Name</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter Course name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="bdate">Course Start Date</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter date here">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Course Duration</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="example-text" class="form-control" placeholder="time span of the course">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Course Price</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="example-text" class="form-control" placeholder="course fees">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Course Professor</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="example-text" class="form-control" placeholder="professor name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Course Image</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Department</label>
                                            <div class="col-sm-12">
                                                <select class="form-control">
                                                    <option>Select Department</option>
                                                    <option>Computer</option>
                                                    <option>Mechanical</option>
                                                    <option>Electrical</option>
                                                    <option>Medical</option>
                                                    <option>BCA/MCA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="position">Year</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="position" name="position" class="form-control" placeholder="e.g. first year">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Description</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

@endsection
