<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
	/* style whole footer */
	.footer {
		color: white;
		background: rgb(0, 72, 106);
		display: flex;
		font-family: andale mono, monospace;
		border-radius: 8px;
		font-size: 100%;
		padding: 3px;
		transition: 0.5s;
	}

	/* style left portion of footer */
	.footer .left {
		text-align: left;
		flex: 50%;
	}

	/* style right portion of footer */
	.footer .right {
		text-align: right;
		flex: 50%;
	}

	/* style social links */
	.footer .right .links {
		width: 25px;
		height: 25px;
		padding-right: 10px;
	}

	/* style links */
	.footer .right a {
		color: rgba(0, 0, 0, 0);
	}

	/* style copyright info */
	.footer .left p {
		padding-left: 10px;
		padding-top: 5px;
	}

	/* needs some help
	.footer .right .links:hover{
	background-color: rgba(0, 72, 106, 0.1);
	} */

</style>
</head>

<body>
	<br>
	<div class="footer">
		<div class="left">
			<p>© The Cake Whisperer 2022</p>
		</div>

		<div class="right">
			<p>
				<a href="https://www.youtube.com/watch?v=2942BB1JXFk"> <img class="links" src="images/ds.png" alt="Discord Server"> </a>
				<a href="https://www.youtube.com/watch?v=oHg5SJYRHA0"> <img class="links" src="images/fb.png" alt="Facebook Page"> </a>
				<a href="https://www.youtube.com/watch?v=G8iEMVr7GFg"> <img class="links" src="images/ig.png" alt="Instagram Page"> </a>
				<a href="https://www.youtube.com/watch?v=epyRUp0BhrA"> <img class="links" src="images/tw.png" alt="Twitter Page"> </a>
				<a href="https://www.youtube.com/watch?v=ptw2FLKXDQE"> <img class="links" src="images/ws.png" alt="WhatsApp"> </a>
				<a href="https://www.youtube.com/watch?v=TzXXHVhGXTQ"> <img class="links" src="images/yt.png" alt="YouTube Channel"> </a>
			</p>
		</div>
	</div>

</body>

</html>