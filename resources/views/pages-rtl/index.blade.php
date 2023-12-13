<x-rtl.base-layout :scrollspy="false">

    <x-slot:pageTitle>{{ $title }}</x-slot>

    <x-slot:headerFiles>

        {{-- @vite(['resources/rtl/scss/light/assets/apps/blog-post.scss']) --}}
        {{-- @vite(['resources/rtl/scss/dark/assets/apps/blog-post.scss']) --}}
        @vite(['resources/scss/light/assets/apps/blog-post.scss'])
        @vite(['resources/scss/dark/assets/apps/blog-post.scss'])

        @vite(['resources/rtl/scss/light/assets/components/modal.scss'])
        @vite(['resources/rtl/scss/dark/assets/components/modal.scss'])
        @vite(['resources/scss/light/assets/components/modal.scss'])
        @vite(['resources/scss/dark/assets/components/modal.scss'])

        @vite(['public/plugins-rtl/filepond/filepond.min.css'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginImagePreview.min.css'])
        @vite(['public/plugins-rtl/tagify/tagify.css'])
        @vite(['resources/rtl/scss/light/assets/forms/switches.scss'])
        @vite(['resources/rtl/scss/dark/assets/forms/switches.scss'])
        @vite(['resources/rtl/scss/light/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/rtl/scss/dark/plugins/editors/quill/quill.snow.scss'])
        @vite(['resources/rtl/scss/light/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/rtl/scss/dark/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/rtl/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/rtl/scss/dark/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/rtl/scss/light/assets/apps/ecommerce-create.scss'])
        @vite(['resources/rtl/scss/dark/assets/apps/ecommerce-create.scss'])
        @vite(['public/plugins-rtl/leaflet/leaflet.css'])
        @vite(['resources/scss/light/assets/pages/contact_us.scss'])
        @vite(['resources/scss/dark/assets/pages/contact_us.scss'])

        @vite(['resources/scss/light/assets/components/timeline.scss'])
        @vite(['resources/scss/dark/assets/components/timeline.scss'])

        <style>
            .toggle-code-snippet {
                margin-bottom: 0px;
            }

            body.dark .toggle-code-snippet {
                margin-bottom: 0px;
            }

            .request-btn {
                margin-top: 40px;
                width: 250px;
            }

            @media screen and (max-width: 990px) {
                .font-bg {
                    font-size: 26px;
                }
            }

            @media screen and (max-width: 600px) {
                .font-bg {
                    font-size: 18px;
                }

                .font-bg-btn {
                    font-size: 14px;
                }

                .request-btn {
                    margin-top: 30px;
                    width: auto;
                }
            }

            @media screen and (max-width: 300px) {
                .font-bg {
                    font-size: 16px;
                }

                .font-bg-btn {
                    font-size: 13px;
                }
            }
        </style>

    </x-slot>


    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <div>
                <div class="featured-image">
                    <div class="featured-image-overlay"></div>
                    <div class="post-header">
                        <div class="post-title m-3">
                            <h1 class="mb-0 font-bg">{{ __('trans.main_content') }}</h1>
                            @auth
                                <a href="/request-research" class="btn btn-info request-btn"
                                    style="font-size: 18px; border-radius: 20px">
                                    <span class="font-bg-btn">{{ __('trans.request_btn') }}</span>
                                </a>
                            @else
                                <div>
                                    <button class="btn btn-info request-btn" style="font-size: 18px; border-radius: 20px"
                                        data-bs-toggle="modal" data-bs-target="#loginModal">
                                        <span class="font-bg-btn">{{ __('trans.request_btn') }}</span>
                                    </button>
                                    <div class="modal fade inputForm-modal" id="loginModal" tabindex="-1" role="dialog"
                                        aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" id="inputFormModalLabel">
                                                    <h5 class="modal-title">{{ __('trans.login_to') }}
                                                        <b>{{ __('trans.bhoothat') }}</b>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-hidden="true"><svg aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18">
                                                            </line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18">
                                                            </line>
                                                        </svg></button>
                                                </div>
                                                <form method="POST" action="/login">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-mail"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none">
                                                                        </path>
                                                                        <rect x="3" y="5" width="18" height="14"
                                                                            rx="2">
                                                                        </rect>
                                                                        <polyline points="3 7 12 13 21 7"></polyline>
                                                                    </svg>
                                                                </span>
                                                                <input id="email" class="form-control" type="email"
                                                                    name="email" value="{{ old('email') }}"
                                                                    autocomplete="email"
                                                                    placeholder="{{ __('trans.email_placeholder') }}"
                                                                    required autofocus />
                                                            </div>
                                                            @error('email')
                                                                <p class="m-2 text-red-600" style="color: red">
                                                                    {{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-lock"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none">
                                                                        </path>
                                                                        <rect x="5" y="11" width="14" height="10"
                                                                            rx="2"></rect>
                                                                        <circle cx="12" cy="16" r="1">
                                                                        </circle>
                                                                        <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                                    </svg>
                                                                </span>
                                                                <input id="password" class="form-control"
                                                                    type="password" name="password"
                                                                    placeholder="{{ __('trans.password_placeholder') }}"
                                                                    autocomplete="password" required autofocus />
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="form-check form-check-primary form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="remember_me" name="remember">
                                                                <label class="form-check-label mb-0"
                                                                    for="form-check-primary">
                                                                    {{ __('trans.remember_me') }}
                                                                </label>
                                                            </div>
                                                            <a
                                                                href="javascript:void(0);">{{ __('trans.forget_password?') }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="btn btn-light-success mt-2 mb-2 btn-no-effect"
                                                            data-bs-dismiss="#loginModal" data-bs-toggle="modal"
                                                            data-bs-target="#registerModal">{{ __('trans.sign_up') }}
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary mt-2 mb-2 btn-no-effect">{{ __('trans.login') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade inputForm-modal" id="registerModal" tabindex="-1"
                                        role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" id="inputFormModalLabel">
                                                    <h5 class="modal-title">{{ __('trans.register_to') }}
                                                        <b>{{ __('trans.bhoothat') }}</b>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-hidden="true"><svg aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18">
                                                            </line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18">
                                                            </line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form class="mt-0" method="POST" action="/register">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-user"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none">
                                                                        </path>
                                                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <input id="name" class="form-control" type="text"
                                                                    name="name" value="{{ old('name') }}"
                                                                    autocomplete="name"
                                                                    placeholder="{{ __('trans.name_placeholder') }}"
                                                                    required autofocus />
                                                            </div>
                                                            @error('name')
                                                                <p class="m-2 text-red-600" style="color: red">
                                                                    {{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-mail"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none">
                                                                        </path>
                                                                        <rect x="3" y="5" width="18" height="14"
                                                                            rx="2"></rect>
                                                                        <polyline points="3 7 12 13 21 7"></polyline>
                                                                    </svg>
                                                                </span>
                                                                <input id="email" class="form-control" type="email"
                                                                    name="email" value="{{ old('email') }}"
                                                                    autocomplete="email"
                                                                    placeholder="{{ __('trans.email_placeholder') }}"
                                                                    required autofocus />
                                                            </div>
                                                            @error('email')
                                                                <p class="m-2 text-red-600" style="color: red">
                                                                    {{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-lock"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none">
                                                                        </path>
                                                                        <rect x="5" y="11" width="14" height="10"
                                                                            rx="2"></rect>
                                                                        <circle cx="12" cy="16" r="1">
                                                                        </circle>
                                                                        <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                                    </svg>
                                                                </span>
                                                                <input id="password" class="form-control"
                                                                    type="password" name="password"
                                                                    placeholder="{{ __('trans.password_placeholder') }}"
                                                                    autocomplete="new-password" required autofocus />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="icon icon-tabler icon-tabler-lock"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none">
                                                                        </path>
                                                                        <rect x="5" y="11" width="14" height="10"
                                                                            rx="2"></rect>
                                                                        <circle cx="12" cy="16" r="1">
                                                                        </circle>
                                                                        <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                                                    </svg>
                                                                </span>
                                                                <input id="password_confirmation" class="form-control"
                                                                    type="password" name="password_confirmation"
                                                                    autocomplete="new-password"
                                                                    placeholder="{{ __('trans.confirm_password_placeholder') }}"
                                                                    required autofocus />
                                                            </div>
                                                            @error('password')
                                                                <p class="m-2 text-red-600" style="color: red">
                                                                    {{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="form-check form-check-primary form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="form-check-primary">
                                                                <label class="form-check-label mb-0"
                                                                    for="form-check-primary">
                                                                    {{ __('trans.agree') }} <a href="javascript:void(0);"
                                                                        class="text-primary">{{ __('trans.terms_conditions') }}</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="btn btn-light-success mt-2 mb-2 btn-no-effect"
                                                            data-bs-dismiss="#registerModal" data-bs-toggle="modal"
                                                            data-bs-target="#loginModal">{{ __('trans.sign_in') }}</div>
                                                        <button type="submit"
                                                            class="btn btn-primary mt-2 mb-2 btn-no-effect">{{ __('trans.register') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mr-4 ml-4">
        <div class="row">
            <div style="margin-top: 40px; margin-bottom: 50px">
                <div class="card">
                    <h4 class="text-center mt-4 mb-4"><b>{{ __('trans.samples') }}</b></h4>
                </div>
            </div>
            {{-- <h4 class="text-center mt-4 mb-4"><b>{{ __('trans.samples') }}</b></h4> --}}
            @foreach ($researches as $research)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4 text-center m-auto">
                    <div class="card style-2 mb-md-0 mb-4">
                        <img src="{{ $research->image ? Vite::asset('public/storage/' . $research->image) : Vite::asset('public/no-image.png') }}""
                            class="card-img-top" alt="..." style="height: 210px">
                        <h5 class="m-3">{{ $research->title }}</h5>
                        <a href="/research/{{ $research->id }}"
                            class="btn btn-secondary m-auto">{{ __('trans.read') }}</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 40px; margin-bottom: 50px">
            <div class="card">
                <h4 class="text-center mt-4 mb-4"><b>{{ __('trans.our_team') }}</b></h4>
            </div>
        </div>
    </div>

    {{-- <div class="container mt-4 mb-4">
        <div class="card">
            <h4 class="text-center mt-4 mb-4"><b>{{ __('trans.our_team') }}</b></h4>
        </div>
    </div> --}}

    <div class="container mt-container">
        <ul class="modern-timeline pl-0">
            <li class="position-static">
                <div class="modern-timeline-top"></div>
            </li>
            @if (count($members))
                @foreach ($members as $member)
                    <li>
                        <div class="modern-timeline-badge"></div>
                        <div class="modern-timeline-panel">
                            <div class="modern-timeline-preview">
                                <img src="{{ Vite::asset('public/storage/' . $member->photo) }}" alt="timeline">
                            </div>
                            <div class="modern-timeline-body">
                                <p class="mb-4"><b>{{ $member->name }}</b></h4>
                                <h4 class="mb-4">{{ $member->position }}</h4>
                                <p>{{ $member->about }}</p>
                                {{-- <p><a href="javascript:void(0);" class="btn btn-outline-primary mt-2">Read more</a>
                                </p> --}}
                            </div>
                        </div>
                    </li>
                @endforeach
            @endif
            {{-- <li class="position-static">
                <div class="modern-timeline-top"></div>
            </li> --}}
            <li class="position-static">
                <div class="modern-timeline-bottom"></div>
            </li>
        </ul>
    </div>

    <div class="statbox widget box box-shadow layout-top-spacing">
        <div class="widget-content widget-content-area">
            <div class="contact-us-form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="paper contact-us-info-section-1">
                            <div class="row gx-5">
                                <div class="col-12 mb-3 text-center">
                                    <h4 class="contact-title">{{ __('trans.contact_us') }}</h4>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                    <div class="widget-paper">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-help" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <line x1="12" y1="17" x2="12" y2="17.01">
                                                </line>
                                                <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                                            </svg>
                                        </div>
                                        <h5>{{ __('trans.support') }}</h5>
                                        <p>support@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                                    <div class="widget-paper">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-mail" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                                <path d="M3 7l9 6l9 -6" />
                                            </svg>
                                        </div>
                                        <h5>{{ __('trans.enquire') }}</h5>
                                        <p>buhothy@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 mb-3 mx-auto">
                                    <div class="widget-paper">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-phone" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                            </svg>
                                        </div>
                                        <h5>{{ __('trans.phone') }}</h5>
                                        <p>+1 (218) 356 954</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container w-25">{{ $researches->links() }}</div> --}}

    <x-slot:footerFiles>
        @vite(['public/plugins-rtl/editors/quill/quill.js'])
        @vite(['public/plugins-rtl/filepond/filepond.min.js'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginFileValidateType.min.js'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginImageExifOrientation.min.js'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginImagePreview.min.js'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginImageCrop.min.js'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginImageResize.min.js'])
        @vite(['public/plugins-rtl/filepond/FilePondPluginImageTransform.min.js'])
        @vite(['public/plugins-rtl/filepond/filepondPluginFileValidateSize.min.js'])
        @vite(['public/plugins-rtl/tagify/tagify.min.js'])
        @vite(['resources/rtl/assets/js/apps/ecommerce-create.js'])
        @vite(['public/plugins-rtl/leaflet/leaflet.js'])
        @vite(['public/plugins-rtl/leaflet/us-states.js'])
        @vite(['public/plugins-rtl/leaflet/eu-countries.js'])
    </x-slot>

</x-rtl.base-layout>
