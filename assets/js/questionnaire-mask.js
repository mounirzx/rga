               
// Function to adjust max-width of inputs with various attributes

 
function adjustMaxWidth() {
    
    var inputsSize = document.querySelectorAll('input[maxlength]');
    inputsSize.forEach(function(input) {
        var maxLength = parseInt(input.getAttribute('maxlength'));
        var width = maxLength * 17; // Assuming 22px width for each character
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


//numerottation counter
document.addEventListener("DOMContentLoaded", function() {
    // Get all elements with class "zxcount"
    var elements = document.querySelectorAll('.zxcount');
    
var inputNumber = document.querySelectorAll('input[num]');
inputNumber.forEach(function(input) {
    input.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
});

    // Loop through each element and set its innerHTML to its index + 1
    elements.forEach(function(element, index) {
        element.innerHTML = index + 1;
    });


    // Trigger the adjustment when the page loads
window.onload = adjustMaxWidth;
});

