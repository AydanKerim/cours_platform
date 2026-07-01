document.addEventListener('DOMContentLoaded', function () {
	document.querySelectorAll('.partners-slider').forEach(function (slider) {
		var track = slider.querySelector('.partners-track');
		var slides = track.children;
		var prevBtn = slider.querySelector('.partners-prev');
		var nextBtn = slider.querySelector('.partners-next');
		var dotsWrap = slider.parentElement.querySelector('.partners-dots');

		if (!slides.length) return;

		var index = 0;
		var timer;

		function perView() {
			var w = window.innerWidth;
			if (w <= 480) return 1;
			if (w <= 700) return 2;
			if (w <= 900) return 3;
			return 4;
		}

		function pageCount() {
			return Math.max(1, slides.length - perView() + 1);
		}

		function renderDots() {
			dotsWrap.innerHTML = '';
			var total = pageCount();
			for (var i = 0; i < total; i++) {
				var dot = document.createElement('button');
				dot.type = 'button';
				dot.className = 'partners-dot' + (i === index ? ' active' : '');
				dot.setAttribute('aria-label', 'Slayd ' + (i + 1));
				dot.addEventListener('click', (function (page) {
					return function () {
						goTo(page);
						restart();
					};
				})(i));
				dotsWrap.appendChild(dot);
			}
		}

		function update() {
			var slideWidth = slides[0].getBoundingClientRect().width;
			track.style.transform = 'translateX(-' + (index * slideWidth) + 'px)';
			renderDots();
		}

		function goTo(i) {
			var total = pageCount();
			index = ((i % total) + total) % total;
			update();
		}

		function next() {
			goTo(index + 1);
		}

		function prev() {
			goTo(index - 1);
		}

		function restart() {
			clearInterval(timer);
			timer = setInterval(next, 3500);
		}

		prevBtn.addEventListener('click', function () {
			prev();
			restart();
		});

		nextBtn.addEventListener('click', function () {
			next();
			restart();
		});

		slider.addEventListener('mouseenter', function () {
			clearInterval(timer);
		});

		slider.addEventListener('mouseleave', restart);

		window.addEventListener('resize', function () {
			index = Math.min(index, pageCount() - 1);
			update();
		});

		update();
		restart();
	});
});
