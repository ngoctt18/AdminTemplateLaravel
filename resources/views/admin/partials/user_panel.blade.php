<!-- Sidebar user panel -->
<div class="user-panel">
	<div class="pull-left image">
		<img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
	</div>
	<div class="pull-left info">
		<p>{{Auth::user()->name}}</p>
		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
</div>