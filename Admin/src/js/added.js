function addHeading() {
    const html = `
        <input type="text" name="heading" class="heading para" placeholder="Add Heading" autocomplete="off" spellcheck="false" onkeyup="makeReady()">
    `;
    console.log(html);
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}

function addSubtitle() {
    const html = `
        <input type="text" name="subtitle" class="sub-title para" placeholder="Subtitle" autocomplete="off" spellcheck="false" onkeyup="makeReady()">
    `;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}

function addParagraph() {
    const html = `
        <textarea name="paragraph" class="paragraph para" rows="10" placeholder="Add a paragraph" autocomplete="off" spellcheck="false" onkeyup="makeReady()"></textarea>
    `;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
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