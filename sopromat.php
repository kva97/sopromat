<!DOCTYPE html>
<html>
	<head lang = "en">
        <meta charset = "UCF-8">
		<title>Сопромат</title>
        <link rel = "stylesheet" href = "./sopromat.css">
	</head>
	<body style = 'margin: 0px;'>
		<div class = 'nav'>
			<div class = 'options'>
				<div class='balk_len'>
					<h3>Длина:</h3>
					<p>Полная длина балки (м): <input type="number" min="0" id ='len'></p>
				</div>
				<div class='balk_support'>
					<h3>Опора:</h3>
					<p>Расстояние (м): <input type="number" min="0" id='support_len'></p>
					<img src="./fixed_support.png" height='40' id='fixed_support'>
					<img src="./mobile_support.png" height='40' id='mobile_support'>
				</div>
				<div class='balk_force'>
					<h3>Сосредоточенная сила:</h3>
					<p>Расстояние (м):<input type="number" min="0" id='force_len'></p>
					<p>Велична сила (кН):<input type="number" id='force_val'></p>
					<div class='put_arrows'>
						<img src="./force.png" height='40' id='force'>
						<button id = 'force_up'>↑</button>
						<button id = 'force_down'>↓</button>
					</div>
				</div>
				<div class='balk_load'>
					<h3>Распределенная нагрузка:</h3>
					<p>Начальная точка: <input type="number" min="0" id='load_start'></p>
					<p>Конечная точка: <input type="number" min="0" id='load_finish'></p>
					<p>Велична нагрузки (кН/м):<input type="number" id='load_val'></p>
					<div class='put_arrows'>
						<img src="./load.png" height = '40' id='load'>
						<button id = 'load_up'>↑</button>
						<button id = 'load_down'>↓</button>
					</div>
				</div>
				<div class='balk_moment'>
					<h3>Момент:</h3>
					<p>Расстояние: <input type="number" min="0" id='moment_len'></p>
					<p>Велична момента (кН*м):<input type="number" id='moment_val'></p>
					<div class='put_arrows'>
						<img src="./moment.png" height='40' id='moment'>
						<button id = 'moment_right'>⟳</button>
						<button id = 'moment_left'>⟲</button>
					</div>
				</div>
				<div class='clear_cnvs'>
					<p>Очистить<img id='trash' src="./clear_cnvs.png" height='40' id='moment' ></p>
				</div>
			</div>
			<div class = main>
				<canvas id = 'cnvs'>
					<div id = 'diagram'></div>
				</canvas>
			</div>
			<div id='output'>
			</div>
		</div>
	</body>
	<script charset="utf-8" type="text/javascript" SRC="./sopromat.js"></script>
</html>
