import './bootstrap';

import './burger';

import Alpine from 'alpinejs';


window.Alpine = Alpine;

Alpine.start();

import.meta.glob([
        '../images/**',
]);
