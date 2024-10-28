export default class LoadingScreen {
  constructor() {
    this.init();
  }

  init() {
    const loadingScreen = document.getElementById('loading-screen');
    const content = document.getElementById('content');
    let loadingComplete = false;
    const minLoadingTime = 3000;
    let loadingTimer;

    window.addEventListener('load', () => {
      loadingComplete = true;
      clearTimeout(loadingTimer);
      setTimeout(hideLoadingScreen, minLoadingTime);
    });

    loadingTimer = setTimeout(() => {
      if (!loadingComplete) hideLoadingScreen();
    }, minLoadingTime);

    function hideLoadingScreen() {
      loadingScreen.classList.add('outro'); // Trigger outro animation
      setTimeout(() => {
        loadingScreen.style.display = 'none';
        content.style.display = 'block';
      }, 800); // Match outro animation duration
    }
  }
}

new LoadingScreen();
