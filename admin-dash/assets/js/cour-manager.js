function chaptePassed(id) {
    
    fetch('./controllers/setPassedChapter.php?id=' + id);
    
    
    (document.querySelector('#passed' + id)).classList.add('show');
    var tabs = document.querySelectorAll('.tab-pane');
    if (tabs) {
        tabs.forEach(function (ch) {
            ch.classList.remove('active');
        })
    }
    (document.querySelector('#chapter-' + id)).classList.add('active');
    
    var chapters = document.querySelectorAll('.passed');
    var passed = document.querySelectorAll('.passed.show');
    console.log('chapters', chapters.length)
    console.log('passed', passed.length);
    
    if (chapters.length === passed.length) {
        document.querySelector('#go-quizz').removeAttribute('disabled');
    }
}