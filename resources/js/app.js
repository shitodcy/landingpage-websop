document.addEventListener('DOMContentLoaded', () => {
    const mascot = document.getElementById("anime-mascot");
    
    // Pastikan elemen mascot ada sebelum menjalankan script
    if (!mascot) return;

    let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;

    mascot.onmousedown = dragMouseDown;
    mascot.ontouchstart = dragMouseDown;

    function dragMouseDown(e) {
        e.preventDefault();
        
        if (e.type === 'touchstart') {
            pos3 = e.touches[0].clientX;
            pos4 = e.touches[0].clientY;
        } else {
            pos3 = e.clientX;
            pos4 = e.clientY;
        }
        
        mascot.classList.add('grabbing');
        mascot.classList.remove('cursor-grab');
        
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
        document.ontouchend = closeDragElement;
        document.ontouchmove = elementDrag;
    }

    function elementDrag(e) {
        e.preventDefault();
        
        let clientX = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
        let clientY = e.type === 'touchmove' ? e.touches[0].clientY : e.clientY;

        pos1 = pos3 - clientX;
        pos2 = pos4 - clientY;
        pos3 = clientX;
        pos4 = clientY;

        mascot.style.top = (mascot.offsetTop - pos2) + "px";
        mascot.style.left = (mascot.offsetLeft - pos1) + "px";
        mascot.style.bottom = "auto";
        mascot.style.right = "auto";
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
        document.ontouchend = null;
        document.ontouchmove = null;
        
        mascot.classList.remove('grabbing');
        mascot.classList.add('cursor-grab');
    }
});