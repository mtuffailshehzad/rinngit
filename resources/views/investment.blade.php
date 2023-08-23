@extends('layout.auth')

@section('title', __('Investment'))

@section('content')
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        @include('layout.sidebar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div
                class="mt-6 flex flex-col items-center justify-between space-y-2 text-center sm:flex-row sm:space-y-0 sm:text-left">
                <div>
                    <h3 class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        Invest
                    </h3>
                    <p class="mt-1 hidden sm:block">Choose A Plan</p>
                </div>
            </div>
            <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
                <!-- class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4" -->

                <div class="card shadow-none">
                    <div class="flex flex-1 flex-col justify-between rounded-lg bg-warning p-4 sm:p-5">
                        <div>
                            <div class="flex items-start justify-between">
                <span>
                  <h2 class="text-amber-50">Bronze Fund</h2>
                  <span class="text-white">RM 50.00</span>
                </span>
                                <p class="text-xs+ text-amber-50">
                                    <img class="h-12 w-12 rounded-lg object-cover object-cente" src="{{asset('user/images/custom cards/card-1.png')}}"
                                         alt="" />
                                </p>
                            </div>
                            <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            <div class="flex items-start justify-between">
                <span>
                  <h6 class="mt-3 text-xs text-white line-clamp-2">
                    Current Duration
                  </h6>
                  <p class="text-xs+ text-amber-50">1 Day</p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-white line-clamp-2">
                    Available Units
                  </h6>
                  <p class="text-xs+ text-amber-50">120 Units</p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-white line-clamp-2">
                    GRR Daily Per Unit
                  </h6>
                  <p class="text-xs+ text-amber-50">0.00755%</p>
                </span>
                            </div>
                            <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            <div class="flex items-start justify-between mt-2">
                <span>
                  <h6 class="mt-3 text-xs text-white line-clamp-2">
                    Team Requirement
                  </h6>
                </span>
                                <span> </span>
                                <span> </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card shadow-none">
                    <div class="flex flex-1 flex-col justify-between rounded-lg bg-success/15 p-4 sm:p-5">
                        <div>
                            <div class="flex items-start justify-between">
                <span>
                  <h2 class="text-slate-700 line-clamp-2 dark:text-navy-100">
                    Bronze Fund
                  </h2>
                  <span class="text-slate-700 line-clamp-2 dark:text-navy-100">RM 50.00</span>
                </span>
                                <p class="text-xs+ text-amber-50">
                                    <img class="h-12 w-12 rounded-lg object-cover object-cente" src="{{asset('user/images/custom cards/card-1.png')}}"
                                         alt="" />
                                </p>
                            </div>
                            <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            <div class="flex items-start justify-between">
                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Current Duration
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    1 Day
                  </p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Available Units
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    120 Units
                  </p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100 line-clamp-2">
                    GRR Daily Per Unit
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    0.00755%
                  </p>
                </span>
                            </div>
                            <div class="my-3 h-px bg-black"></div>
                            <div class="flex items-start justify-between mt-2">
                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Team Requirement
                  </h6>
                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-none">
                    <div class="flex flex-1 flex-col justify-between rounded-lg bg-secondary/15 p-4 sm:p-5">
                        <div>
                            <div class="flex items-start justify-between">
                <span>
                  <h2 class="text-slate-700 line-clamp-2 dark:text-navy-100">
                    Bronze Fund
                  </h2>
                  <span class="text-slate-700 line-clamp-2 dark:text-navy-100">RM 50.00</span>
                </span>
                                <p class="text-xs+ text-amber-50">
                                    <img class="h-12 w-12 rounded-lg object-cover object-cente" src="{{asset('user/images/custom cards/card-1.png')}}"
                                         alt="" />
                                </p>
                            </div>
                            <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            <div class="flex items-start justify-between">
                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Current Duration
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    1 Day
                  </p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Available Units
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    120 Units
                  </p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    GRR Daily Per Unit
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    0.00755%
                  </p>
                </span>
                            </div>
                            <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            <div class="flex items-start justify-between mt-2">
                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Team Requirement
                  </h6>
                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-none">
                    <div class="flex flex-1 flex-col justify-between rounded-lg bg-success/15 p-4 sm:p-5">
                        <div>
                            <div class="flex items-start justify-between">
                <span>
                  <h2 class="text-slate-700 line-clamp-2 dark:text-navy-100">
                    Bronze Fund
                  </h2>
                  <span class="text-slate-700 line-clamp-2 dark:text-navy-100">RM 50.00</span>
                </span>
                                <p class="text-xs+ text-amber-50">
                                    <img class="h-12 w-12 rounded-lg object-cover object-cente" src="{{asset('user/images/custom cards/card-1.png')}}"
                                         alt="" />
                                </p>
                            </div>
                            <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                            <div class="flex items-start justify-between">
                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Current Duration
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    1 Day
                  </p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Available Units
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    120 Units
                  </p>
                </span>
                                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100 line-clamp-2">
                    GRR Daily Per Unit
                  </h6>
                  <p class="text-xs+ text-slate-700 line-clamp-2 dark:text-navy-100">
                    0.00755%
                  </p>
                </span>
                            </div>
                            <div class="my-3 h-px bg-black"></div>
                            <div class="flex items-start justify-between mt-2">
                <span>
                  <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-100">
                    Team Requirement
                  </h6>
                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
