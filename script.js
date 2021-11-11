// JavaScript document

function phpAjax(display, buffer) {

            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText) ;
                    document.getElementById('buffer').value = "";
                    document.getElementById('display').value = this.responseText;
                }
            };
            xhr.open("GET", "./math.php?display=" + display + "&buffer=" + buffer,true);
            xhr.send();

    }