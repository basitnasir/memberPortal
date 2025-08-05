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

// Cascading Select Functionality
$(document).ready(function () {
    // Sample data for subcategories
    const categoryData = {
        '1': ['Fruits & Vegetables', 'Grains & Cereals', 'Livestock', 'Seeds & Plants'],
        '2': ['Men\'s Clothing', 'Women\'s Clothing', 'Children\'s Clothing', 'Accessories'],
        '3': ['Cars', 'Motorcycles', 'Auto Parts', 'Tires'],
        '4': ['Skincare', 'Makeup', 'Hair Care', 'Fragrances'],
        '5': ['Consulting', 'Marketing', 'Legal Services', 'Financial Services'],
        '6': ['Industrial Chemicals', 'Organic Chemicals', 'Inorganic Chemicals', 'Specialty Chemicals'],
        '7': ['Laptops', 'Desktops', 'Software', 'Networking Equipment'],
        '8': ['Building Materials', 'Real Estate', 'Construction Equipment', 'Architecture Services'],
        '9': ['Mobile Phones', 'Tablets', 'Audio Equipment', 'Gaming Devices'],
        '10': ['CVD Equipment', 'CVD Materials', 'CVD Services', 'CVD Components'],
        '11': ['Natural Diamonds', 'Synthetic Diamonds', 'Diamond Jewelry', 'Diamond Tools'],
        '12': ['Cables & Wires', 'Switches', 'Transformers', 'Generators'],
        '13': ['Solar Energy', 'Wind Energy', 'Oil & Gas', 'Nuclear Energy'],
        '14': ['Water Treatment', 'Air Purification', 'Waste Management', 'Environmental Consulting'],
        '15': ['Jewelry', 'Bags & Purses', 'Belts', 'Watches'],
        '16': ['Aquarium Equipment', 'Fish Food', 'Live Fish', 'Aquatic Plants'],
        '17': ['Beverages', 'Snacks', 'Dairy Products', 'Meat & Poultry'],
        '18': ['Office Furniture', 'Home Furniture', 'Outdoor Furniture', 'Furniture Accessories'],
        '19': ['Handicrafts', 'Decorative Items', 'Gift Sets', 'Seasonal Gifts'],
        '20': ['Tools', 'Fasteners', 'Hardware Accessories', 'Building Hardware']
    };

    const subCategoryData = {
        'Fruits & Vegetables': ['Fresh Fruits', 'Fresh Vegetables', 'Dried Fruits', 'Frozen Vegetables'],
        'Men\'s Clothing': ['Shirts', 'Pants', 'Suits', 'Casual Wear'],
        'Cars': ['Sedans', 'SUVs', 'Hatchbacks', 'Luxury Cars'],
        'Skincare': ['Face Cream', 'Body Lotion', 'Sunscreen', 'Anti-aging'],
        'Laptops': ['Gaming Laptops', 'Business Laptops', 'Ultrabooks', 'Budget Laptops']
    };

    // First level select change
    $('#category-level-1').on('change', function () {
        const selectedValue = $(this).val();
        $('#category-3-container').hide();

        if (selectedValue && categoryData[selectedValue] && categoryData[selectedValue].length > 0) {
            $('#loader-2').show();
            $('#category-level-2').hide();
            $('#category-2-container').show();

            setTimeout(function () {
                $('#loader-2').hide();
                let options = '<option></option>';
                categoryData[selectedValue].forEach(function (category) {
                    options += `<option value="${category}">${category}</option>`;
                });
                $('#category-level-2').html(options).show();
            }, 2000);
        } else {
            $('#category-2-container').hide();
        }
    });

    // Second level select change
    $('#category-level-2').on('change', function () {
        const selectedValue = $(this).val();

        if (selectedValue && subCategoryData[selectedValue] && subCategoryData[selectedValue].length > 0) {
            $('#loader-3').show();
            $('#category-level-3').hide();
            $('#category-3-container').show();

            setTimeout(function () {
                $('#loader-3').hide();
                let options = '<option value=""></option>';
                subCategoryData[selectedValue].forEach(function (category) {
                    options += `<option value="${category}">${category}</option>`;
                });
                $('#category-level-3').html(options).show();
            }, 2000);
        } else {
            $('#category-3-container').hide();
        }
    });
});