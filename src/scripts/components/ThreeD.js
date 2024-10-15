import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';

export default class ThreeD {
  constructor() {
    console.log('Script ThreeD is running!');
    this.size = {
      width: window.innerWidth,
      height: window.innerHeight,
    };

    this.canvas = document.querySelector('.webgl');
    if (!this.canvas) {
      console.error('Canvas not found');
      return;
    }

    this.scene = new THREE.Scene();
    this.clock = new THREE.Clock();

    this.init();
  }

  init() {
    window.addEventListener('resize', this.onWindowResize.bind(this)); // Fixed line

    this.createCAM(); // add camera
    //this.createOBJ(); // add 3D objects
    this.createRenderer(); // render
    this.loadModel(); // Load the 3D model with animations

    this.animate(); // Start the animation loop
  }

  createCAM() {
    this.camera = new THREE.PerspectiveCamera(
      75, // field of view
      this.size.width / this.size.height // aspect ratio
    );

    // Camera position
    this.camera.position.set(20, -1, 3); // Set position using set(x, y, z)

    this.controls = new OrbitControls(this.camera, this.canvas);
    this.controls.enableDamping = true;
    this.controls.enableZoom = false;
  }

  createRenderer() {
    this.renderer = new THREE.WebGLRenderer({
      canvas: this.canvas,
      alpha: true,
    });
    this.renderer.setSize(this.size.width, this.size.height);
    this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    this.renderer.setClearColor(0x000000, 0); // Transparent background
  }

  createOBJ() {}

  loadModel() {
    const loader = new GLTFLoader();
    loader.load(
      'assets/models/fusee.glb',
      (gltf) => {
        this.model = gltf.scene; // Save the model
        this.scene.add(this.model); // Add the loaded model to the scene

        // Handle animations
        this.mixer = new THREE.AnimationMixer(this.model);
        gltf.animations.forEach((clip) => {
          this.mixer.clipAction(clip).play(); // Play each animation clip
        });

        // Adjust model's position/scale if necessary
        this.model.scale.set(1, 1, 1);
        this.model.position.set(0, 0, 0);

        this.addLights();
        console.log('Model loaded:', gltf); // Check if the model loads correctly
      },
      undefined,
      (error) => {
        console.error('An error occurred while loading the model:', error);
      }
    );
  }

  addLights() {
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
    this.scene.add(ambientLight);

    const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
    directionalLight.position.set(5, 5, 5);
    this.scene.add(directionalLight);
  }

  onWindowResize() {
    this.camera.aspect = window.innerWidth / window.innerHeight;
    this.camera.updateProjectionMatrix();
    this.renderer.setSize(window.innerWidth, window.innerHeight);
    this.controls.update(); // Update controls on resize
  }

  animate() {
    requestAnimationFrame(this.animate.bind(this));
    this.controls.update();

    // Update the animation mixer if it exists
    if (this.mixer) {
      this.mixer.update(this.clock.getDelta()); // Use delta time
    }

    this.renderer.render(this.scene, this.camera);
  }
}
