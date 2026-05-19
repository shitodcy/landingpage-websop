document.addEventListener('DOMContentLoaded', () => {

    function closeAllDropdowns() {
        const memberToggles = document.querySelectorAll('.member-toggle');
        memberToggles.forEach(toggle => {
            const content = toggle.nextElementSibling;
            const icon = toggle.querySelector('.toggle-icon');
            
            content.classList.add('hidden');
            content.classList.remove('flex');
            icon.style.transform = 'rotate(0deg)';
        });
    }

    const btnTeam = document.getElementById('btn-team');
    const modalTeam = document.getElementById('modal-team');
    const btnCloseModal = document.getElementById('close-modal');

    if (btnTeam && modalTeam && btnCloseModal) {

        btnTeam.addEventListener('click', () => {
            modalTeam.classList.remove('hidden');
        });

        btnCloseModal.addEventListener('click', () => {
            modalTeam.classList.add('hidden');
            closeAllDropdowns();
        });

        modalTeam.addEventListener('click', (e) => {
            if (e.target === modalTeam) {
                modalTeam.classList.add('hidden');
                closeAllDropdowns();
            }
        });
    }

    const memberToggles = document.querySelectorAll('.member-toggle');
    
    memberToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.toggle-icon');
            
            const isCurrentlyOpen = !content.classList.contains('hidden');
 
            closeAllDropdowns();

            if (!isCurrentlyOpen) {
                content.classList.remove('hidden');
                content.classList.add('flex');
                icon.style.transform = 'rotate(90deg)';
            }
        });
    });

});