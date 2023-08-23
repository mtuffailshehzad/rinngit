@extends('layout.auth')

@section('title', __('Team'))

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
            <div style="padding-left: 2rem" class="mt-8 grid grid-cols-1">
                <!-- class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4" -->
                <ul>
                    <li class="my-3" style="width: 60rem">
                        <div class="card shadow-none my-3">
                            <div
                                class="flex flex-1 flex-col justify-between rounded-lg bg-white shadow-lg p-4 dark:bg-transparent sm:p-5">
                                <div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h2 class="font-medium text-info">Jimmy</h2>
                      <span class="text-xs text-slate-700 line-clamp-2 dark:text-navy-10">Ranking : Member</span>
                    </span>
                                        <p class="font-medium text-info text-right">
                                            <span class="">You</span> <br /><span>1 Members</span>
                                        </p>
                                    </div>
                                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Personal Investment
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Direct Sponser Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Group Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="my-3" style="width: 60rem">
                        <div class="card shadow-none my-3">
                            <div
                                class="flex flex-1 flex-col justify-between rounded-lg bg-white shadow-lg p-4 dark:bg-transparent sm:p-5">
                                <div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h2 class="font-medium text-info">Jimmy</h2>
                      <span class="text-xs text-slate-700 line-clamp-2 dark:text-navy-10">Ranking : Member</span>
                    </span>
                                        <p class="font-medium text-info text-right">
                                            <span class="">You</span> <br /><span>1 Members</span>
                                        </p>
                                    </div>
                                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Personal Investment
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Direct Sponser Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Group Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="my-3" style="width: 60rem">
                        <div class="card shadow-none my-3">
                            <div
                                class="flex flex-1 flex-col justify-between rounded-lg bg-white shadow-lg p-4 dark:bg-transparent sm:p-5">
                                <div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h2 class="font-medium text-info">Jimmy</h2>
                      <span class="text-xs text-slate-700 line-clamp-2 dark:text-navy-10">Ranking : Member</span>
                    </span>
                                        <p class="font-medium text-info text-right">
                                            <span class="">You</span> <br /><span>1 Members</span>
                                        </p>
                                    </div>
                                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Personal Investment
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Direct Sponser Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Group Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="my-3" style="width: 60rem">
                        <div class="card shadow-none my-3">
                            <div
                                class="flex flex-1 flex-col justify-between rounded-lg bg-white shadow-lg p-4 dark:bg-transparent sm:p-5">
                                <div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h2 class="font-medium text-info">Jimmy</h2>
                      <span class="text-xs text-slate-700 line-clamp-2 dark:text-navy-10">Ranking : Member</span>
                    </span>
                                        <p class="font-medium text-info text-right">
                                            <span class="">You</span> <br /><span>1 Members</span>
                                        </p>
                                    </div>
                                    <div class="my-3 h-px bg-slate-200 dark:bg-navy-500"></div>
                                    <div class="flex items-start justify-between">
                    <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Personal Investment
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Direct Sponser Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                        <span>
                      <h6 class="mt-3 text-xs text-slate-700 line-clamp-2 dark:text-navy-10">
                        Group Sales
                      </h6>
                      <p class="text-xs+ text-info line-clamp-2">$0.00</p>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>
@endsection
