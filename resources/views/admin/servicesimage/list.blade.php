@include('admin.include.header')



<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Services Image Manager</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">
                        <a href="#" style="color: #6600ff;">Services Image List</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="form-row">
                        <div class="col-md-4 row">
                            <div class="">
                                <a href="{{ route('Serviceimageadd') }}" class="btn btn-danger">Add Services Images</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Services Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            if(count($servicesimage)){
                                $count = 1;
                                foreach($servicesimage as $row){
                        ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><img src="{{ asset('storage/'.$row->image_path) }}" width="50" height="50"></td>
                                        <td>1</td>
                                        <td><?php echo $row->services_name; ?></td>
                                        <td>
                                            <div class="btn-group mt-2 me-1">
                                                <button type="button" class="btn btn-secondary">Action</button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </i>
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="{{ route('Categorieaddpost',[$row->id]) }}"><i class="uil uil-edit me-1"></i>Update</a>
                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="delete_contest_category('<?php echo $row->id; ?>')"><i class="uil uil-trash-alt me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $count++; ?>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->







@include('admin.include.footer-bar')

@include('admin.include.footer')

@push('scripts')
<script>
	function delete_contest_category(delete_id){
		if(confirm('Are you sure you want to delete this item?')){

		}
	}
</script>
@endpush
