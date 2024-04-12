@extends('layouts.app')

@section('title','Feedback')
@section('content')
    <div class="content">
        <div class="box box-danger flat">
            <div class="box-header with-border">
                <h4 class="box-title">
                    Manage feedback
                </h4>
            </div>
            <div class="box-body table-responsive">
                @if($feedbacks->count()==0)
                    <p>No data</p>
                @else
                    <table class="table table-hover table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{{ $feedback->name }}</td>
                                <td>{{ $feedback->email }}</td>
                                <td>{{ $feedback->subject }}</td>
                                <td>
                                    @if($feedback->read==true)
                                        <span class="label label-success">Read</span>
                                    @else
                                        <span class="label label-default">UnRead</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button

                                                data-url="{{ route('feedbacks.show',['id'=>$feedback->id]) }}"
                                                class="btn btn-primary btn-sm js-edit">
                                            <i class="fa fa-info-circle"></i>
                                            More Info
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="box-footer">
                {{ $feedbacks->links() }}
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade myModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        Details
                    </h4>
                </div>
                <form action="{{ route('feedbacks.update') }}" class="form-horizontal" method="post" id="submitForm"
                      novalidate>
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="0">
                        <div class="modal-loading div-hide"
                             style="width: 50px; margin: auto; padding-top: 50px; padding-bottom: 50px;">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="edit-result">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" disabled required class="form-control" id="name"
                                                   name="name"
                                                   placeholder="Full name">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="subject" class="col-md-2 control-label">Subject</label>
                                        <div class="col-md-10">
                                            <input type="text" disabled required class="form-control" id="subject"
                                                   name="subject">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="message" class="col-md-2 control-label">Message</label>
                                        <div class="col-md-10">
                                            <textarea name="message" id="message" class="form-control" cols="30"
                                                      rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="read" class="col-md-2 control-label">Marks as</label>
                                        <div class="col-md-10">
                                            <select name="read" id="read" class="form-control" required>
                                                <option value=""></option>
                                                <option value="0">Mark as Unread</option>
                                                <option value="1">Mark as read</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer editFooter">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-close"></i>
                                Close
                            </button>
                            <button type="submit" id="createBtn" class="btn btn-primary">
                                <i class="fa fa-check-circle-o"></i>
                                Save changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#submitFileForm').validate();

        $(function () {
            $('#submitFileForm').submit(function (e) {
                var form = $(this);
                e.preventDefault();
                var btn = $('#createBtn');
                if (!form.valid()) return false;
                btn.button('loading');
                e.target.submit();
                return true;
            });

            $('.js-edit').on('click', function (e) {
                var url = $(this).attr('data-url');
                $('.myModal').modal();
                showLoader();
                $.getJSON(url)
                    .done(function (data) {
                        hideLoader();
                        $('#name').val(data.name);
                        $('#subject').val(data.subject);
                        $('#message').val(data.message);
                        $('#read').val(data.read);
                        $('#id').val(data.id);
                    });
            });
        });
    </script>
@endsection
