var xhr = {};

xhr.get = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("get", url);
    xhr.send(null);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            callback(xhr.responseText);
        }
    }
    return xhr;
}

xhr.post = function(url, data, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('post', url);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded; charset=utf-8;");
    xhr.send(data);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            callback(xhr.responseText);
        }
    }
    return xhr;
}