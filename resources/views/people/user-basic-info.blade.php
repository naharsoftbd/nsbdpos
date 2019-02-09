
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="SettingsPage_Content">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">General Account Settings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                    	<li>{{$persons_info->name}}</li>
                    	<li>{{$persons_info->email}}</li>
                    </ul>
				
					<a data-id="<?php echo $persons_info->id; ?>"  data-toggle="modal" data-target="#confirm-edit" class="btn btn-success float-left">Edit Profile</a>
					<a  data-toggle="modal" data-target="#confirm-delete" data-id="<?php echo $persons_info->id; ?>" class="btn btn-danger float-right">Delete Account</a>
					
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>You are about to delete <b><i class="title"></i></b> record, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-ok">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit-->
<div class="modal fade" id="confirm-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <h4 class="modal-title" id="myModalLabel">Please Save before Closing</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body edit-content">
                    
                        
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success edit-btn-ok">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection