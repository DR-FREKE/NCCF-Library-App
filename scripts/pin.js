function generator() {
    var str = "abcdefghijklmnopqrstuvwxyz",
        num = '0123456789';
    var str_shuffle = str.split('').sort(function() {
        return .5 - Math.random()
    }).join('');
    var num_shuffle = num.split('').sort(function() {
        return .5 - Math.random()
    }).join('');
    var str_val = (str_shuffle.substr(0, 3) + '' + num_shuffle.substr(0, 2)).toUpperCase(),
        new_result = str_val.split('').sort(function() {
            return .5 - Math.random()
        }).join('');
    var final_result = "LUMA/18/" + new_result;
    document.getElementById("reg_code").value = final_result;
}

function sendtoServer() {
    var input_val = document.getElementById("reg_code");
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var final_result = xmlhttp.responseText;
            alert(final_result);
        }
    }
    xmlhttp.open('GET', './phpScript/pin.php?reg_code=' + input_val.value + '&pin_info=Free', false);
    xmlhttp.send();
}