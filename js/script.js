document.querySelectorAll('.triple-dot').forEach(button => {
  button.addEventListener('click', function() {
    let dropdownList = this.nextElementSibling;

    dropdownList.style.display = dropdownList.style.display === 'block' ? 'none' : 'block';
  });
});