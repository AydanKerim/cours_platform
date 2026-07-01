@extends('layouts.frontend')

@section('content')

	<div id="adbox">
		<div class="clearfix">

			<div class="detail">
				<h1>
					OutBox Academy
				</h1>

				<p>
					Praktiki proqramlaşdırma dərsləri<br>
					Real layihələr üzərində təcrübə<br>
					Sertifikat və mentor dəstəyi
				</p>
			</div>
				<img src="{{ asset('images/programming-banner.jpg.jpg') }}" alt="OutBox Academy" width="500px">

		</div>
	</div>
	</div>

	<div class="featured">
		<h2>Kurslarımız</h2>
		<ul class="clearfix">
			@foreach ($courses as $course)

				<li>
					<div class="frame1">
						<div class="box">
							@if($course->photo)
								<img src="{{ asset('storage/' . $course->photo) }}" alt="{{ $course->title }}" height="130"
									width="197">
							@endif


						</div>
					</div>

					<p>
						<b>{{ $course->title }}</b>
						<br><br>

						{{ Str::limit($course->description, 20) }}
					</p>



					<p>
						 Müddət: 
						 {{ $course->duration }}
					</p>

					<p>
						 Dərs sayı:
						{{ $course->lessons->count() }}
					</p>

					<a href="{{ route('frontend.course.show', $course->id) }}" class="more">
						Ətraflı
					</a>
				</li>

			@endforeach
		</ul>
	</div>

@endsection