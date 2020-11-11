<html>
<head>
	<meta charset="utf-8">
	<title>Slot Machine</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css/styles.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script> 
</head>
<body class="text-center">

	<h1 class="jumbotron">Gambling is Fun and Not a Destructive Lifestyle</h1>

	<div class="container">

		<!--First row of instructions panel and slot machine-->
		 <div class="row">
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <strong>How to get paid</strong>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Enter text in box and then spin to win, sucker.</p>
                    <p class="card-text"><strong>Payouts results:</strong>
                        <ul>
                            <li class="text-danger"><strong>If you get one of each character, I take all your winnings.</strong></li>
                            <li>If you get two of one character, I give you x1.5 your bet amount.</li>
                            <li>If you get three of one character, I give you x2 your bet amount, and I kick you out of casino.</li>
                        </ul>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <strong>Character Legend</strong>
                  </div>
                  <div class="card-body">
                        <ul>
                            <li><strong>Arbiter: </strong> <img src="img/0.png" class="img-fluid"> </li>
                            <br>
                            <li><strong>Cortana: </strong> <img src="img/1.png" class="img-fluid"> </li>
                            <br>
                            <li><strong>Chief: </strong> <img src="img/2.png" class="img-fluid"> </li>
                        </ul> 
                  </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
                <img src="img/0.png" class="img-fluid" id="image1">
            </div>
            <div class="col">
                <img src="img/1.png" class="img-fluid" id="image2">
            </div>
            <div class="col">
                <img src="img/2.png" class="img-fluid" id="image3">
            </div>
        </div>
        <div id="bet">
            <input type="number" id="bet-amount" class="form-control" placeholder="Put down your entire life savings here.">
            <button id="spin" class="btn btn-primary">Spin!</button>
        </div>
        </div>


		<!--Second row for results and messages -->
		<div id="results"></div>
		<div id="winnings"></div>
	</div>
		<!--Footer and end of application -->
		<footer>
			<p>@Copyright Nade CST336
		</footer>

</body>
</html>