//Build the contents menu from article headings. Load only on long form pages.

var headings = document.querySelectorAll('.body-text > h2');
var contentsList = document.querySelector('#article-contents-list');
var bodyText = document.querySelector('#body-text');
contentsList.innerHTML = "";

if(headings.length < 1){
    contentsList.style.display = 'none';
}

for (var i = 0; i < headings.length; i++) {
    var currentHeading = headings[i];
    var headingText = currentHeading.textContent;
    var headingId = headingText.toLowerCase().split(' ').join('-');
    var newListItem = buildElement('li', '', [['className', 'article-contents__list-item']]);
    var newLink = buildElement('a', headingText, [['href', '#' + headingId]]);
    currentHeading.setAttribute('id', headingId);
    newListItem.appendChild(newLink);
    contentsList.appendChild(newListItem);
}

//Build a new element with a text node attached.
//Arguments:
// tag = string of tagname eg 'p'
// innerText = string of element inner text
// attributes = array of arrays : [['href', '#link'], ['id', 'id-of-element']]
function buildElement(tag, innerText, attributes){
    var newEl = document.createElement(tag);
    var newText = document.createTextNode(innerText);
    for (var i = 0; i < attributes.length; i++) {
        newEl[attributes[i][0]] = attributes[i][1];       
    };
    newEl.appendChild(newText);
    return newEl; 
}


