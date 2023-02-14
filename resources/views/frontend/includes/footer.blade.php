<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="{{  asset('public/frontend/js/custom.js') }}"></script>


@if (!empty($pluginjs))
    @foreach ($pluginjs as $value)
        <script src="{{ asset('public/backend/js/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

@if (!empty($js))
@foreach ($js as $value)
    <script src="{{ asset('public/backend/js/customjs/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
<script type="text/javascript">
    jQuery(document).ready(function () {
        $('#loader').show();
        $('#loader').fadeOut(2000);
    });
    </script>

<script>

    jQuery(document).ready(function () {
        @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{  $value }}
                @endforeach
        @endif
    });
</script>
