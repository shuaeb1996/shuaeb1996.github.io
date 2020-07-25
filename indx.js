const slides = document.querySelectorAll('.slide');
const next = document.querySelector("#next");
const prev = document.querySelector("#prev");
const intervalTime = 5000;
let slideInterval;

next.addEventListener("click", e => {
  nextSlide();
  if(true) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
})

prev.addEventListener("click", e => {
  prevSlide();
  if(true) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
})

const nextSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if(current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
  } else {
    slides[0].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

const prevSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if(current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
  } else {
    slides[slides.length - 1].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

if(auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}