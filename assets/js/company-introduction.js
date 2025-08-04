// text editor js

CKEDITOR.replace('editor', {
    versionCheck: false,
    extraPlugins: 'font,colorbutton,justify',
    removePlugins: 'elementspath, exportpdf',
    resize_enabled: true, // Allow resizing
    toolbar: [
        { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo'] },
        { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
        { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
        { name: 'styles', items: ['Font', 'FontSize'] },
        { name: 'colors', items: ['TextColor', 'BGColor'] },
        { name: 'insert', items: ['Link', 'Unlink', 'Image', 'Table'] },
        { name: 'tools', items: ['Maximize'] }
    ],
    font_names: 'Arial/Arial, Helvetica, sans-serif;' +
        'Times New Roman/Times New Roman, Times, serif;' +
        'Verdana/Verdana, Geneva, sans-serif;' +
        'Tahoma/Tahoma, Geneva, sans-serif;' +
        'Courier New/Courier New, Courier, monospace;' +
        'Georgia/Georgia, serif;',
    fontSize_sizes: '8/8px;10/10px;12/12px;14/14px;16/16px;18/18px;20/20px;24/24px;28/28px;32/32px;36/36px;'
});


// image upload js
document.addEventListener("DOMContentLoaded", function () {
    function setupImageUpload(inputId, imgId, removeBtnIndex) {
        const input = document.getElementById(inputId);
        const img = document.getElementById(imgId);
        const removeBtn = document.querySelectorAll(".logo-remove-btn")[removeBtnIndex];

        input.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => img.src = e.target.result;
                reader.readAsDataURL(file);
            }
        });

        removeBtn.addEventListener("click", () => {
            input.value = "";
            img.src = "";
        });
    }

    setupImageUpload("company-logo", "company-logo-img", 0);
    setupImageUpload("company-bnner", "company-bnner-img", 1);
});