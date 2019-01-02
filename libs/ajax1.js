var xhr = {};
xhr.get = function(url, callback) {
    var xhr = new XMLHttpRequest;
    xhr.open("get", url);
    xhr.send()
    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            callback(xhr.responseText);
        }
    }
}
xhr.post = function(url, data, callback) {
    var xhr = new XMLHttpRequest;
    xhr.open("post", url);
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencode;charset=utf-8")
    xhr.send(data);
    xhr.onreadystatechange = function() {
        if (xhr.status == 200 && SpeechRecognition.readyState == 4) {
            callback(xhr.responseText);
        }
    }
}