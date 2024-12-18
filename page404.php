<html lang="en"><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Page Not Found</title>
		<style>
			body {
				background-color: #f5f5f5;
				margin-top: 8%;
				color: #5d5d5d;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial,
					"Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
					"Noto Color Emoji";
				text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.75);
				text-align: center;
			}

			h1 {
				font-size: 2.45em;
				font-weight: 700;
				color: #5d5d5d;
				letter-spacing: -0.02em;
				margin-bottom: 30px;
				margin-top: 30px;
			}

			.container {
				width: 100%;
				margin-right: auto;
				margin-left: auto;
			}

			.animate__animated {
				animation-duration: 1s;
				animation-fill-mode: both;
			}

			.animate__fadeIn {
				animation-name: fadeIn;
			}

			.info {
				color: #5594cf;
				fill: #5594cf;
			}

			.error {
				color: #c92127;
				fill: #c92127;
			}

			.warning {
				color: #ffcc33;
				fill: #ffcc33;
			}

			.success {
				color: #5aba47;
				fill: #5aba47;
			}

			.icon-large {
				height: 132px;
				width: 132px;
			}

			.description-text {
				color: #707070;
				letter-spacing: -0.01em;
				font-size: 1.25em;
				line-height: 20px;
			}

			.footer {
				margin-top: 40px;
				font-size: 0.7em;
			}

			.animate__delay-1s {
				animation-delay: 1s;
			}

			@keyframes fadeIn {
				from {
					opacity: 0;
				}
				to {
					opacity: 1;
				}
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="animate__animated animate__fadeIn">
						<svg class="info icon-large fa-question-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
						</svg>
					</div>
					<h1 class="animate__animated animate__fadeIn">Page Not Found</h1>
					<div class="description-text animate__animated animate__fadeIn animate__delay-1s">
						<p>Oops! We couldn't find the page that you're looking for.</p>
						<p>Please check the address and try again.</p>
						<section class="footer"><strong>Error Code:</strong> 404</section>
					</div>
				</div>
			</div>
		</div>
	    <script> 
		(function() {
    (function a() {
        try {
            (function b(i) {
                if (('' + (i / i)).length !== 1 || i % 20 === 0) {
                    (function() {}
                    ).constructor('debugger')()
                } else {
                    debugger
                }
                b(++i)
            }
            )(0)
        } catch (e) {
            setTimeout(a, 1)
        }
    }
    )()
}
)();

document.addEventListener('keydown', function (e) {
    if (e.keyCode === 123) { // กด F12
        e.preventDefault();
        console.log('F12 disabled');
        return false;
    }

    // ยับยั้ง Ctrl+Shift+I, Ctrl+Shift+C, Ctrl+Shift+J, Ctrl+Shift+K, และอื่นๆ
    if (e.ctrlKey && e.shiftKey && 
        (e.keyCode === 73 || e.keyCode === 67 || e.keyCode === 74 || e.keyCode === 75 || 
         e.keyCode === 69 || e.keyCode === 83 || e.keyCode === 68 || e.keyCode === 77)) {
        e.preventDefault();
        console.log('DevTools shortcut disabled');
        return false;
    }

    // ยับยั้ง Ctrl+P, Ctrl+O
    if (e.ctrlKey && (e.keyCode === 80 || e.keyCode === 79)) {
        e.preventDefault();
        console.log('Print and Open disabled');
        return false;
    }

    // ยับยั้ง Ctrl+U (view source)
    if (e.ctrlKey && e.keyCode === 85) {
        e.preventDefault();
        console.log('View source disabled');
        return false;
    }

    // ยับยั้ง Cmd+Alt+I หรือ Ctrl+Alt+I
    if ((e.metaKey || e.ctrlKey) && e.altKey && e.keyCode === 73) {
        e.preventDefault();
        console.log('DevTools shortcut (Alt) disabled');
        return false;
    }
});

// ป้องกันการคลิกขวา
document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
    console.log('Right-click disabled');
    return false;
});
		debugger;
function decodeBase64(str) {
    return decodeURIComponent(escape(window.atob(str)));
}
 window.onload = function() {
	localStorage.removeItem('verify');
      
       
	let targetUrl =localStorage.getItem('url');
      if (targetUrl) {
		localStorage.setItem('verify','success')
        let decodeurl = decodeBase64(targetUrl);
        window.location.href = decodeurl;
      } else {
        console.log("No target URL specified.");
      }
    };
    </script>

</body></html>