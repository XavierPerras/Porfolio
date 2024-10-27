export default class Scrolly {
  constructor(element) {
    this.element = element;
    this.options = {
      rootMargin: '0px',
      threshold: 0.1,
    };
    this.init();
  }

  init() {
    const items = this.element.querySelectorAll('[data-scrolly]');
    const observer = new IntersectionObserver(
      this.watch.bind(this),
      this.options
    );

    items.forEach((item) => {
      // If item is in the viewport initially, add the animation class
      if (this.isInViewport(item)) {
        item.classList.add('is-active');
      }
      // Start observing each item
      observer.observe(item);
    });
  }

  // Utility to check if element is in viewport on load
  isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom >= 0;
  }

  watch(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-active');
        if (this.element.dataset.norepeat === 'noRepeat') {
          observer.unobserve(entry.target);
        }
      } else {
        entry.target.classList.remove('is-active');
      }
    });
  }
}
