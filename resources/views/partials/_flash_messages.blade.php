@if (Session::has('error'))
	<script type="text/javascript"> Materialize.toast('{{ \Illuminate\Support\Facades\Session::pull('error') }}', 4000, 'error')</script>
@endif

@if (Session::has('success'))
	<script type="text/javascript"> Materialize.toast('{{ \Illuminate\Support\Facades\Session::pull('success') }}', 4000, 'success')</script>
@endif

