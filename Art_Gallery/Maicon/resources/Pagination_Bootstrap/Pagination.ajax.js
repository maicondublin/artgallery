var ajaxRequest = function(displayTo, loadController){

    let xmlhttp;
    // Find compatibility
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        XMLHttpRequest.prototype.pagination = this;
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        ActiveXObject.prototype.pagination = this;
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var element = document.getElementById(displayTo);
            element.innerHTML = this.responseText;
        }
    };
    // Send request and get a replay
    xmlhttp.open("GET",loadController,true);
    xmlhttp.send();
    return true;
}
