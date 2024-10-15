document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item li');

    navItems.forEach(item => {
        item.addEventListener('mouseover', function() {
            const dropdown = this.querySelector('ul');
            if (dropdown) {
                dropdown.style.display = 'block';
            }
        });

        item.addEventListener('mouseout', function() {
            const dropdown = this.querySelector('ul');
            if (dropdown) {
                dropdown.style.display = 'none';
            }
        });
    });
});