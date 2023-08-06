window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

function previewImage(imgInput) {
    document.getElementById(imgInput).addEventListener("change", function (event) {
        const img = event.target.files[0];
        const imgPreview = document.getElementById("img-preview");
    
        if (img) {
            const reader = new FileReader();
    
            reader.onload = function () {
                imgPreview.src = reader.result;
                imgPreview.style.display = "block";
            };
    
            reader.readAsDataURL(img);
        } else {
            imgPreview.src = "#";
            imgPreview.style.display = "none";
        }
    });
}

previewImage('img-input');

function getData(event) {
    console.log('d3d3');
}




