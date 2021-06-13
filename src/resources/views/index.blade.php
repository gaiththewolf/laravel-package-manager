<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Package Mmangaer - UI</title>
    <link rel="stylesheet" href="{{ asset('laravel-package-mangaer/bsr/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('laravel-package-mangaer/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png">

</head>

<body class="dark-theme">
    <div id="app" class="p-lg-5">
        <div>
            <!-- header -->
            <div>
                <!-- Image and text -->
                <nav class="navbar justify-content-center">
                  <a class="navbar-brand" target="__blank" href="https://github.com/gaiththewolf">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/laravel-226015.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Laravel Package Mmangaer - UI
                  </a>
                </nav>
            </div>
            <!-- cards -->
            <div class="d-flex flex-wrap mt-2 mb-2" v-if="cards">
                <div class="col-lg-4 p-0 col-md-6 col-sm-12">
                    <div class="card m-1">
                        <div class="card-body d-flex">
                            <strong>{{ __('lpmanager::lpmanager.Dependencies') }}</strong>
                            <h3 class="ml-auto">
                                <i class="fa mr-2 fa-cubes"></i>
                                <strong>{{ $counts['depends'] }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-12">
                    <div class="card m-1">
                        <div class="card-body d-flex">
                            <strong>{{ __('lpmanager::lpmanager.Dev Dependencies') }}</strong>
                            <h3 class="ml-auto">
                                <i class="fa mr-2 fa-cubes"></i>
                                <strong>{{ $counts['dev_depends'] }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-12">
                    <div class="card m-1">
                        <div class="card-body d-flex">
                            <strong>{{ __('lpmanager::lpmanager.Libraries') }}</strong>
                            <h3 class="ml-auto">
                                <i class="fa mr-2 fa-cubes"></i>
                                <strong>{{ $counts['libraries'] }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-12">
                    <div class="card m-1">
                        <div class="card-body d-flex">
                            <strong>{{ __('lpmanager::lpmanager.Projects') }}</strong>
                            <h3 class="ml-auto">
                                <i class="fa mr-2 fa-cubes"></i>
                                <strong>{{ $counts['projects'] }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-12">
                    <div class="card m-1">
                        <div class="card-body d-flex">
                            <strong>{{ __('lpmanager::lpmanager.Metapackages') }}</strong>
                            <h3 class="ml-auto">
                                <i class="fa mr-2 fa-cubes"></i>
                                <strong>{{ $counts['metapackages'] }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 col-md-6 col-sm-12">
                    <div class="card m-1">
                        <div class="card-body d-flex">
                            <strong>{{ __('lpmanager::lpmanager.Composer plugins') }}</strong>
                            <h3 class="ml-auto">
                                <i class="fa mr-2 fa-cubes"></i>
                                <strong>{{ $counts['composer_plugins'] }}</strong>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="packages-container pb-4 pt-2">

                <!-- search for package -->
                <div class="form-group">
                    <input type="text" id="search" placeholder="{{ __('lpmanager::lpmanager.search for a package..') }}" class="border-0 bg-transparent p-3 form-control">
                </div>

                <!-- packages -->
                <div class="d-flex flex-wrap" id="packages">
                    <div class="col-lg-6 packages_column">
                        <h3 class="mb-3 text-center"><strong>{{ __('lpmanager::lpmanager.Dependencies') }}</strong></h3>
                        <!-- requirements -->
                        @foreach ($depends as $depend)
                            @include('lpmanager::partial.package', $depend)
                        @endforeach
                    </div>

                    <div class="col-lg-6 packages_column">
                        <h3 class="mb-3 text-center"><strong>{{ __('lpmanager::lpmanager.Dev Dependencies') }}</strong></h3>
                        <!-- dev requirements -->
                        @foreach ($dev_depends as $depend)
                            @include('lpmanager::partial.package', $depend)
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
        <button onclick="switchTheme(this)" class="theme-toggler">
            <i class="fas fa-sun"></i>
        </button>
    </div>
    <script src="{{ asset('laravel-package-mangaer/bsr/jquery.js') }}"></script>
    <script src="{{ asset('laravel-package-mangaer/bsr/popper.min.js') }}"></script>
    <script src="{{ asset('laravel-package-mangaer/bsr/bootstrap.min.js') }}"></script>
    <script src="{{ asset('laravel-package-mangaer/theme-switcher.js') }}"></script>
    <script src="{{ asset('laravel-package-mangaer/main.js') }}"></script>
</body>

</html>
