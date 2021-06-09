const checkbox = document.getElementById('checkbox_theme');
const linkCss = document.getElementById('css_theme');
const link = document.getElementById('theme');
var style = '<link id="css_theme" href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">';
var style_dark = '<link id="css_theme" href="<?= base_url(); ?>assets/css/style_dark.css" rel="stylesheet">';

checkbox.addEventListener('click', () => {
  if (checkbox.checked) {
    linkCss.href = 'http://localhost/web_company/assets/css/style_dark.css';

    localStorage.setItem('darkModeStatus', checkbox.checked);
  } else {
    linkCss.href = 'http://localhost/web_company/assets/css/style.css';
    localStorage.removeItem('dataModeStatus', checkbox.checked);
  }
});

// checkbox.addEventListener('click', () => {
//   if (checkbox.checked) {
//     link.createElement(`<link id="css_theme" href="<?= base_url(); ?>assets/css/style_dark.css" rel="stylesheet">`);
//     localStorage.setItem('darkModeStatus', checkbox.checked);
//   } else {
//     link.removeElement(`<link id="css_theme" href="<?= base_url(); ?>assets/css/style_dark.css" rel="stylesheet">`);
//     link.createElement(`<link id="css_theme" href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">`);
//     localStorage.removeItem('dataModeStatus', checkbox.checked);
//   }
// });

window.addEventListener('load', (Event) => {
  if (localStorage.getItem('darkModeStatus') == "true") {
    linkCss.href = 'http://localhost/web_company/assets/css/style_dark.css';
    checkbox.checked = true;
    localStorage.removeItem('darkModeStatus');
  }
});

// const checkbox = document.getElementById('checkbox_theme');
// const linkCss = document.getElementById('linkCss');

// var check = checkbox.checked = true;
// var uncheck = checkbox.checked = false;


// function button() {
//   if (check) {
//     console.log(check);
//     localStorage.setItem('theme', 'light');
//     linkCss.href = '<?= base_url(); ?>assets/css/lightMode.css';
//   }
// }

// function button2() {
//   if (localStorage.theme = 'light') {
//     linkCss.href = '<?= base_url(); ?>assets/css/style.css';
//     localStorage.removeItem('theme');
//   }
// }