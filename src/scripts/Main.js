import Icons from './utils/Icons';
import ComponentFactory from './ComponentsFactory';

class Main {
  constructor() {
    this.init();
  }

  init() {
    document.documentElement.classList.add('has-js');
    Icons.load();

    new ComponentFactory();
  }
}
new Main();
