var message = "Function Disabled!";

function clickIE4() {
    if (event.button == 2 || (event.ctrlKey && event.keyCode == 85)) {
        alert(message);
        return false;
    }
}

function clickNS4(e) {
    if (
        document.layers ||
        (document.getElementById && !document.all) ||
        e.ctrlKey
    ) {
        if (e.which == 2 || e.which == 3) {
            alert(message);
            return false;
        }
    }
}

if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS4;
} else if (document.all && !document.getElementById) {
    document.onmousedown = clickIE4;
}

document.oncontextmenu = new Function("alert(message);return false");
document.onkeydown = function (e) {
    if (e.ctrlKey && e.keyCode == 85) {
        alert(message);
        e.preventDefault(); // Prevent Ctrl+U
        return false;
    }
};