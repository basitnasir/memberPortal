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

// product image upload js

document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("product-img-upload");
    const imgPreview = document.querySelector(".product-img");
    const removeBtn = document.querySelector(".remove-btn");
    const errorMsg = document.querySelector(".upload-error");
    
    const clearAll = () => {
        fileInput.value = "";
        imgPreview.src = "";
        errorMsg.textContent = "";
    };

    fileInput.addEventListener("change", function () {
        const file = this.files[0];
        errorMsg.textContent = "";

        if (!file) return;
        
        if (!["image/jpeg", "image/jpg", "image/png"].includes(file.type)) {
            errorMsg.textContent = "Only jpeg, jpg, and png formats are allowed.";
            fileInput.value = "";
            imgPreview.src = "";
            return;
        }

        if (file.size > 3 * 1024 * 1024) {
            errorMsg.textContent = "Image size should not exceed 3MB.";
            fileInput.value = "";
            imgPreview.src = "";
            return;
        }

        const reader = new FileReader();
        reader.onload = e => imgPreview.src = e.target.result;
        reader.readAsDataURL(file);
    });

    removeBtn.addEventListener("click", clearAll);
});


// select 2 js

$(document).ready(function () {
    $(".js-select2").select2({
        closeOnSelect: true
    });
    $(".js-select2-multi").select2({
        closeOnSelect: false
    });
});

// overseas office address field js

$(document).ready(function () {
    $('input[name="overseas_office"]').on('change', function () {
        if ($('#overseas-office-yes').is(':checked')) {
            $('#overseas-office').slideDown();
        } else {
            $('#overseas-office').slideUp();
        }
    });
});

// scroll js

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".add-new-product-box");
    const buttons = document.querySelectorAll(".add-product-item");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.9,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                buttons.forEach((btn) => btn.classList.remove("active"));

                const index = Array.from(sections).indexOf(entry.target);
                if (index !== -1) {
                    buttons[index].classList.add("active");
                }
            }
        });
    }, observerOptions);

    sections.forEach((section) => observer.observe(section));

    // Button click handler for scrolling
    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            sections[index].scrollIntoView({
                behavior: "smooth",
                block: "center",
            });
        });
    });
});

// more details clone js

function addMoreFields() {
    // Clone the first flex-group
    const original = document.querySelector('.flex-group');
    const clone = original.cloneNode(true);

    // Clear input values in the clone
    const inputs = clone.querySelectorAll('input');
    inputs.forEach(input => {
        input.value = '';
    });

    // Create remove button
    const removeBtn = document.createElement('button');
    removeBtn.className = 'remove-other-option';
    removeBtn.type = 'button';
    removeBtn.innerHTML = '&times;';
    removeBtn.onclick = function () {
        clone.remove();
    };

    // Add remove button to cloned group
    clone.appendChild(removeBtn);

    // Append clone to the fields-container
    const container = document.querySelector('.fields-container');
    container.appendChild(clone);
}