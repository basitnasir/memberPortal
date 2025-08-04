    $(document).ready(function() {
        let telInput2 = $(".phoneNumberTelInput");

        // GeoIP Lookup function to get country code
        function geoIpLookup(callback) {
            fetch('https://ipwhois.app/json/', {
                cache: 'reload'
            }).then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Failed: ' + response.status);
            }).then(ipjson => {
                const countryCode = ipjson.country_code.toLowerCase(); // Convert to lowercase
                callback(countryCode); // Return the lowercase code

                // Apply the mask here, after the country code is successfully fetched
                applyPhoneMask(countryCode);
            }).catch(e => {
                console.error("GeoIP Lookup Error:", e.message);
                callback('us'); // Default to US if error occurs

                // Apply the default mask in case of an error
                applyPhoneMask('us');
            });
        }

        // Initialize intlTelInput with updated options and store in `iti`
        const iti = telInput2.intlTelInput({
            initialCountry: 'auto',
            preferredCountries: ['us', 'gb', 'br', 'ru', 'cn', 'es', 'it'],
            autoPlaceholder: 'polite',
            separateDialCode: false, // Separate the dial code visually
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            geoIpLookup: geoIpLookup
        });

        // Define phone number masks for each country
        const masks = {
            us: "+1 (000) 000-0000",
            gb: "+44 00 0000 0000",
            br: "+55 (00) 00000-0000",
            ru: "+7 (000) 000-00-00",
            cn: "+86 000 0000 0000",
            es: "+34 000 000 000",
            it: "+39 000 000 0000"
        };

        // Function to apply phone mask based on the country
        function applyPhoneMask(countryCode) {
            var mask = masks[countryCode] || "+000 000 000 0000"; // Default mask
            telInput2.mask(mask); // Apply the mask
        }

        // Update mask on country change
        telInput2.on("countrychange", function() {
            var selectedCountryData = telInput2.intlTelInput("getSelectedCountryData");
            var selectedCountryCode = selectedCountryData.iso2;
            applyPhoneMask(selectedCountryCode);
        });

       
    });