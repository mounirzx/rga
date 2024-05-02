     // Function to adjust max-width of inputs with various attributes
     function adjustMaxWidth() {
        var inputsSize = document.querySelectorAll('input[maxlength]');
        inputsSize.forEach(function(input) {
            var maxLength = parseInt(input.getAttribute('maxlength'));
            var width = maxLength * 22; // Assuming 22px width for each character
            input.style.maxWidth = width + 'px';
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
        
        var inputNumber = document.querySelectorAll('input[num]');
        inputNumber.forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });

        elements.forEach(function(element, index) {
            element.innerHTML = index + 1;
        });
    }

    // Execute the functions asynchronously before page load
    document.addEventListener("DOMContentLoaded", function() {
        adjustMaxWidth(); // Execute adjustMaxWidth
        numerottationCounter(); // Execute numerottationCounter
    })