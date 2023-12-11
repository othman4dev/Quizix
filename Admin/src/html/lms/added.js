function addHeading() {
    const html = `
        <input type="text" name="heading" class="heading para" placeholder="Add Heading" autocomplete="off" spellcheck="false" onkeyup="makeReady()">
    `;
    console.log(html);
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}

function addSubtitle() {
    const html = `
        <input type="text" name="subtitle" class="sub-title para" placeholder="Subtitle" autocomplete="off" spellcheck="false" onkeyup="MakeReady()">
    `;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}

function addParagraph() {
    const html = `
        <textarea name="paragraph" class="paragraph para" rows="10" placeholder="Add a paragraph" autocomplete="off" spellcheck="false" onkeyup="MakeReady()"></textarea>
    `;
    document.getElementById("bottom").insertAdjacentHTML("beforebegin", html);
}
