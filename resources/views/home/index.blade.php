@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="row">
            <div class="col-xl-9 col-xxl-8">
                <div class="row">
                    <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="fs-14 mb-1">Data Blog</p>
                                        <span class="fs-35 text-black font-w600">{{ $blog }}
													<svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
													</svg>
												</span>
                                    </div>
                                    <div class="d-inline-block ml-auto position-relative donut-chart-sale">
                                        <span class="donut" data-peity='{ "fill": ["rgb(254, 99, 78)", "rgba(244, 244, 244, 1)"],   "innerRadius": 31, "radius": 10}'>6/8</span>
                                        <small class="text-secondary">{{ $blog }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
