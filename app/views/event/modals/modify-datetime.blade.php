<!-- Modal -->
<div class="modal-modify-user modal-ind modal fade" id="modal-modify-datetime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{ Form::model($event, array('route' => array('event.update',$event->id),'class' => '', 'method' => 'PUT', 'role' => 'form')) }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="form-group has-feedback">
                {{ Form::text('event_date', Input::old('event_date'), array('class' => 'form-control datetimepicker','placeholder' => '','autofocus' => "")) }}
                <span class="text-danger">{{ $errors->first('event_date') }}</span>
                <span class="help-block text-bordered">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
            </div>
            <div class="modal-footer">
                <p class="text-warning pull-left"><i class="glyphicon glyphicon-warning-sign"></i> All the members of the events will be notify of the changes!</p>
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                {{ Form::submit('Save changes', array('class' => 'btn btn-success btn-sm' )) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div><!-- /.modal -->