/* Slideshow */
let slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide-kegiatan");

  if (n > slides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = slides.length
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}


/* Galeri */
let galeriIndex = 0;

showGaleri();

function nextImage() {
  galeriIndex++;
  showGaleri();
  console.log(galeriIndex);
}

function prevImage() {
  galeriIndex--;
  showGaleri();
  console.log(galeriIndex);
}

function showGaleri() {
  let i, j;
  let img = document.getElementsByClassName("col-galeri");

  for (i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }

  if (galeriIndex > img.length) {
    galeriIndex = 1;
  }

  if (galeriIndex < 1) {
    galeriIndex = img.length;
  }

  if (window.screen.width <= 767) {
    if (galeriIndex > img.length) {
      galeriIndex = 1;
    }

    if (galeriIndex < 1) {
      galeriIndex = img.length;
    }

    img[galeriIndex - 1].style.display = "block";

  } else {
    for (j = galeriIndex; j < galeriIndex + 3; j++) {
      img[j % img.length].style.display = "block";
    }
  }
}