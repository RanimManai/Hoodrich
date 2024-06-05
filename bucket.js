const removeButtons = document.querySelectorAll('.remove');
 removeButtons.forEach(button => {
     button.addEventListener('click', function() {
         const itemContainer = this.parentElement;
         itemContainer.remove();
     });
 });