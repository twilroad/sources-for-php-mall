<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>notadd-user</title>
    <link href="{{ asset('assets/mall/user/css/app.css') }}" rel="stylesheet">
</head>
<body>
<script>
    window.foregroundLink = 'http://localhost:8080/';
    window.storeLink = 'http://localhost:8081/';
    window.userLink = 'http://localhost:8082/';
</script>
<div id="app"></div>
<script type="text/javascript" src="{{ asset('assets/mall/user/js/manifest.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mall/user/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mall/user/js/app.js') }}"></script>
</body>
</html>