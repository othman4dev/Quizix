function calculate() {
    let allRadios = document.querySelectorAll('input[type=radio]');
    let total = 0;
    allRadios.forEach(element => {
        if (element.value == 1 && element.checked == true) {
            total++;
        }
    }); 
    document.getElementById("result").value = total;
}
