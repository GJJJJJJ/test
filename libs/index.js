// 添加数据
function getElm(selector) {
    return document.querySelectorAll(selector);
}
var add_btn = getElm('#wq-save-question')[0];
var content = getElm('#wq-content')[0];
var where = getElm('#wq-where')[0];
var idea = getElm('#wq-idea')[0];
var tbody = getElm('tbody')[0];
add_btn.onclick = function() {
    var send_data = `title=${content.value}&details=${where.value}&idea=${idea.value}`;
    xhr.post('interface/addwq.php', send_data, function(res) {
        console.log(res);
        location.reload();
    });
}
xhr.get('interface/get_list.php', function(res) {
    res = JSON.parse(res);
    reader_page(res);
});
//展示数据
function reader_page(json) {
    var temp = "";
    json.forEach(function(elm, i) {
        temp += `<tr class="text-center middle">
                    <td>${elm.wd_id}</td>
                    <td>${elm.wq_title}</td>
                    <td>${elm.wq_details}</td>
                    <td>
                        <a href="#" data-toggle="popover" data-content="${elm.wq_idea}">${elm.wq_idea}
                        </a>
                    </td>
                    <td>
                        <button class="btn" data-id="${elm.wd_id}">删除</button>
                    </td>
                    <td>
                        <button class="btn">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>`;
    });
    tbody.innerHTML += temp;
}

tbody.onclick = function(e) {
    var e = e || event;
    var target = e.target || e.srcElement;
    if (target.nodeName == "BUTTON") {
        remove_item(target.getAttribute("data-id"));
        tbody.removeChild(target.parentNode.parentNode);
    }
}

function remove_item(id) {
    xhr.post("interface/remove_item.php", "id=" + id, function(res) {
        console.log(res);
    });
}