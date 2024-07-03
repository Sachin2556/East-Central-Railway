
document.getElementById('englishBtn').addEventListener('click', () => {
    switchLanguage('en');
    toggleButtons('en');
});

document.getElementById('hindiBtn').addEventListener('click', () => {
    switchLanguage('hi');
    toggleButtons('hi');
});

function switchLanguage(language) {
    const elements = document.querySelectorAll('[data-lang-en]');
    elements.forEach(element => {
        if (language === 'en') {
            element.textContent = element.getAttribute('data-lang-en');
        } else if (language === 'hi') {
            element.textContent = element.getAttribute('data-lang-hi');
        }
    });
}

function toggleButtons(language) {
    if (language === 'en') {
        document.getElementById('englishBtn').style.display = 'none';
        document.getElementById('hindiBtn').style.display = 'inline-block';
    } else if (language === 'hi') {
        document.getElementById('englishBtn').style.display = 'inline-block';
        document.getElementById('hindiBtn').style.display = 'none';
    }
}

function toggleDivisions() {
    var divisions = document.querySelectorAll('.division');
    
    // Toggle visibility of each division
    divisions.forEach(function(division) {
        if (division.style.display === 'none') {
            division.style.display = 'block';
        } else {
            division.style.display = 'none';
        }
    });
}

function openColumns(columnsId) {
    // Hide all columns
    var allColumns = document.querySelectorAll('.columns');
    allColumns.forEach(function(columns) {
        columns.style.display = 'none';
    });

    // Show the selected columns
    var selectedColumns = document.getElementById(columnsId);
    selectedColumns.style.display = 'block';

}
