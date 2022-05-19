// Hamburger
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');
const mainNav = document.querySelector('.main-nav');
let scrollpos = window.scrollY;

const handleClick = () => {
  hamburger.classList.toggle('hamburger--active');
  hamburger.setAttribute(
    'aria-expanded',
    hamburger.classList.contains('hamburger--active')
  );
  nav.classList.toggle('navigation--active');

  if (scrollpos < 10) {
    mainNav.classList.add('main-nav-bg');
  }
};

hamburger.addEventListener('click', handleClick);

//Add background-color to menu
let actualWidth = document.body.clientWidth;

function addClassOnScroll() {
  mainNav.classList.add('main-nav-bg');
}
function removeClassOnScroll() {
  mainNav.classList.remove('main-nav-bg');
}

function updateMenuBackground() {
  scrollpos = window.scrollY;
  if (scrollpos > 10 || actualWidth < 770) {
    addClassOnScroll();
  } else if (scrollpos < 10) {
    removeClassOnScroll();
  }
}
window.addEventListener('scroll', updateMenuBackground);
updateMenuBackground();

//Smooth scrolling
jQuery(document).ready(function ($) {
  $('.scrollup a').on('click', function (e) {
    // e.preventDefault()
    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top,
      },
      500,
      'linear'
    );
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
});

// // If absolute URL from the remote server is provided, configure the CORS
// // header on that server.
// var url =
//   'http://fundacja-samarytanin.localhost/wp-content/uploads/2022/05/statut.pdf';

// // Loaded via <script> tag, create shortcut to access PDF.js exports.
// var pdfjsLib = window['pdfjs-dist/build/pdf'];

// // The workerSrc property shall be specified.
// pdfjsLib.GlobalWorkerOptions.workerSrc =
//   '//mozilla.github.io/pdf.js/build/pdf.worker.js';

// var pdfDoc = null,
//   pageNum = 1,
//   pageRendering = false,
//   pageNumPending = null,
//   scale = 1.5,
//   canvas = document.getElementById('the-canvas'),
//   ctx = canvas.getContext('2d');

// /**
//  * Get page info from document, resize canvas accordingly, and render page.
//  * @param num Page number.
//  */
// function renderPage(num) {
//   pageRendering = true;
//   // Using promise to fetch the page
//   pdfDoc.getPage(num).then(function (page) {
//     var viewport = page.getViewport({ scale: scale });
//     canvas.height = viewport.height;
//     canvas.width = viewport.width;

//     // Render PDF page into canvas context
//     var renderContext = {
//       canvasContext: ctx,
//       viewport: viewport,
//     };
//     var renderTask = page.render(renderContext);

//     // Wait for rendering to finish
//     renderTask.promise.then(function () {
//       pageRendering = false;
//       if (pageNumPending !== null) {
//         // New page rendering is pending
//         renderPage(pageNumPending);
//         pageNumPending = null;
//       }
//     });
//   });

//   // Update page counters
//   document.getElementById('page_num').textContent = num;
// }

// /**
//  * If another page rendering in progress, waits until the rendering is
//  * finised. Otherwise, executes rendering immediately.
//  */
// function queueRenderPage(num) {
//   if (pageRendering) {
//     pageNumPending = num;
//   } else {
//     renderPage(num);
//   }
// }

// /**
//  * Displays previous page.
//  */
// function onPrevPage() {
//   if (pageNum <= 1) {
//     return;
//   }
//   pageNum--;
//   queueRenderPage(pageNum);
// }
// document.getElementById('prev').addEventListener('click', onPrevPage);

// /**
//  * Displays next page.
//  */
// function onNextPage() {
//   if (pageNum >= pdfDoc.numPages) {
//     return;
//   }
//   pageNum++;
//   queueRenderPage(pageNum);
// }
// document.getElementById('next').addEventListener('click', onNextPage);

// /**
//  * Asynchronously downloads PDF.
//  */
// pdfjsLib.getDocument(url).promise.then(function (pdfDoc_) {
//   pdfDoc = pdfDoc_;
//   document.getElementById('page_count').textContent = pdfDoc.numPages;

//   // Initial/first page rendering
//   renderPage(pageNum);
// });
