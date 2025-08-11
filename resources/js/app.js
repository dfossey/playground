import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import * as bootstrap from 'bootstrap';

Livewire.start();
window.bootstrap = bootstrap;

window.setAppTheme = function (theme) {
    localStorage.setItem('data-bs-theme', theme);
    document.documentElement.setAttribute('data-bs-theme', theme);
}
