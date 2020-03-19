@extends('layouts.frontEndMaster')

@section('content')
	<header class="event-header">
		<img src="assets/img/about/image1.jpg" alt="Events">
	</header>
	<body>
		{{ $events->title }}
	</body>
@endsection