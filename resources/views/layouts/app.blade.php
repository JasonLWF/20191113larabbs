<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Lavavel进阶实践项目') - {{ setting('site_name', 'Lavavel进阶实践项目') }}</title>
  <meta name="description" content="@yield('description', setting('seo_description', 'LavavelBBS 爱好者社区'))">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @yield('styles')

</head>
<body>
  <div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
      @include('shared._messages')
      @yield('content')
    </div>
    @include('layouts._footer')
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
  @if (app()->isLocal())
    @include('sudosu::user-selector')
  @endif

  <!-- Scripts -->
  @yield('scripts')

</body>
</html>
