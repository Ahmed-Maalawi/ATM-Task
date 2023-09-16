@extends('layouts.main')
@section('user-content')
    <!-- Default Modals -->
    <button id="inquiry-btn" type="button" class="btn btn-primary">Balance inquiry</button>
    <button id="show-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inquiryModel" hidden>Standard Modal</button>
    <div id="inquiryModel" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Balance inquiry action!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <h5 class="fs-15">
                        Current Balance is <span id="modalContent" class="text-success"></span>
                    </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('script')
    <script type="text/javascript">
        $(function (){
           $('#inquiry-btn').click(function () {
               var modal = $('#inquiryModel');
               var modalContent = $('#modalContent').val('');
               var modalBtn = $('#show-modal');

               $.ajax({
                   url: 'http://www.atm-task.test/customer/account/get-balance/{{ $account['id'] }}',
                   method: 'GET',
                   success: function (response) {
                       console.log(response);
                       modalContent.html(response.data);
                       modalBtn.click();
                   },
                   error: function () {
                       console.error(response);
                   }
               })
           })
        });
    </script>
@endsection
