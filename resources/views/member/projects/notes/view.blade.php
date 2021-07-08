<style>
     input[type="checkbox"][readonly] {
         pointer-events: none;
    }
    </style>
@if(!isset($askPassword))
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title"><i class=""></i> @lang('app.notesDetails')</h4>
</div>
@endif 
<div class="modal-body">
    <div class="portlet-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-body">
                    <div class="row m-t-30">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('modules.notes.notesTitle')</label>
                                <p class="text-muted">{{ ucwords($notes->notes_title) }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('modules.notes.notesType')</label>
                                <p class="text-muted">{{$notes->notes_type == '0' ? 'Public' : 'Private'}}</p>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <div class="col-xs-12 private_div @if($notes->notes_type == '0') d-none @endif" id="type_private" >
                    <div class="form-group">
                        <div class="row m-t-30">
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>@lang('modules.notes.selectMember')</label>
                                    <div class="panel-body">
                                    @foreach($employees as $employee)
                                    @if(in_array($employee->id, $noteMembers)) 
                                    <img src="{{ asset($employee->image_url) }}"
                                         data-toggle="tooltip" data-original-title="   {{ ucwords($employee->name) }}"
                                            alt="user" class="img-circle" width="25" height="25" height="25">
                                            @endif
                                    
                                        
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group" style="padding-top: 19px;">
                                    <div class="checkbox checkbox-info">
                                        <input name="is_client_show" @if($notes->is_client_show == 1) checked @endif
                                            type="checkbox" readonly>
                                        <label for="check_amount">@lang('modules.notes.showClient')</label>
                                    </div>
                                    
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group" style="padding-top: 19px;">
                                    <div class="checkbox checkbox-info">
                                        <input name="ask_password" @if($notes->ask_password == 1) checked @endif
                                            type="checkbox" readonly>
                                        <label for="check_amount">@lang('modules.notes.askReenterPassword')</label>
                                    </div>
                                    
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="control-label">@lang('modules.notes.notesDetails')</label>
                            <p class="text-muted">{{ ucwords($notes->note_details) }}</p>
                        </div>
                    </div>
                    <!--/span-->

                </div>
                

            </div>
        </div>

    </div>
</div>

   


