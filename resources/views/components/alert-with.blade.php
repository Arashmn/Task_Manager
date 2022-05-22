@if (session('Deleted'))
<div class="alert alert-info text-center" role="alert">{{ session('Deleted') }}</div>
@endif
@if (session('success Update'))
<div class="alert alert-info text-center" role="alert">{{ session('success Update') }}</div>
@endif
