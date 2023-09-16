@extends('layouts.main')
@section('user-content')
    <!-- Balance Inquiry Modals -->
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






    <!-- Transaction Btn -->
    <button id="transaction-btn" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#transactionModal">Make Transaction</button>

    <!-- Transaction Modals -->
    <div id="transactionModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form class="modal-content" id="transactionForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Make Transaction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div>
                        <select id="transactionType" name="type" class="form-select rounded-pill mb-3" aria-label="Select Transaction Type" required>
                            <option selected DISABLED>Search Transaction Type</option>
                            <option value="deposit">Deposit</option>
                            <option value="withdraw">Withdraw</option>
                        </select>

                        <div>
                            {{--                        <label for="basiInput" class="form-label">Basic Input</label>--}}
                            <input step="0.01" type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount" min="1.00" required>
                            <input type="hidden" class="form-control" id="account_id" name="account_id" value="{{ $account['id'] }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="confirm-btn">Make Transaction</button>
                </div>

            </form><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->







    <!-- /. success btn -->
    <div>
        <button id="success-btn" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#success-transaction">Click me</button>
    </div>
    <!-- /. success modal -->
    <div id="success-transaction" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <div class="text-end">
                        <button type="button" class="btn-close text-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mt-2">
                        <lord-icon src="https://cdn.lordicon.com/tqywkdcz.json" trigger="hover" style="width:150px;height:150px">
                        </lord-icon>
                        <h4 class="mb-3 mt-4">Your Transaction is Successfull !</h4>
                        <p class="text-muted fs-15 mb-4">Successful transaction is the status of operation whose result is the payment of the amount paid by the customer in favor of the merchant.</p>
                        <div class="hstack gap-2 justify-content-center">
                            <button id="new-transaction" class="btn btn-primary">New transaction</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light p-3 justify-content-center">
                    <p class="mb-0 text-muted">You like our service? <a href="javascript:void(0)" class="link-secondary fw-semibold">Invite Friends</a></p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection


@section('script')
    <script type="text/javascript">
        $(function (){
           $('#inquiry-btn').click(function () {
               let modal = $('#inquiryModel');
               let modalContent = $('#modalContent').val('');
               let modalBtn = $('#show-modal');

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
           });



        //   --------   transaction logic   ------------------

            let newTransactionBtn = $('#new-transaction');
            let closeBtns = $('.btn-close');
            let successBtn = $('#success-btn');

            newTransactionBtn.on('click', function (){
                closeBtns.click();
                $('#transaction-btn').click();
            });

            let form = $('#transactionForm');

            form.on('submit', function (e) {
                e.preventDefault();

                let formData = {
                    type: $('#transactionType').val(),
                    amount: $('#amount').val(),
                    account_id: $('#account_id').val(),
                }

                console.log(formData);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('client.transaction.store') }}',
                    data: formData,
                    dataType: 'json',
                    encode: true,
                    success: function (response) {
                        console.log(response);
                        closeBtns.click();

                        $('#transactionType').prop("selectedIndex", 0);
                        $('#amount').val('');

                        successBtn.click();

                    },
                    error: function (xhr, textStatus, errorThrown) {
                        let errorMessages = [];
                        var errorsJSON = JSON.parse(xhr.responseText);
                        console.log(errorsJSON.errors);

                        for (const key in errorsJSON.errors) {
                            if(errorsJSON.errors.hasOwnProperty(key)) {
                                errorMessages.push(errorsJSON.errors[key]);
                                console.log(key);
                                errorMessages.forEach(function (errorMessage) {
                                    console.log(errorMessage);
                                    errorMessage.forEach(message => alert(message));
                                });
                            }
                        }
                    }
                });
            });

        });
    </script>
@endsection
