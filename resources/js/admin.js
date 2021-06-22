// Backoffice js


require('./bootstrap');

// Delete post confirm

const delForm =document.querySelectorAll('.delete-post-form');
// console.log(delForm);

delForm.forEach(element => {
    element.addEventListener('submit', function(event) {
        const resp = confirm('Are you sure you want to delete this post?');
        console.log(resp);

        if (! resp) {
            event.preventDefault();
        }
    })
});