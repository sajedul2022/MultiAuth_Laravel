@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <title>Dashboard</title>

    <div class="py-4">
        <div class="dropdown">
            <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                New
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                        </path>
                    </svg>
                    Add User
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
                    Add Products
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                        </path>
                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                    </svg>
                    Add Sale
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add Customers
                </a>
                <div role="separator" class="dropdown-divider my-1"></div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                    </path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="h5">Customers</h2>
                                <h3 class="fw-extrabold mb-1">345,678</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                                <h3 class="fw-extrabold mb-2">320</h3>
                            </div>
                            {{-- <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1,
                                <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                USA
                            </small> --}}

                            {{-- <div class="small d-flex mt-1">
                                <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-success fw-bolder">22%</span></div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Revenue</h2>
                                <h3 class="mb-1">43,594 BDT</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                                <h3 class="fw-extrabold mb-2">43,594 BDT </h3>
                            </div>
                            {{-- <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1,
                                <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                GER
                            </small>
                            <div class="small d-flex mt-1">
                                <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-danger fw-bolder">2%</span></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5"> Total Sale </h2>
                                <h3 class="mb-1">50.88%</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0"> Products </h2>
                                <h3 class="fw-extrabold mb-2">50.88</h3>
                            </div>
                            {{-- <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small>
                            <div class="small d-flex mt-1">
                                <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-success fw-bolder">4%</span></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-6 col-xl-6">

            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Sales Tracking </h2>
                            </div>
                            <div class="col text-end">
                                <a href="#" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="pie-chart"></div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Page visits</h2>
                            </div>
                            <div class="col text-end">
                                <a href="#" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Page name</th>
                                    <th class="border-bottom" scope="col">Page Views</th>
                                    <th class="border-bottom" scope="col">Page Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        /demo/admin/index.html
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        3,225
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        $20
                                    </td>

                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        /demo/admin/forms.html
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        2,987
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        0
                                    </td>

                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        /demo/admin/util.html
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        2,844
                                    </td>
                                    <td class="fw-bolder text-gray-500">
                                        294
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-6 col-xl-6">

            <div class="col-12 px-0 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                        <div class="d-block">
                            <div class="h6 fw-normal text-gray mb-2">Total orders</div>
                            <h2 class="h3 fw-extrabold">452</h2>
                            <div class="small mt-2">
                                <span class="fas fa-angle-up text-success"></span>
                                <span class="text-success fw-bold">18.2%</span>
                            </div>
                        </div>
                        <div class="d-block ms-auto">
                            <div class="d-flex align-items-center text-end mb-2">
                                <span class="dot rounded-circle bg-gray-800 me-2"></span>
                                <span class="fw-normal small">July</span>
                            </div>
                            <div class="d-flex align-items-center text-end">
                                <span class="dot rounded-circle bg-secondary me-2"></span>
                                <span class="fw-normal small">August</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 mb-4">
            <div class="card border-0 shadow" style="background-color: #fac0b9">
                <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                    <div class="d-block mb-3 mb-sm-0">
                        <div class="fs-5 fw-normal mb-2">Sales Value</div>
                        <h2 class="fs-3 fw-extrabold">$10,567</h2>
                        <div class="small mt-2">
                            <span class="fw-normal me-2">Yesterday</span>
                            <span class="fas fa-angle-up text-success"></span>
                            <span class="text-success fw-bold">10.57%</span>
                        </div>
                    </div>
                    <div class="d-flex ms-auto">
                        <a href="#" class="btn btn-secondary btn-sm me-2">Month</a>
                        <a href="#" class="btn btn-sm me-3">Week</a>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="ct-chart-sales-value ct-double-octave ct-series-g"></div>
                </div>
            </div>
        </div>

    </div>


    <script>
        var data = {
            series: [30, 40, 10, 20]
        };

        var sum = function(a, b) {
            return a + b
        };

        new Chartist.Pie('.pie-chart', data, {
            labelInterpolationFnc: function(value) {
                return Math.round(value / data.series.reduce(sum) * 100) + '%';
            },
            low: 0,
            high: 8,
            fullWidth: false,
            plugins: [
                Chartist.plugins.tooltip()
            ],
        });
    </script>

@endsection
