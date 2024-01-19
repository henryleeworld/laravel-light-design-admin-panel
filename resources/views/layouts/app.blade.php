<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}" />
        <title>{{ trans('panel.site_title') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=Montserrat" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/sass/app.scss'])
        <link href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet" />
        <link href="{{ asset('css/light-bootstrap-dashboard.min.css?v=2.0.1') }} " rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        @yield('styles')
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.navigation')
            <div class="main-panel">
                <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                    <div class="container-fluid">
                        <!--<a class="navbar-brand" href="#">{{ trans('panel.site_title') }}</a>-->
                        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <!--<ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nc-icon nc-zoom-split"></i>
                                        <span class="d-lg-block">&nbsp;{{ __('Search') }}</span>
                                    </a>
                                </li>
                            </ul>-->
                            <ul class="navbar-nav d-flex align-items-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarLanguageDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="nc-icon nc-planet"></i>
                                        <span class="d-lg-none">{{ strtoupper(app()->getLocale()) }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarLanguageDropdownMenuLink">
                                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                                        <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarAccountDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="nc-icon nc-settings-gear-64"></i>
                                        <span class="d-lg-none">{{ __('Account') }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarAccountDropdownMenuLink">
                                        <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js" defer></script>
        <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js" defer></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" defer></script>
        <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js" defer></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" defer></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" defer></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js" defer></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js" defer></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" integrity="sha512-XMVd28F1oH/O71fzwBnV7HucLxVwtxf26XV8P4wPk26EDxuGZ91N8bsOttmnomcCD3CS5ZMRL50H0GgOHvegtg==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <script src="{{ asset('js/light-bootstrap-dashboard.min.js?v=2.0.1') }}" type="text/javascript" defer></script>
        <script type="module">
                $(function() {
              let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
              let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
              let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
              let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
              let printButtonTrans = '{{ trans('global.datatables.print') }}'
              let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

              let languages = {
                'en': '//cdn.datatables.net/plug-ins/1.13.7/i18n/en-GB.json',
                'zh_TW': '//cdn.datatables.net/plug-ins/1.13.7/i18n/zh-HANT.json'
              };

              $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
              $.extend(true, $.fn.dataTable.defaults, {
                language: {
                  url: languages['{{ app()->getLocale() }}']
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                  style:    'multi+shift',
                  selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [
                  {
                    extend: 'copy',
                    className: 'btn-default',
                    text: copyButtonTrans,
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  {
                    extend: 'csv',
                    className: 'btn-default',
                    text: csvButtonTrans,
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  {
                    extend: 'excel',
                    className: 'btn-default',
                    text: excelButtonTrans,
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  {
                    extend: 'pdf',
                    className: 'btn-default',
                    text: pdfButtonTrans,
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  {
                    extend: 'print',
                    className: 'btn-default',
                    text: printButtonTrans,
                    exportOptions: {
                      columns: ':visible'
                    }
                  },
                  {
                    extend: 'colvis',
                    className: 'btn-default',
                    text: colvisButtonTrans,
                    exportOptions: {
                      columns: ':visible'
                    }
                  }
                ]
              });

              $.fn.dataTable.ext.classes.sPageButton = '';
            });
        </script>
        @yield('scripts')
    </body>
</html>
