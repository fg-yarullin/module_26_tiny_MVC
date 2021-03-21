for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        // alert(document.URL + ' = ' + document.links[i].href);
        document.links[i].className = 'active';
    }
}

