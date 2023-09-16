@extends('layouts.main')

@section('user-content')
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Latest Transactions</h5>
            </div>
            <div class="card-body">
                <table id="client-transaction" style="" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                    <tr>
                        <th data-ordering="false">#</th>
                        <th data-ordering="false">Transaction ID</th>
                        <th data-ordering="false">Amount</th>
                        <th>Account ID</th>
                        <th>Create Date</th>
                        <th>type</th>
                        <th>Client</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Your Accounts</h5>
            </div>
            <div class="card-body">
                <table id="client-accounts" style="" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                    <tr>
                        <th data-ordering="false">#</th>
                        <th data-ordering="false">Account Number</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript">
        $(function () {

            let transactionTable = $('#client-transaction').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('client.transaction') }}",
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id', name: 'ID'},
                    {data: 'amount', name: 'Amount'},
                    {data: 'account_number', name: 'Account ID'},
                    {data: 'created_at', name: 'Created Date'},
                    {data: 'type', name: 'Type'},
                    {data: 'user_name', name: 'User Name'},
                    {data: null, name: 'action', orderable: false, searchable: false, render: function (data, type, full, meta) {
                            return `
                                <div class="dropdown d-inline-block">
                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-fill align-middle"></i>
                                </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a href="${data.id}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                        <li>
                                            <a class="dropdown-item remove-item-btn">
                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            `;
                        }
                    }
                ]
            });


            let accountsTable = $('#client-accounts').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('customer.account.all') }}",
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'account_number', name: 'Account Number'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });

        });
    </script>
@endsection
