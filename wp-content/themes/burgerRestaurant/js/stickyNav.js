const scrollTrigger = document.querySelector('#scroll-trigger');
const scrollTriggerYcoord = scrollTrigger.offsetTop;
// console.log(scrollTriggerYcoord);
const header = document.querySelector('#header');

window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	// scrollY no IE support. pageYOffset IE 9 > support.
	// The read-only scrollY property of the Window interface returns the number of pixels that the document is currently scrolled vertically.
	/* at 400px before the about section, add or remove opacity: 0 and visibility: hidden  with .sticky class. so that .scrolling class can add opacity: 1 and visibility: visible. Triggered at 400px so the fade out is not abrupt. */
	// if (
	// 	(typeof window.scrollY === 'undefined'
	// 		? window.pageYOffset
	// 		: window.scrollY) >
	// 	aboutSectionYcoord - 400
	// ) {
	// 	header.classList.add('sticky');
	// } else {
	// 	header.classList.remove('sticky');
	// }

	/* at 350px before the about section, add css transition property with .fade-transition class  */
	// if (
	// 	(typeof window.scrollY === 'undefined'
	// 		? window.pageYOffset
	// 		: window.scrollY) >
	// 	aboutSectionYcoord - 350
	// ) {
	// 	header.classList.add('fade-transition');
	// } else {
	// 	header.classList.remove('fade-transition');
	// }

	// The read-only scrollY property of the Window interface returns the number of pixels that the document is currently scrolled vertically.
	/* at the about section, fade in the sticky nav opacity by adding .scrolling class */
	if (
		(typeof window.scrollY === 'undefined'
			? window.pageYOffset
			: window.scrollY) >
		scrollTriggerYcoord - 500
	) {
		header.classList.add('scrolling');
	} else {
		header.classList.remove('scrolling');
	}
}
