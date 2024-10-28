export default class LoadingScreen {
  constructor() {
    this.init();
  }

  init() {
    window.addEventListener('load', function () {
      const loadingScreen = document.getElementById('loading-screen');
      const content = document.getElementById('content');

      // Hide loading screen and show content
      loadingScreen.style.display = 'none';
      content.style.display = 'block';
    });
    // Fallback for loading timeout (e.g., 5 seconds)
    setTimeout(() => {
      const loadingScreen = document.getElementById('loading-screen');
      const content = document.getElementById('content');

      // If the loading screen is still visible, hide it and show content
      if (loadingScreen.style.display !== 'none') {
        loadingScreen.style.display = 'none';
        content.style.display = 'block';
      }
    }, 3000); // milliseconds = 3 seconds
  }
}
