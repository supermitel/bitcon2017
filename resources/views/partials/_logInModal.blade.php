<div id="loginModal" class="modal fade" role="dialog" >
    <div class="modal-dialog" style="z-index: 32">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LogIn</h4>
            </div>
            <div class="modal-body">

                @include('auth.login')

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

