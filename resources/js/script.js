let navbar = document.querySelector(".cg-navbar")
document.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.remove("cg-navbar-scroll")
    } else{
        navbar.classList.add("cg-navbar-scroll")
    }
})

// JavaScript per gestire il video nella finestra modale
var videoModal = document.getElementById('videoModal');
var videoIframe = document.getElementById('videoModalIframe');

videoModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget; // Pulsante che ha attivato il modal
    var videoUrl = button.getAttribute('data-bs-video');
    videoIframe.src = videoUrl;
});

videoModal.addEventListener('hide.bs.modal', function () {
    videoIframe.src = ''; // Fermare il video rimuovendo l'URL
});