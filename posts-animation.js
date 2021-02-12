/* Post list Animation */

window.addEventListener('load', function () {

	const images = Array.from(document.querySelectorAll('.is-style-post-list-block-styles .wp-block-latest-posts__featured-image'));

	if ('IntersectionObserver' in window) {
		const imageObserver = new IntersectionObserver((entries, observer) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					const image = entry.target;
					image.classList.add("visible");
					imageObserver.unobserve(image);
				}
			});
		});
		images.forEach(img => imageObserver.observe(img));
	} else {
		images.forEach(image => {
			image.classList.add("visible");
		});
	}

})