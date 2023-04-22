let container = document.getElementById("products")
let container2 = document.getElementById("banner")
let element;

const checker = new IntersectionObserver((entries) => {
  if (entries[0].isIntersecting) {
    element = document.querySelector('#header1');
    element.classList.remove('invisible');
    element.classList.add('visible');
    element = document.querySelector('#header2');
    element.classList.remove('visible');
    element.classList.add('invisible');
  }
}, {
  threshold: .9
})

const checker2 = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      element = document.querySelector('#header1');
      element.classList.remove('visible');
      element.classList.add('invisible');
      element = document.querySelector('#header2');
      element.classList.remove('invisible');
      element.classList.add('visible');
      
    }
  }, {
    threshold: .4
  })

checker.observe(container)
checker2.observe(container2)
