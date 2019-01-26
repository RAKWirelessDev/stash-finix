<?php

setcookie('_AUTH_ERROR_', 'xUA', time()+10, '/');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Authorization Failed</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="refresh" content="0; URL='/'" />

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

		<style type="text/css">
			html, body {
				font-family: 'Lato', Arial, sans-serif;
				margin: 0;
				background-color: #f1f1f1;
			}
			h1 {
				font-size: 2rem;
				text-rendering: optimizeLegibility;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			p {
				margin: 0;
				text-rendering: optimizeLegibility;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			p.small {
				font-size: 1.3rem;
				color: #888;
				margin: 1rem 0;
			}
			.error {
				color: #000;
				font-weight: bold;
				margin-right: .5rem;
			}
			.container {
				margin: 7% auto;
				font-size: 2rem;
				max-width: 370px;
			}
			.developer {
				font-family: 'Source Code Pro', monospace;
				text-rendering: optimizeLegibility;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				font-size: 1rem;
				margin: 1.5rem 0 0 0;
				color: #888;
			}
		</style>

	</head>
	<body>


		<div class="container">

			<div class="content">
				<h1>Authorization Failed</h1>

				<p class="small">Sorry, the supplied credentials cannot be verified...</p>

				<div class="developer">
					xUA
				</div>
			</div>
		</div>

	</body>
</html>