@extends('layouts.app')

@section('title','Teams')
@section('content')
    <div class="content">
        <div class="box box-danger flat">
            <div class="box-header with-border">
                <h4 class="box-title">
                    Manage teams
                </h4>
                <button id="addButton"
                        class="btn btn-danger pull-right btn-flat btn-sm">
                    <i class="fa fa-plus-circle"></i>
                    Add New
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="box-body table-responsive">
                @if($teams->count()==0)
                    <p>No data</p>
                @else
                    <table class="table table-hover table-condensed table-striped">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Fb</th>
                            <th>Twt</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/images/'.$team->image) }} " style="height: 50px"
                                         class="img img-thumbnail" alt="">
                                </td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->role }}</td>
                                <td>{{ $team->facebook }}</td>
                                <td>{{ $team->twitter }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button data-url="{{ route('teams.show',['id'=>$team->id]) }}"
                                                class="btn btn-default btn-sm flat js-edit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <a href="{{ route('teams.delete',['id'=>$team->id]) }}"
                                           class="btn btn-danger btn-sm flat">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
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
                        Add New
                    </h4>
                </div>
                <form action="{{ route('teams.create') }}" method="post" id="submitFileForm"
                      enctype="multipart/form-data" novalidate>
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" required class="form-control" id="name" name="name"
                                               placeholder="Full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role" id="role" class="form-control" required>
                                            <option value=""></option>
                                            <option value="Admin">Admin</option>
                                            <option value="Author">Author</option>
                                            <option value="Developer">Developer</option>
                                            <option
                                                value="Site Engineer">Site Engineer
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook"
                                               placeholder="Facebook account">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Twitter</label>
                                        <input type="text" class="form-control" id="facebook" name="twitter"
                                               placeholder="Twitter twitter">
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="name">Linked in</label>
                                        <input type="text" class="form-control" id="linkedIn" name="linkedIn"
                                               placeholder="Linkedin twitter">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <input type="file" name="image" id="exampleInputFile">
                                    </div>
                                    <div class="form-group">
                                        <label for="quote">Quote</label>
                                        <textarea type="text" name="quote" id="quote" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="quote">Bio</label>
                                        <textarea type="text" style="min-height: 100px;" name="bio" id="bio" required
                                                  placeholder="Biography" class="form-control"></textarea>
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
                        $('#role').val(data.role);
                        $('#facebook').val(data.facebook);
                        $('#quote').val(data.quote);
                        $('#linkedIn').val(data.linkedIn);
                        $('#id').val(data.id);
                        $('#bio').val(data.bio);
                        $('#twitter').val(data.twitter);
                    });
            });
        });
    </script>
@endsection
