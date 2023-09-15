@extends('layouts.main')

@section('admin-content')
    <div class="row">
        <div class="col">

            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Good Morning, {{ \Illuminate\Support\Facades\Auth::user()->name }}!</h4>
                                <p class="text-muted mb-0">Here's what's happening with your bank today.</p>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Clients</p>
                                    </div>

                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $report['clients'] }}">0</span> Client</h4>
                                        <a href="index.html" class="text-decoration-underline">View net earnings</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Accounts</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$report['accounts']}}">0</span> Account</h4>
                                        <a href="index.html" class="text-decoration-underline">View all orders</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                            <i class="bx bx-wallet text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Cards</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $report['cards'] }}">0</span> Card</h4>
                                        <a href="index.html" class="text-decoration-underline">See details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Transaction</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $report['transaction'] }}">0</span> Transaction </h4>
                                        <a href="index.html" class="text-decoration-underline">Withdraw money</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                            <i class="bx bx-wallet text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->

{{--                <div class="row">--}}
{{--                    <div class="col-xl-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header align-items-center d-flex">--}}
{{--                                <h4 class="card-title mb-0 flex-grow-1">Best Selling Products</h4>--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <div class="dropdown card-header-dropdown">--}}
{{--                                        <a class="text-reset dropdown-btn" href="index.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                            <span class="fw-semibold text-uppercase fs-12">Sort by:--}}
{{--                                                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>--}}
{{--                                        </a>--}}
{{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                            <a class="dropdown-item" href="index.html#">Today</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">Yesterday</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">Last 7 Days</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">Last 30 Days</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">This Month</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">Last Month</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- end card header -->--}}

{{--                            <div class="card-body">--}}
{{--                                <div class="table-responsive table-card">--}}
{{--                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="avatar-sm bg-light rounded p-1 me-2">--}}
{{--                                                        <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Branded T-Shirts</a></h5>--}}
{{--                                                        <span class="text-muted">24 Apr 2021</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$29.00</h5>--}}
{{--                                                <span class="text-muted">Price</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">62</h5>--}}
{{--                                                <span class="text-muted">Orders</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">510</h5>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$1,798</h5>--}}
{{--                                                <span class="text-muted">Amount</span>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="avatar-sm bg-light rounded p-1 me-2">--}}
{{--                                                        <img src="assets/images/products/img-2.png" alt="" class="img-fluid d-block" />--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a></h5>--}}
{{--                                                        <span class="text-muted">19 Mar 2021</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$85.20</h5>--}}
{{--                                                <span class="text-muted">Price</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">35</h5>--}}
{{--                                                <span class="text-muted">Orders</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal"><span class="badge bg-danger-subtle text-danger">Out of stock</span> </h5>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$2982</h5>--}}
{{--                                                <span class="text-muted">Amount</span>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="avatar-sm bg-light rounded p-1 me-2">--}}
{{--                                                        <img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block" />--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Borosil Paper Cup</a></h5>--}}
{{--                                                        <span class="text-muted">01 Mar 2021</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$14.00</h5>--}}
{{--                                                <span class="text-muted">Price</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">80</h5>--}}
{{--                                                <span class="text-muted">Orders</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">749</h5>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$1120</h5>--}}
{{--                                                <span class="text-muted">Amount</span>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="avatar-sm bg-light rounded p-1 me-2">--}}
{{--                                                        <img src="assets/images/products/img-4.png" alt="" class="img-fluid d-block" />--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">One Seater Sofa</a></h5>--}}
{{--                                                        <span class="text-muted">11 Feb 2021</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$127.50</h5>--}}
{{--                                                <span class="text-muted">Price</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">56</h5>--}}
{{--                                                <span class="text-muted">Orders</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal"><span class="badge bg-danger-subtle text-danger">Out of stock</span></h5>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$7140</h5>--}}
{{--                                                <span class="text-muted">Amount</span>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="avatar-sm bg-light rounded p-1 me-2">--}}
{{--                                                        <img src="assets/images/products/img-5.png" alt="" class="img-fluid d-block" />--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a></h5>--}}
{{--                                                        <span class="text-muted">17 Jan 2021</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$54</h5>--}}
{{--                                                <span class="text-muted">Price</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">74</h5>--}}
{{--                                                <span class="text-muted">Orders</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">805</h5>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 my-1 fw-normal">$3996</h5>--}}
{{--                                                <span class="text-muted">Amount</span>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}

{{--                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">--}}
{{--                                    <div class="col-sm">--}}
{{--                                        <div class="text-muted">--}}
{{--                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-auto  mt-3 mt-sm-0">--}}
{{--                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">--}}
{{--                                            <li class="page-item disabled">--}}
{{--                                                <a href="index.html#" class="page-link">←</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a href="index.html#" class="page-link">1</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item active">--}}
{{--                                                <a href="index.html#" class="page-link">2</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a href="index.html#" class="page-link">3</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a href="index.html#" class="page-link">→</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-6">--}}
{{--                        <div class="card card-height-100">--}}
{{--                            <div class="card-header align-items-center d-flex">--}}
{{--                                <h4 class="card-title mb-0 flex-grow-1">Top Sellers</h4>--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <div class="dropdown card-header-dropdown">--}}
{{--                                        <a class="text-reset dropdown-btn" href="index.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>--}}
{{--                                        </a>--}}
{{--                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                            <a class="dropdown-item" href="index.html#">Download Report</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">Export</a>--}}
{{--                                            <a class="dropdown-item" href="index.html#">Import</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- end card header -->--}}

{{--                            <div class="card-body">--}}
{{--                                <div class="table-responsive table-card">--}}
{{--                                    <table class="table table-centered table-hover align-middle table-nowrap mb-0">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h5 class="fs-14 my-1 fw-medium">--}}
{{--                                                            <a href="apps-ecommerce-seller-details.html" class="text-reset">iTest Factory</a>--}}
{{--                                                        </h5>--}}
{{--                                                        <span class="text-muted">Oliver Tyler</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">Bags and Wallets</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <p class="mb-0">8547</p>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">$541200</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 mb-0">32%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/companies/img-2.png" alt="" class="avatar-sm p-2" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">--}}
{{--                                                        <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Digitech Galaxy</a></h5>--}}
{{--                                                        <span class="text-muted">John Roberts</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">Watches</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <p class="mb-0">895</p>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">$75030</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 mb-0">79%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/companies/img-3.png" alt="" class="avatar-sm p-2" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-gow-1">--}}
{{--                                                        <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Nesta Technologies</a></h5>--}}
{{--                                                        <span class="text-muted">Harley Fuller</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">Bike Accessories</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <p class="mb-0">3470</p>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">$45600</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 mb-0">90%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/companies/img-8.png" alt="" class="avatar-sm p-2" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">--}}
{{--                                                        <h5 class="fs-14 my-1 fw-medium"><a href="apps-ecommerce-seller-details.html" class="text-reset">Zoetic Fashion</a></h5>--}}
{{--                                                        <span class="text-muted">James Bowen</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">Clothes</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <p class="mb-0">5488</p>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">$29456</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 mb-0">40%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/companies/img-5.png" alt="" class="avatar-sm p-2" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">--}}
{{--                                                        <h5 class="fs-14 my-1 fw-medium">--}}
{{--                                                            <a href="apps-ecommerce-seller-details.html" class="text-reset">Meta4Systems</a>--}}
{{--                                                        </h5>--}}
{{--                                                        <span class="text-muted">Zoe Dennis</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">Furniture</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <p class="mb-0">4100</p>--}}
{{--                                                <span class="text-muted">Stock</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-muted">$11260</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 mb-0">57%<i class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end -->--}}
{{--                                        </tbody>--}}
{{--                                    </table><!-- end table -->--}}
{{--                                </div>--}}

{{--                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">--}}
{{--                                    <div class="col-sm">--}}
{{--                                        <div class="text-muted">--}}
{{--                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-auto  mt-3 mt-sm-0">--}}
{{--                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">--}}
{{--                                            <li class="page-item disabled">--}}
{{--                                                <a href="index.html#" class="page-link">←</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a href="index.html#" class="page-link">1</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item active">--}}
{{--                                                <a href="index.html#" class="page-link">2</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a href="index.html#" class="page-link">3</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a href="index.html#" class="page-link">→</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div> <!-- .card-body-->--}}
{{--                        </div> <!-- .card-->--}}
{{--                    </div> <!-- .col-->--}}
{{--                </div> <!-- end row-->--}}

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Recent Transactions</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table id="transaction-table" class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">Client</th>
                                            <th scope="col">Account Number</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <span class="fw-medium link-primary">#VZ2112</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">Alex Smith</div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>Clothes</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-success">$109.00</span>--}}
{{--                                            </td>--}}
{{--                                            <td>Zoetic Fashion</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="badge bg-success-subtle text-success">Paid</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(61 votes)</span></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end tr -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <span class="fw-medium link-success">1</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="fw-medium link-primary">#VZ2112</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">Alex Smith</div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>Clothes</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-success">$109.00</span>--}}
{{--                                            </td>--}}
{{--                                            <td>Zoetic Fashion</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="badge bg-success-subtle text-success">Paid</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(61 votes)</span></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end tr -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2111</a>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">Jansh Brown</div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>Kitchen Storage</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-success">$149.00</span>--}}
{{--                                            </td>--}}
{{--                                            <td>Micro Design</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="badge bg-warning-subtle text-warning">Pending</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(61 votes)</span></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end tr -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2109</a>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">Ayaan Bowen</div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>Bike Accessories</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-success">$215.00</span>--}}
{{--                                            </td>--}}
{{--                                            <td>Nesta Technologies</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="badge bg-success-subtle text-success">Paid</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89 votes)</span></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end tr -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2108</a>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">Prezy Mark</div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>Furniture</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-success">$199.00</span>--}}
{{--                                            </td>--}}
{{--                                            <td>Syntyce Solutions</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="badge bg-danger-subtle text-danger">withdraw</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47 votes)</span></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end tr -->--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2107</a>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 me-2">--}}
{{--                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1">Vihan Hudda</div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>Bags and Wallets</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="text-success">$330.00</span>--}}
{{--                                            </td>--}}
{{--                                            <td>iTest Factory</td>--}}
{{--                                            <td>--}}
{{--                                                <span class="badge bg-success-subtle text-success">Paid</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161 votes)</span></h5>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- end tr -->--}}
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>
                            </div>
                        </div> <!-- .card-->
                    </div> <!-- .col-->
                </div> <!-- end row-->
            </div> <!-- end .h-100-->
        </div> <!-- end col -->
    </div>



    <!-- Default Modals -->
{{--    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal">Standard Modal</button>--}}
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <h5 class="fs-15">
                        Are you sure to delete this transaction
                    </h5>
                    <p class="text-muted">where transaction id is</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="delete-btn" class="btn btn-primary">Delete</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection




@section('script')
    <script type="text/javascript">
        $(function () {

            let table = $('#transaction-table').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('admin.transaction.all') }}",
                    type: 'GET'
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id', name: 'ID'},
                    {data: 'user.name', name: 'Client Name'},
                    {data: 'account.account_number', name: 'Account Number'},
                    {data: 'created_at', name: 'Created Date'},
                    {data: 'type', name: 'Type'},
                    // {data: 'user_name', name: 'User Name'},
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
                                            <button data-bs-toggle="modal" data-bs-target="#myModal" data-id="${data.id}" class="dropdown-item remove-item-btn">
                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            `;
                        }
                    }
                ]
            });

        //    -----------------------------

            // Event listener for the delete link
            $('.remove-item-btn').on('click', function () {
                const transactionId = $(this).data('id');
                console.log(this);
                $('#confirmDelete').attr('data-transaction-id', transactionId);
            });

            $('#delete-btn').on('click', function () {
                $.ajax({
                    type: 'DELETE',
                    {{--url: '{{ route("transactions.destroy", ["id" => $transaction->id]) }}',--}}
                    headers: {
                        // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        // Handle the success response, e.g., display a message
                        console.log(response.message);

                        // Close the modal
                        $('#myModal').modal('hide');

                        // Reload or update the page as needed
                    },
                    error: function (error) {
                        // Handle the error response, e.g., display an error message
                        console.error('Error:', error);

                        // Close the modal
                        $('#myModal').modal('hide');
                    }
                });
            });
        });
    </script>
@endsection
