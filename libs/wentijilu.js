var add_btn = document.getElementById('wq-save-question');
var content = document.getElementById('wq-content');
var where = document.getElementById('wq-where');
var idea = document.getElementById('wq-idea');
var tt = document.querySelectorAll('tbody');
var tbody = tt[0]
add_btn.onclick = function() {
    var send_data = `title=${content.value}&details=${where.value}&idea${idea.value}`;
    xhr.post('../interface/addwq1.php', send_data, function(res) {

    })
}