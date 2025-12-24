//<!-- Bootstrap 5 Bundle JS -->
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"

//<!-- Script xử lý chung (Ví dụ: Active Menu) -->
document.addEventListener('DOMContentLoaded', function() {
// Tự động nhận diện trang hiện tại để active menu
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-link');
    menuItem.forEach(item => {
       if(item.href === currentLocation) {
            item.classList.add('active');
        }
    });
});