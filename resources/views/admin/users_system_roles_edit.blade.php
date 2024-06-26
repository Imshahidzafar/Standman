@extends('layout.admin.list_master')

@section('content')
    <style>
        .avatar {
          vertical-align: middle;
          width: 50px;
          height: 50px;
          border-radius: 50%;
        }
        .imageUpload
        {
            display: none;
        }

        .profileImage
        {
            /* margin-top: -40px; */
            cursor: pointer;
            width: 100%;
        }

        #profile-container {
            margin: 20px auto;
            width: 130px;
            height: 130px;
            color: white;
            justify-content: center;
            border: 1px solid #8f8989;
            overflow: hidden;
        }

        #profile-container img {
            width: 150px;
            height: 150px;
           
        }
        .error{
            color: red;
        }

        .errorto{
            color: red;
            background-color: rgb(244, 198, 198);
            padding-top: 15px;
            padding-bottom: 15px; 
            text-align: center;
        }

        .bootstrap-select {
            border: 10px solid red;
        }
    </style>
	<!--**********************************
           Chat box End
    ***********************************-->
    
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mb-n5">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <!-- <h4>Hi, welcome back!</h4> -->
                     
                        {{-- <p class="mb-0">Validation</p> --}}
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        @section('titleBar')
                        <span class="ml-2">Edit System Users Roles</span>
                        @endsection               
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="/admin/users_system_roles_edit_data" method="POST" id="myform" name="myform" onsubmit="return validation()" enctype="multipart/form-data">
                                    @csrf
                                    <legend class="row col-md-12"> Edit System Users Roles </legend>

                                    <div class="row col-md-12"> 
                                        <div class="form-group col-md-12">
                                            <b>Name</b>
                                            <b><input style="border:1px solid" type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$users_system_roles->name}}" required></b>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>Dashboard</b>
                                            <b>
                                                <select style="border:1px solid" name="dashboard" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->dashboard == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->dashboard == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>Users Customers</b>
                                            <b>
                                                <select style="border:1px solid" name="users_customers" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->users_customers == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->users_customers == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>Users System</b>
                                            <b>
                                                <select style="border:1px solid" name="users_system" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->users_system == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->users_system == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>Users System Roles</b>
                                            <b>
                                                <select style="border:1px solid" name="users_system_roles" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->users_system_roles == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->users_system_roles == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>System Settings</b>
                                            <b>
                                                <select style="border:1px solid" name="system_settings" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->system_settings == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->system_settings == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <b>Account Settings</b>
                                            <b>
                                                <select style="border:1px solid" name="account_settings" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->account_settings == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->account_settings == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <b>Delete Account Requests</b>
                                            <b>
                                                <select style="border:1px solid" name="delete_account_req" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->delete_account_req == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->delete_account_req == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <b>Jobs</b>
                                            <b>
                                                <select style="border:1px solid" name="jobs" class="form-control" required>
                                                    <option value="Yes" <?php if($users_system_roles->jobs == 'Yes') echo "selected"; ?>>Yes</option>
                                                    <option value="No" <?php if($users_system_roles->jobs == 'No') echo "selected"; ?>>No</option>
                                                </select>
                                            </b>
                                        </div>
                                    </div>

                                    <div class="row col-md-12"> 
                                        <div class="form-group col-md-6">
                                            <b>Status</b>
                                            <b>
                                                <select style="border:1px solid" name="status" class="form-control" required>
                                                    <option value="Active" <?php if($users_system_roles->status == 'Active') echo "selected"; ?>>Active</option>
                                                    <option value="Inactive" <?php if($users_system_roles->status == 'Inactive') echo "selected"; ?>>Inactive</option>
                                                </select>
                                            </b>
                                        </div>
                                    </div>
                                    <input type="hidden" name="users_system_roles_id" value="{{$users_system_roles->users_system_roles_id}}" required>
                                    <button type="submit" class="btn btn-primary px-5 float-right mt-4">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
        </div>
    </div>
					
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
@endsection