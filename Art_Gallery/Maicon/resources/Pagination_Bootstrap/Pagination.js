/**
 * ================== EVENT LISTENER ====================
 * 
 * This event listener is compatible with IE5-8 and
 * other browsers.
 * This code is based on the book Javascript &
 * Jquery - Interactive front-end web development
 * by Jon Duckett, page 290, 2014.
 * 
 * The modifications were done by Raul Macedo fuzita
 * and Renan Macedo Fuzita.
 * 
 */
if(document.addEventListener){
    document.addEventListener('click', function(e){
        controller(e);
    }, false);
} else {
    document.attachEvent('onclick', function(e){
        controller(e);
    });
}

// ================== Controller ===================
function controller(e){
    if(!e){
        e.window.event;
    }
    target = e.target || e.srcElement;

    if(e.preventDefault){
        e.preventDefault();
    } else {
        e.returnValue = false;
    }

    /**
     * Create a method named onclickDetected
     * to handle the event listener.
     * The argument passed is the first class
     * of an HTML element.
     */
    onclickDetected(target);
}


