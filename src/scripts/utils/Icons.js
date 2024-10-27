export default class Icons {
  static load(path = window.iconsPath + 'assets/icons.svg', callback) {
    window.iconsPath = window.iconsPath || '';

    fetch(path)
      .then((res) => {
        if (res.ok) {
          return res.text();
        } else {
          throw new Error('Le fichier des icônes est introuvable.');
        }
      })
      .then((data) => {
        const svgContainer = document.createElement('div');
        svgContainer.style.display = 'none';
        svgContainer.innerHTML = data;
        document.body.appendChild(svgContainer);

        if (callback && typeof callback === 'function') {
          callback();
        }
      })
      .catch((error) => {
        console.error(`Erreur de chargement des icônes: ${error.message}`);
      });
  }
}
