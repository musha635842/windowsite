query = new XMLHttpRequest();
			query.open('GET', 'http://localhost/yii_windowsite/testdrive/index.php?id=1');
			query.send();
			query.responseType = 'document';
			query.onload = function () {
				container = document.createElement('div')
				container.innerHTML = query.response.getElementById('window').outerHTML
				document.body.insertBefore(container, document.getElementById('html'));
		    setTimeout(function () {document.getElementById('window').style.visibility = 'visible'} ,10000);
		    }