import Carousel from './components/Carousel';
import Scrolly from './components/Scrolly';
import Header from './components/Header';
import ThreeD from './components/ThreeD';
import Youtube from './components/YouTube';
import LoadingScreen from './components/LoadingScreen';

export default class ComponentFactory {
  constructor() {
    this.componentList = {
      Carousel,
      Scrolly,
      Header,
      ThreeD,
      Youtube,
      //  LoadingScreen,
    };
    this.init();
  }
  init() {
    const components = document.querySelectorAll('[data-component]'); // ne pas oublier pour instancier d'ajouter le data-component=""
    for (let i = 0; i < components.length; i++) {
      const element = components[i];
      const componentName = element.dataset.component;

      if (this.componentList[componentName]) {
        new this.componentList[componentName](element);
      } else {
        console.log(`La composante ${componentName} n'existe pas`);
      }
    }
  }
}
