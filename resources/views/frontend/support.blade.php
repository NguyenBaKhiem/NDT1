{{-- event slider --}}
<div class="card mb-3">
    <div class="card-header">
        <i class=" glyphicon glyphicon-tags " style="color: #8DEEEE"></i><span> Support( Only members)</span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <form enctype="multipart/form-data" id="form-confession" method="POST" action="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="body-confession row">
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" placeholder="Name:"
                            @if(Auth::check())
                            value="{{Auth::user()->name}}" 
                            @endif
                            >
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" placeholder="Email:"
                            @if(Auth::check())
                            value="{{Auth::user()->email}}" 
                            @endif>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" placeholder="Title:">
                        </div>
                        <div class="form-group col-sm-12">
                            <textarea tabindex="-1" rows="4" cols="1000" class="text-contact" id="modal-text-confession" name="content" placeholder="Type content...."></textarea>
                        </div>
                    </div>
                </form>
                @if(Auth::check())
                <button type="button" class="btn btn-lg btn-block btn-primary btn-post" name="post" >Send</button>
                @else
                <div class="text-center"><h3>You must <span><strong class="">sign in </strong></span>to be support!</h3></div>
                @endif
            </div>
        </div>
    </div>
</div>
{{-- end event slider --}}