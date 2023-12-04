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