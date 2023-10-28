/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// require jQuery normally
const $ = require('jquery');

// create global $ and jQuery variables
global.$ = global.jQuery = $;


// any CSS you import will output into a single css file (app.css in this case)
import 'bootstrap/dist/css/bootstrap.css'
import '../assets/css/main.css';
import '../assets/css/jquery-ui.min.css';
// import '../assets/css/dataTables.bootstrap4.min.css';
import '../assets/css/dataTables.bootstrap5.min.css';
import '../assets/css/responsive.bootstrap.min.css';
import '../assets/css/filter.css';
import '../assets/css/bootstrap-select.min.css';

import * as bootstrap from 'bootstrap';

window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');
