// Class for the Header component: animated and responsive header
export default class Header {
  constructor(element) {
    this.element = element;
    this.scrollPosition = 0;
    this.lastScrollPosition = 0;

    // Initialize scroll limit based on a specified element or use a default value
    this.scrollLimit = this.calculateScrollLimit();

    this.html = document.documentElement;

    this.init();
    this.initNavMobile();
  }

  // Initialize event listeners
  init() {
    console.log('Header initialized');
    window.addEventListener('scroll', this.onScroll.bind(this));
  }

  // Calculate the scroll limit
  calculateScrollLimit() {
    const limitElement = document.querySelector('[data-scroll-limit]');
    if (limitElement) {
      const rect = limitElement.getBoundingClientRect();
      console.log(`Scroll limit calculated: ${rect.height / 100}`);
      return rect.height / 100;
    }
    console.log('Using default scroll limit');
    return 0.1; // Default value
  }

  // Handle scroll events
  onScroll() {
    this.lastScrollPosition = this.scrollPosition;
    this.scrollPosition = document.scrollingElement.scrollTop;

    this.updateHeaderVisibility();
    this.updateScrollDirection();
  }

  // Update header visibility based on scroll position
  updateHeaderVisibility() {
    const scrollHeight = document.scrollingElement.scrollHeight;
    const notHiding = this.element.dataset.notHiding === 'not-hiding';

    if (!notHiding && this.scrollPosition > scrollHeight * this.scrollLimit) {
      this.html.classList.add('header-is-hidden');
    } else {
      this.html.classList.remove('header-is-hidden');
    }
  }

  // Update scroll direction states
  updateScrollDirection() {
    const isScrollingDown = this.scrollPosition >= this.lastScrollPosition;

    this.html.classList.toggle('is-scrolling-down', isScrollingDown);
    this.html.classList.toggle('is-scrolling-up', !isScrollingDown);
  }

  // Initialize mobile navigation toggle
  initNavMobile() {
    const toggle = this.element.querySelector('.js-toggle');

    if (toggle) {
      toggle.addEventListener('click', this.toggleNav.bind(this));
    } else {
      console.warn('Toggle button not found');
    }
  }

  // Toggle mobile navigation
  toggleNav() {
    this.html.classList.toggle('nav-is-active');
  }
}
