@extends('layout.auth')

@section('title', __('Profail detail'))

@section('content')
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        @include('layout.sidebar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Profile Details
                </h2>
            </div>

            <template x-if="$store.breakpoints.isXs">
                <div x-data="{isStuck:false}" class="pb-6" x-intersect:enter.full.margin.-60px.0.0.0="isStuck = false"
                     x-intersect:leave.full.margin.-60px.0.0.0="isStuck = true">
                    <div :class="isStuck && 'fixed right-0 top-[60px] w-full z-10'">
                        <div class="transition-all duration-200"
                             :class="isStuck && 'py-2.5 px-4 bg-white dark:bg-navy-700 shadow-lg relative'">
                            <ol class="steps with-space-line">
                                <li class="step before:bg-primary dark:before:bg-accent">
                                    <div class="step-header rounded-full bg-primary text-white dark:bg-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xs font-medium text-slate-700 dark:text-navy-100">
                                        Create Account
                                    </h3>
                                </li>
                                <li class="step before:bg-primary dark:before:bg-accent">
                                    <div class="step-header rounded-full bg-primary text-white dark:bg-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <h3 class="text-xs font-medium text-slate-700 dark:text-navy-100">
                                        Select Service
                                    </h3>
                                </li>
                                <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                                    <div class="step-header rounded-full bg-primary text-white dark:bg-accent">
                                        3
                                    </div>
                                    <h3 class="text-xs font-medium text-slate-700 dark:text-navy-100">
                                        Address
                                    </h3>
                                </li>
                                <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                                    <div class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white">
                                        4
                                    </div>
                                    <h3 class="text-xs font-medium text-slate-700 dark:text-navy-100">
                                        Review
                                    </h3>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </template>
            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <div class="col-span-12 sm:col-span-9">
                    <div class="card p-4 sm:p-5">
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                            Personal Details
                        </p>
                        <div class="mt-4 space-y-4">
                            <form action="{{ route('user-profile-information.update') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <label class="block my-5">
                                <span>Name</span>
                                <span class="relative mt-1.5 flex">
                  <input
                         class="@error('name', 'updateProfileInformation') is-invalid @enderror form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                         id="name" placeholder="{{ __('Name') }}"
                         value="{{ old('name') ?? auth()->user()->name }}" required type="text" name="name" />
                  <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="far fa-user text-base"></i>
                  </span>
                </span>
                            </label>
                            @error('name', 'updateProfileInformation')
                            <span class="text-danger">
                                            {{ $message }}
                                        </span>
                            @enderror

                            <label class="block my-5 sm:col-span-8">
                                <span>Email Address</span>
                                <div class="relative mt-1.5 flex">
                                    <input type="email" name="email"
                                           class="@error('email', 'updateProfileInformation') is-invalid @enderror form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                           value="{{ old('email') ?? auth()->user()->email }}" required />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <i class="fa-regular fa-envelope text-base"></i>
                  </span>
                                </div>
                            </label>
                            @error('email', 'updateProfileInformation')
                            <span class="text-danger">
                                            {{ $message }}
                                        </span>
                            @enderror
                                <button type="submit"
                                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    <span>Submit Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </button>
            </form>
                            <form method="POST" action="{{ route('user-password.update') }}">
                                @csrf
                                @method('put')
                            <label class="block my-5 sm:col-span-8">
                                <span style="font-size: 1rem" class="font-semibold bg-accent-focus">Change Password</span>
                                <p class="mt-3">Current Password</p>
                                <div class="relative mt-1.5 flex">
                                    <input type="password" name="current_password"
                                        class="@error('current_password', 'updatePassword') is-invalid @enderror form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                           id="password" placeholder="Current Password" required  />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  </span>
                                </div>
                            </label>
                                @error('current_password', 'updatePassword')
                                <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                @enderror
                                <label class="block my-5 sm:col-span-8">
                                <span style="font-size: 1rem" class="font-semibold bg-accent-focus">New Password</span>
                                <div class="relative mt-1.5 flex">
                                    <input type="password" name="password"
                                        class="@error('password', 'updatePassword') is-invalid @enderror form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                           id="password" placeholder="New Password" required  />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  </span>
                                </div>
                            </label>
                                @error('password', 'updatePassword')
                                <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                @enderror
                            <label class="block my-5 sm:col-span-8">
                                <span>Confirm Password</span>
                                <div class="relative mt-1.5 flex">
                                    <input type="password"  id="password_confirmation"
                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                           name="password_confirmation" placeholder="Confirm Password" required />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                  </span>
                                </div>
                            </label>

                            <div class="flex justify-center space-x-2">
                                <button type="submit"
                                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    <span>Submit Now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- <div class="hidden sm:col-span-4 sm:block">
                    <div class="sticky top-24 mt-3">
                      <ol class="steps is-vertical line-space">
                        <li class="step pb-8 before:bg-primary dark:before:bg-accent">
                          <div
                            class="step-header rounded-full bg-primary text-white dark:bg-accent"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                              />
                            </svg>
                          </div>
                          <h3 class="ml-4 text-slate-700 dark:text-navy-100">
                            Create Account
                          </h3>
                        </li>
                        <li class="step pb-8 before:bg-primary dark:before:bg-accent">
                          <div
                            class="step-header rounded-full bg-primary text-white dark:bg-accent"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                              />
                            </svg>
                          </div>
                          <h3 class="ml-4 text-slate-700 dark:text-navy-100">
                            Select Service
                          </h3>
                        </li>
                        <li
                          class="step pb-8 before:bg-slate-200 dark:before:bg-navy-500"
                        >
                          <div
                            class="step-header rounded-full bg-primary text-white dark:bg-accent"
                          >
                            3
                          </div>
                          <h3 class="ml-4 text-slate-700 dark:text-navy-100">
                            Address
                          </h3>
                        </li>
                        <li
                          class="step pb-8 before:bg-slate-200 dark:before:bg-navy-500"
                        >
                          <div
                            class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white"
                          >
                            4
                          </div>
                          <h3 class="ml-4 text-slate-700 dark:text-navy-100">Submit</h3>
                        </li>
                      </ol>
                    </div>
                  </div> -->
            </div>
        </main>
    </div>
@endsection
