let d = 1;

function addHeading() {
    d++;
    const html = `
        <span>Part ${d}</span>
        <input type="text" name="heading[]" class="heading" placeholder="Add Heading" autocomplete="off" spellcheck="false">
    `;
    console.log(html);
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}

function addSubtitle() {
    const html = `
        <input type="text" name="subtitle[]" class="sub-title" placeholder="Subtitle" autocomplete="off" spellcheck="false">
    `;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}

function addParagraph() {
    const html = `
        <textarea name="paragraph[]" class="paragraph" rows="10" placeholder="Add a paragraph" autocomplete="off" spellcheck="false"></textarea>
    `;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}
