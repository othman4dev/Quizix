console.log("script exectue");

let parts = 1;
function addHeading() {
    parts++;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin",`
        <span>Part ${parts}</span>
        <input type="text" name="heading" class="heading" placeholder="Add Heading" autocomplete="off" spellcheck="false">
    `);
}
function addSubtitle() {
    document.getElementById("bottom").insertAdjacentHTML("beforebegin",`
        <input type="text" name="subtitle" id="" class="sub-title" placeholder="Subtitle" autocomplete="off" spellcheck="false">
    `);
}
function addParagraph() {
    document.getElementById("bottom").insertAdjacentHTML("beforebegin",`
        <textarea name="paragraph" class="paragraph" rows="10" placeholder="Add a paragraph" autocomplete="off" spellcheck="false"></textarea>
    `);
}
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
function sendDeleteId() {
    let id = JSON.parse(localStorage.getItem("deleteId"));
    console.log(id);
    window.location.href = `./html/lms/delete.php?quizId=${id}`;
}
function transferId(id) {
    localStorage.setItem("deleteId", JSON.stringify(id));
}