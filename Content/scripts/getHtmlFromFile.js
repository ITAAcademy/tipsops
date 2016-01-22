function getHtml(url){
    var xhr = new XMLHttpRequest();
    xhr.open('GET',url,false);
    xhr.send();
    if(xhr.status !=200){
        alert('error' + xhr.status + ':' + xhr.statusText);
    }else{
        document.write(xhr.responseText);
    }
}