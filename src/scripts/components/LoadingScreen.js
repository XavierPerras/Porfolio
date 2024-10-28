export default class LoadingScreen {
  constructor() {
    this.init();
    this.LoadingScreen();
  }

  init() {
    let loadingComplete = false;
    const minLoadingTime = 3000; // Minimum loading time in milliseconds (3 seconds)
    let loadingTimer;

    // Wait for all resources to load
    window.addEventListener('load', function () {
      loadingComplete = true; // Mark loading as complete
      clearTimeout(loadingTimer); // Clear the timer if the page loads early
      setTimeout(hideLoadingScreen, minLoadingTime); // Ensure we hide the preloader after minimum time
    });

    // Start the loading timer for minimum display duration
    loadingTimer = setTimeout(() => {
      if (!loadingComplete) {
        hideLoadingScreen(); // Hide if still showing after timeout
      }
    }, minLoadingTime); // Show for at least 3 seconds

    function hideLoadingScreen() {
      const loadingScreen = document.getElementById('loading-screen');
      const content = document.getElementById('content');

      loadingScreen.style.display = 'none'; // Hide loading screen
      content.style.display = 'block'; // Show main content
    }
  }
}
new LoadingScreen();
