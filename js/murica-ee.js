//murica-ee
document.addEventListener('DOMContentLoaded', function() {
    var rowGodElement = document.querySelector('.row-god');
    var rowJesusElement = document.querySelector('.row-jesus');
    rowGodElement.classList.remove('murica'); // remove the class immediately

    var randomNumber = Math.random();
    if (randomNumber < 0.001) {
      rowGodElement.classList.add('murica'); 
      rowGodElement.style.zIndex = '9999999';
      rowJesusElement.style.color = 'white';
    }
  });