 @if (session('cerrors'))

	<div class="alert alert-danger alert-block">

		<button type="button" class="close" data-dismiss="alert">×</button>	
		<p style="margin:auto;">{{ session('cerrors') }}</p>

	</div>
  @endif