// Reference: https://www.youtube.com/watch?v=RsPWEmfOQdU&t=1170s&ab_channel=WEBCIFAR

const sections = document.querySelectorAll('section');
const navLi = document.querySelectorAll('nav ul li');
// console.log(navLi);

window.addEventListener('scroll', () => {
	//console.log('pageYOffset: ' + window.pageYOffset);
	let current = '';

	sections.forEach(section => {
		// get distance from top of page to the current section
		const sectionTop = section.offsetTop;
		//console.log('sectionTop: ' + sectionTop);

		// get the height of each section
		const sectionHeight = section.clientHeight;
		//console.log('section height: ' + sectionHeight);

		// if the distance scrolled is past a specified value, get the current sections's id
		// pageYOffset = returns the number of pixels the document is currently scrolled along the vertical axis (that is, up or down)
		if (pageYOffset >= sectionTop - sectionHeight / 25) {
			current = section.getAttribute('id');
			// console.log(sectionTop - sectionHeight / 12);
		}
	});

	navLi.forEach(li => {
		li.classList.remove('active');

		if (li.classList.contains(current)) {
			li.classList.add('active');
		}
	});
});
