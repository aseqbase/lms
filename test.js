document.getElementById('Image_8').oninput =
    function (e) {
        elem = document.getElementById('Image_10');
        if (this.files.length > 0) {
            this.setAttribute('name', 'Image');
            elem.removeAttribute('name');
            elem.setAttribute('disabled', 'disabled');
        } else {
            this.removeAttribute('name');
            elem.setAttribute('name', 'Image');
            elem.removeAttribute('disabled');
        }
    };
document.getElementById('Image_8').oninput = function (e) {
    elem = document.getElementById('Image_9');
    if (!isEmpty(this.value)) {
        this.setAttribute('name', 'Image');
        elem.removeAttribute('name');
        elem.setAttribute('disabled', 'disabled');
    }
    else {
        this.removeAttribute('name');
        elem.setAttribute('name', 'Image');
        elem.removeAttribute('disabled');
    }
};