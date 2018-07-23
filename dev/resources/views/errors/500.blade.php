<!DOCTYPE html>
<html>

@include('layouts._head')


<body class="five-zero-zero">
    <div class="five-zero-zero-container">
        <div class="error-code">500</div>
        <div class="error-message">Internal Server Error</div>
        <div class="button-place">
            <a href="{{url('/')}}" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>

    @include('layouts._script')
    
</body>

</html>