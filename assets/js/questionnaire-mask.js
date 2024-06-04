     // Function to adjust max-width of inputs with various attributes
     function adjustMaxWidth() {
        var inputsSize = document.querySelectorAll('input[maxlength]');
        inputsSize.forEach(function(input) {
            var maxLength = parseInt(input.getAttribute('maxlength'));
            var width = maxLength * 22; // Assuming 22px width for each character
            input.style.maxWidth = width + 'px';
        });
        var inputsTBdouble_are = document.querySelectorAll('.double_are');
        inputsTBdouble_are.forEach(function(input) {
            input.style.maxWidth = "52px";
        });
        var inputsTBdouble_are_non_bati = document.querySelectorAll('.double_are_non_bati');
        inputsTBdouble_are_non_bati.forEach(function(input) {
            input.style.maxWidth = "88px";
        });
        var inputsTBdouble_surface = document.querySelectorAll('.double_are_surface');
        inputsTBdouble_surface.forEach(function(input) {
            input.style.maxWidth = "100px";
        });
        var inputsTB = document.querySelectorAll('input[tb]');
        inputsTB.forEach(function(input) {
            input.style.maxWidth = "51px";
        });
    
        var inputsBigTB = document.querySelectorAll('input[bigtb]'); // Corrected selector
        inputsBigTB.forEach(function(input) {
            input.style.maxWidth = "69px";
        });
    }

    // numerottation counter
    function numerottationCounter() {
        var elements = document.querySelectorAll('.zxcount');
        
        // Restrict input to numbers only
        var inputNumber = document.querySelectorAll('input[num]');
        inputNumber.forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
        // Restrict doubles to numbers only
     
        

        elements.forEach(function(element, index) {
            element.innerHTML = index + 1;
        });
    }
    function restrictInputToDoubles() {
        var inputDouble = document.querySelectorAll('input[double]');
        inputDouble.forEach(function(input) {
            input.style.maxWidth = "85px"; // Set max-width to 85px
            input.addEventListener('input', function() {
                // Remove non-numeric characters except '.' and ','
                var sanitizedValue = this.value.replace(/[^\d.,]/g, '');
    
                // Replace ',' with '.' if present
                sanitizedValue = sanitizedValue.replace(',', '.');
    
                // Split the value by '.' to separate the integer and decimal parts
                var parts = sanitizedValue.split('.');
    
                // Ensure the integer part has a maximum of 5 digits
                if (parts[0].length > 5) {
                    // Truncate the integer part to 5 digits
                    parts[0] = parts[0].slice(0, 5);
                }
    
                // If there are more than one decimal points, remove the extra ones
                if (parts.length > 3) {
                    parts = [parts[0], parts.slice(1).join('')];
                }
    
                // Ensure the decimal part has a maximum of 2 digits
                if (parts[1] && parts[1].length > 3) {
                    // Truncate the decimal part to 2 digits
                    parts[1] = parts[1].slice(0, 2);
                }
    
                // Combine the integer and decimal parts with a dot
                var newValue = parts.join('.');
    
                // Update the input value with the sanitized value
                this.value = newValue;
                
            });
        });
    }

    function restrictInputToDoublesARE() {
        var inputDouble = document.querySelectorAll('input[doubleARE]');
        inputDouble.forEach(function(input) {
            input.style.maxWidth = "50px"; // Set max-width to 85px
            input.addEventListener('input', function() {
                // Remove non-numeric characters except '.' and ','
                var sanitizedValue = this.value.replace(/[^\d.,]/g, '');
    
                // Replace ',' with '.' if present
                sanitizedValue = sanitizedValue.replace(',', '.');
    
                // Split the value by '.' to separate the integer and decimal parts
                var parts = sanitizedValue.split('.');
    
                // Ensure the integer part has a maximum of 5 digits
                if (parts[0].length > 2) {
                    // Truncate the integer part to 5 digits
                    parts[0] = parts[0].slice(0, 2);
                }
    
                // If there are more than one decimal points, remove the extra ones
                if (parts.length > 2) {
                    parts = [parts[0], parts.slice(1).join('')];
                }
    
                // Ensure the decimal part has a maximum of 2 digits
                if (parts[1] && parts[1].length > 2) {
                    // Truncate the decimal part to 2 digits
                    parts[1] = parts[1].slice(0, 2);
                }
    
                // Combine the integer and decimal parts with a dot
                var newValue = parts.join('.');
    
                // Update the input value with the sanitized value
                this.value = newValue;
                
            });
        });
    }


    // Execute the functions asynchronously before page load
    document.addEventListener("DOMContentLoaded", function() {
        adjustMaxWidth(); // Execute adjustMaxWidth
        numerottationCounter(); // Execute numerottationCounter
    })

