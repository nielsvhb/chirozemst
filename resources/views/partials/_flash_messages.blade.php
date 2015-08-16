@if (Session::has('error'))
	<script type="text/javascript"> Materialize.toast('{{ Session::pull('error') }}', 4000)</script>
@endif

@if (Session::has('success'))
	<div class="black">
		<script type="text/javascript"> Materialize.toast('{{ Session::pull('success') }}', 4000)</script>
	</div>
@endif

