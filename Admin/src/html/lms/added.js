let d = 1;

function addPart() {
    d++;
    const html = `
        <span>Part ${d}</span>
        <input type="text" name="heading[]" class="heading" placeholder="Add Heading" autocomplete="off" spellcheck="false">
        <input type="text" name="subtitle[]" class="sub-title" placeholder="Subtitle" autocomplete="off" spellcheck="false">
        <textarea name="paragraph[]" class="paragraph" rows="10" placeholder="Add a paragraph" autocomplete="off" spellcheck="false"></textarea>
    `;
    console.log(html);
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}
