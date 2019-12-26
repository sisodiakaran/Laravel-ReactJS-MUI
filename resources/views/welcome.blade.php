<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('MIX_APP_NAME')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="//cdn.muicss.com/mui-0.10.0/css/mui.min.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id="{{env('MIX_APP_NAME')}}"></div>

        <!-- Scripts -->
        <script type="text/javascript">
            window.namespace = "{{env('MIX_APP_NAME')}}";
        </script>
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </body>
</html>