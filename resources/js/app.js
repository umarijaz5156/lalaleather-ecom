import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
// import pikaday
import pikaday from 'pikaday';


import * as FilePond from 'filepond';

import 'filepond/dist/filepond.min.css';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';


FilePond.registerPlugin(FilePondPluginImagePreview);


import FilePondPluginImageValidateSize from 'filepond-plugin-image-validate-size';


FilePond.registerPlugin(FilePondPluginImageValidateSize);


import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';


FilePond.registerPlugin(FilePondPluginFileValidateType);

// Register the plugin
window.Alpine = Alpine;
window.Pikaday = pikaday;
window.FilePond = FilePond;

Alpine.plugin(focus);

Alpine.start();
