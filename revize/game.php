<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>revize.</title>
	<meta name="description" content="">
	<meta name="robots" content="noindex, nofollow">
	
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>	
	
	<link rel="stylesheet" href="_assets_/plugins/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
	<link rel="stylesheet" href="_assets_/css/layout.css">
	
</head>
	<body class="bg-primary">

<SCRIPT>

/*
Code Written by Cory Fogliani (Email: cory@ijustdontcare.com)
Testers: Cory Fogliani, Chris Gordon
Featured on JavaScript Kit (http://javascriptkit.com)
For this and over 400+ free scripts, visit http://javascriptkit.com
*/

//if IE4/NS6, apply style
if (document.all||document.getElementById){
document.write('<style>.tictac{')
document.write('width:50px;height:50px;')
document.write('}</style>')
}

var sqr1
var sqr2
var sqr3
var sqr4
var sqr5
var sqr6
var sqr7
var sqr8
var sqr9
var sqr1T = 0
var sqr2T = 0
var sqr3T = 0
var sqr4T = 0
var sqr5T = 0
var sqr6T = 0
var sqr7T = 0
var sqr8T = 0
var sqr9T = 0
var moveCount = 0
var turn = 0
var mode = 1

function vari()
{
sqr1 = document.tic.sqr1.value
sqr2 = document.tic.sqr2.value
sqr3 = document.tic.sqr3.value
sqr4 = document.tic.sqr4.value
sqr5 = document.tic.sqr5.value
sqr6 = document.tic.sqr6.value
sqr7 = document.tic.sqr7.value
sqr8 = document.tic.sqr8.value
sqr9 = document.tic.sqr9.value
}
function check()
{
	if(sqr1 == " X " && sqr2 == " X " && sqr3 == " X ")
	{
		alert("You Win!")
		reset()
	} 
	else if(sqr4 == " X " && sqr5 == " X " && sqr6 == " X ")
	{
		alert("You Win!")
		reset()
	} 
	else if(sqr7 == " X " && sqr8 == " X " && sqr9 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else if(sqr1 == " X " && sqr5 == " X " && sqr9 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else if(sqr1 == " X " && sqr4 == " X " && sqr7 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else if(sqr2 == " X " && sqr5 == " X " && sqr8 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else if(sqr3 == " X " && sqr6 == " X " && sqr9 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else if(sqr1 == " X " && sqr5 == " X " && sqr9 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else if(sqr3 == " X " && sqr5 == " X " && sqr7 == " X ")
	{
		alert("You Win!")
		reset()
	}
	else
	{
		winCheck()
		check2()
		drawCheck()  
	} 
}

function check2()
{
	vari()
	drawCheck()
	if(sqr1 == " O " && sqr2 == " O " && sqr3 == " O ")
	{
		alert("You Lose!")
		reset()
	} 
	else if(sqr4 == " O " && sqr5 == " O " && sqr6 == " O ")
	{
		alert("You Lose!")
		reset()
	} 
	else if(sqr7 == " O " && sqr8 == " O " && sqr9 == " O ")
	{
		alert("You Lose!")
		reset()
	}
	else if(sqr1 == " O " && sqr5 == " O " && sqr9 == " O ")
	{
		alert("You Lose!")
		reset()
	}
	else if(sqr1 == " O " && sqr4 == " O " && sqr7 == " O ")
	{
		alert("You Lose!")
		reset()
	}
	else if(sqr2 == " O " && sqr5 == " O " && sqr8 == " O ")
	{
		alert("You Lose!")
		reset()
	}
	else if(sqr3 == " O " && sqr6 == " O " && sqr9 == " O ")
	{
		alert("You Lose!")
		reset()
	}
	else if(sqr1 == " O " && sqr5 == " O " && sqr9 == " O ")
	{
		alert("You Lose!")
		reset()
	}
	else if(sqr3 == " O " && sqr5 == " O " && sqr7 == " O ")
	{
		alert("You Lose!")
		reset()
	}
}

function player1Check()
{
	if(sqr1 == " X " && sqr2 == " X " && sqr3 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	} 
	else if(sqr4 == " X " && sqr5 == " X " && sqr6 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	} 
	else if(sqr7 == " X " && sqr8 == " X " && sqr9 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else if(sqr1 == " X " && sqr5 == " X " && sqr9 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else if(sqr1 == " X " && sqr4 == " X " && sqr7 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else if(sqr2 == " X " && sqr5 == " X " && sqr8 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else if(sqr3 == " X " && sqr6 == " X " && sqr9 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else if(sqr1 == " X " && sqr5 == " X " && sqr9 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else if(sqr3 == " X " && sqr5 == " X " && sqr7 == " X ")
	{
		alert("Player 1 wins!")
		reset()
	}
	else
	{
		player2Check()
		drawCheck()  
	} 
}

function player2Check()
{
	vari()
	drawCheck()
	if(sqr1 == " O " && sqr2 == " O " && sqr3 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	} 
	else if(sqr4 == " O " && sqr5 == " O " && sqr6 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	} 
	else if(sqr7 == " O " && sqr8 == " O " && sqr9 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
	else if(sqr1 == " O " && sqr5 == " O " && sqr9 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
	else if(sqr1 == " O " && sqr4 == " O " && sqr7 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
	else if(sqr2 == " O " && sqr5 == " O " && sqr8 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
	else if(sqr3 == " O " && sqr6 == " O " && sqr9 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
	else if(sqr1 == " O " && sqr5 == " O " && sqr9 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
	else if(sqr3 == " O " && sqr5 == " O " && sqr7 == " O ")
	{
		alert("Player 2 wins!")
		reset()
	}
}

function drawCheck()
{
	vari()
	moveCount = sqr1T + sqr2T + sqr3T + sqr4T + sqr5T + sqr6T + sqr7T + sqr8T + sqr9T 
	if(moveCount == 9)
	{
		reset()
		alert("Draw") 
	}
}

function winCheck()
{
	check2()
	if(sqr1 == " O " && sqr2 == " O " && sqr3T == 0 && turn == 1)
	{
		document.tic.sqr3.value = " O "
		sqr3T = 1;
		turn = 0;
	}
	else if(sqr2 == " O " && sqr3 == " O " && sqr1T == 0 && turn == 1)
	{
		document.tic.sqr1.value = " O "
		sqr1T = 1;
		turn = 0;
	}
	else if(sqr4 == " O " && sqr5 == " O " && sqr6T == 0 && turn == 1)
	{
		document.tic.sqr6.value = " O "
		sqr6T = 1;
		turn = 0;
	}
	else if(sqr5 == " O " && sqr6 == " O " && sqr4T == 0 && turn == 1)
	{
		document.tic.sqr4.value = " O "
		sqr4T = 1;
		turn = 0;
	}
	else if(sqr7 == " O " && sqr8 == " O " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr8 == " O " && sqr9 == " O " && sqr7T == 0 && turn == 1)
	{
		document.tic.sqr7.value = " O "
		sqr7T = 1;
		turn = 0;
	}
	else if(sqr1 == " O " && sqr5 == " O " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr5 == " O " && sqr9 == " O " && sqr1T == 0 && turn == 1)
	{
		document.tic.sqr1.value = " O "
		sqr1T = 1;
		turn = 0;
	}
	else if(sqr3 == " O " && sqr5 == " O " && sqr7T == 0 && turn == 1)
	{
		document.tic.sqr7.value = " O "
		sqr7T = 1;
		turn = 0;
	}
	else if(sqr7 == " O " && sqr5 == " O " && sqr3T == 0 && turn == 1)
	{
		document.tic.sqr3.value = " O "
		sqr3T = 1;
		turn = 0;
	}
	else if(sqr1 == " O " && sqr3 == " O " && sqr2T == 0 && turn == 1)
	{
		document.tic.sqr2.value = " O "
		sqr2T = 1;
		turn = 0;
	}
	else if(sqr4 == " O " && sqr6 == " O " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else if(sqr7 == " O " && sqr9 == " O " && sqr8T == 0 && turn == 1)
	{
		document.tic.sqr8.value = " O "
		sqr8T = 1;
		turn = 0;
	}
	else if(sqr1 == " O " && sqr7 == " O " && sqr4T == 0 && turn == 1)
	{
		document.tic.sqr4.value = " O "
		sqr4T = 1;
		turn = 0;
	}
	else if(sqr2 == " O " && sqr8 == " O " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else if(sqr3 == " O " && sqr9 == " O " && sqr6T == 0 && turn == 1)
	{
		document.tic.sqr6.value = " O "
		sqr6T = 1;
		turn = 0;
	}
	else if(sqr1 == " O " && sqr5 == " O " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr4 == " O " && sqr7 == " O " && sqr1T == 0 && turn == 1)
	{
		document.tic.sqr1.value = " O "
		sqr1T = 1;
		turn = 0;
	}
	else if(sqr5 == " O " && sqr8 == " O " && sqr2T == 0 && turn == 1)
	{
		document.tic.sqr2.value = " O "
		sqr2T = 1;
		turn = 0;
	}
	else if(sqr6 == " O " && sqr9 == " O " && sqr3T == 0 && turn == 1)
	{
		document.tic.sqr3.value = " O "
		sqr3T = 1;
		turn = 0;
	}
	else if(sqr1 == " O " && sqr4 == " O " && sqr7T == 0 && turn == 1)
	{
		document.tic.sqr7.value = " O "
		sqr7T = 1;
		turn = 0;
	}
	else if(sqr2 == " O " && sqr5 == " O " && sqr8T == 0 && turn == 1)
	{
		document.tic.sqr8.value = " O "
		sqr8T = 1;
		turn = 0;
	}
	else if(sqr3 == " O " && sqr6 == " O " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr1 == " O " && sqr9 == " O " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else if(sqr3 == " O " && sqr7 == " O " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else
	{
		computer()
	}
	check2()
}
function computer()
{
	check2()
	if(sqr1 == " X " && sqr2 == " X " && sqr3T == 0 && turn == 1)
	{
		document.tic.sqr3.value = " O "
		sqr3T = 1;
		turn = 0;
	}
	else if(sqr2 == " X " && sqr3 == " X " && sqr1T == 0 && turn == 1)
	{
		document.tic.sqr1.value = " O "
		sqr1T = 1;
		turn = 0;
	}
	else if(sqr4 == " X " && sqr5 == " X " && sqr6T == 0 && turn == 1)
	{
		document.tic.sqr6.value = " O "
		sqr6T = 1;
		turn = 0;
	}
	else if(sqr5 == " X " && sqr6 == " X " && sqr4T == 0 && turn == 1)
	{
		document.tic.sqr4.value = " O "
		sqr4T = 1;
		turn = 0;
	}
	else if(sqr7 == " X " && sqr8 == " X " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr8 == " X " && sqr9 == " X " && sqr7T == 0 && turn == 1)
	{
		document.tic.sqr7.value = " O "
		sqr7T = 1;
		turn = 0;
	}
	else if(sqr1 == " X " && sqr5 == " X " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr5 == " X " && sqr9 == " X " && sqr1T == 0 && turn == 1)
	{
		document.tic.sqr1.value = " O "
		sqr1T = 1;
		turn = 0;
	}
	else if(sqr3 == " X " && sqr5 == " X " && sqr7T == 0 && turn == 1)
	{
		document.tic.sqr7.value = " O "
		sqr7T = 1;
		turn = 0;
	}
	else if(sqr7 == " X " && sqr5 == " X " && sqr3T == 0 && turn == 1)
	{
		document.tic.sqr3.value = " O "
		sqr3T = 1;
		turn = 0;
	}
	else if(sqr1 == " X " && sqr3 == " X " && sqr2T == 0 && turn == 1)
	{
		document.tic.sqr2.value = " O "
		sqr2T = 1;
		turn = 0;
	}
	else if(sqr4 == " X " && sqr6 == " X " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else if(sqr7 == " X " && sqr9 == " X " && sqr8T == 0 && turn == 1)
	{
		document.tic.sqr8.value = " O "
		sqr8T = 1;
		turn = 0;
	}
	else if(sqr1 == " X " && sqr7 == " X " && sqr4T == 0 && turn == 1)
	{
		document.tic.sqr4.value = " O "
		sqr4T = 1;
		turn = 0;
	}
	else if(sqr2 == " X " && sqr8 == " X " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else if(sqr3 == " X " && sqr9 == " X " && sqr6T == 0 && turn == 1)
	{
		document.tic.sqr6.value = " O "
		sqr6T = 1;
		turn = 0;
	}
	else if(sqr1 == " X " && sqr5 == " X " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr4 == " X " && sqr7 == " X " && sqr1T == 0 && turn == 1)
	{
		document.tic.sqr1.value = " O "
		sqr1T = 1;
		turn = 0;
	}
	else if(sqr5 == " X " && sqr8 == " X " && sqr2T == 0 && turn == 1)
	{
		document.tic.sqr2.value = " O "
		sqr2T = 1;
		turn = 0;
	}
	else if(sqr6 == " X " && sqr9 == " X " && sqr3T == 0 && turn == 1)
	{
		document.tic.sqr3.value = " O "
		sqr3T = 1;
		turn = 0;
	}
	else if(sqr1 == " X " && sqr4 == " X " && sqr7T == 0 && turn == 1)
	{
		document.tic.sqr7.value = " O "
		sqr7T = 1;
		turn = 0;
	}
	else if(sqr2 == " X " && sqr5 == " X " && sqr8T == 0 && turn == 1)
	{
		document.tic.sqr8.value = " O "
		sqr8T = 1;
		turn = 0;
	}
	else if(sqr3 == " X " && sqr6 == " X " && sqr9T == 0 && turn == 1)
	{
		document.tic.sqr9.value = " O "
		sqr9T = 1;
		turn = 0;
	}
	else if(sqr1 == " X " && sqr9 == " X " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else if(sqr3 == " X " && sqr7 == " X " && sqr5T == 0 && turn == 1)
	{
		document.tic.sqr5.value = " O "
		sqr5T = 1;
		turn = 0;
	}
	else
	{
		AI()
	}
	check2()
}

function AI()
{
	vari()
	if(document.tic.sqr5.value == "     " && turn == 1)
	{
		document.tic.sqr5.value = " O "
		turn = 0
		sqr5T = 1
	}
	else if(document.tic.sqr1.value == "     " && turn == 1)
	{
		document.tic.sqr1.value = " O "
		turn = 0
		sqr1T = 1
	}
	else if(document.tic.sqr9.value == "     " && turn == 1)
	{
		document.tic.sqr9.value = " O "
		turn = 0
		sqr9T = 1
	}
	else if(document.tic.sqr6.value == "     " && turn == 1)
	{
		document.tic.sqr6.value = " O "
		turn = 0
		sqr6T = 1
	}
	else if(document.tic.sqr2.value == "     " && turn == 1)
	{
		document.tic.sqr2.value = " O "
		turn = 0
		sqr2T = 1
	}
	else if(document.tic.sqr8.value == "     " && turn == 1)
	{
		document.tic.sqr8.value = " O "
		turn = 0
		sqr8T = 1
	}
	else if(document.tic.sqr3.value == "     " && turn == 1)
	{
		document.tic.sqr3.value = " O "
		turn = 0
		sqr3T = 1
	}
	else if(document.tic.sqr7.value == "     " && turn == 1)
	{
		document.tic.sqr7.value = " O "
		turn = 0
		sqr7T = 1
	}
	else if(document.tic.sqr4.value == "     " && turn == 1)
	{
		document.tic.sqr4.value = " O "
		turn = 0
		sqr4T = 1
	}
	check2()
}

function reset()
{
	document.tic.sqr1.value = "     "
	document.tic.sqr2.value = "     "
	document.tic.sqr3.value = "     "
	document.tic.sqr4.value = "     "
	document.tic.sqr5.value = "     "
	document.tic.sqr6.value = "     "
	document.tic.sqr7.value = "     "
	document.tic.sqr8.value = "     "
	document.tic.sqr9.value = "     "
	sqr1T = 0
	sqr2T = 0
	sqr3T = 0
	sqr4T = 0
	sqr5T = 0
	sqr6T = 0
	sqr7T = 0
	sqr8T = 0
	sqr9T = 0
	vari()
	turn = 0
	moveCount = 0
}

function resetter()
{
	reset()
}
</SCRIPT>
<div class="container vh-100 d-flex align-items-center justify-content-center">
	<div class="col m-auto d-flex align-items-center flex-column">
		<h1 class="mb-5 text-white pb-5">Let's play</h1>
<FORM NAME="tic" method="post" class="d-inline-flex flex-wrap justify-content-center">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end border-bottom border-5" NAME="sqr1" class="tictac" value="     " onClick="if(document.tic.sqr1.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr1.value = ' X '; sqr1T = 1; turn = 1; vari(); check();} else if(document.tic.sqr1.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr1.value = ' X '; sqr1T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr1.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr1.value = ' O '; sqr1T = 1; turn = 1; vari(); player1Check()} drawCheck()">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end border-bottom border-5" NAME="sqr2" class="tictac" value="     " onClick="if(document.tic.sqr2.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr2.value = ' X '; sqr2T = 1; turn = 1; vari(); check();} else if(document.tic.sqr2.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr2.value = ' X '; sqr2T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr2.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr2.value = ' O '; sqr2T = 1; turn = 1; vari(); player1Check()} drawCheck()">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end-0 border-bottom border-5" NAME="sqr3" class="tictac" value="     " onClick="if(document.tic.sqr3.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr3.value = ' X '; sqr3T = 1; turn = 1; vari(); check();} else if(document.tic.sqr3.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr3.value = ' X '; sqr3T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr3.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr3.value = ' O '; sqr3T = 1; turn = 1; vari(); player1Check()} drawCheck()"><br />
<div class="w-100"></div>
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end border-bottom border-5" NAME="sqr4" class="tictac" value="     " onClick="if(document.tic.sqr4.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr4.value = ' X '; sqr4T = 1; turn = 1; vari(); check();} else if(document.tic.sqr4.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr4.value = ' X '; sqr4T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr4.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr4.value = ' O '; sqr4T = 1; turn = 1; vari(); player1Check()} drawCheck()">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end border-bottom border-5" NAME="sqr5" class="tictac" value="     " onClick="if(document.tic.sqr5.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr5.value = ' X '; sqr5T = 1; turn = 1; vari(); check();} else if(document.tic.sqr5.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr5.value = ' X '; sqr5T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr5.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr5.value = ' O '; sqr5T = 1; turn = 1; vari(); player1Check()} drawCheck()">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end-0 border-bottom border-5" NAME="sqr6" class="tictac" value="     " onClick="if(document.tic.sqr6.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr6.value = ' X '; sqr6T = 1; turn = 1; vari(); check();} else if(document.tic.sqr6.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr6.value = ' X '; sqr6T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr6.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr6.value = ' O '; sqr6T = 1; turn = 1; vari(); player1Check()} drawCheck()"><br />
<div class="w-100"></div>
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end border-bottom-0 border-5" NAME="sqr7" class="tictac" value="     " onClick="if(document.tic.sqr7.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr7.value = ' X '; sqr7T = 1; turn = 1; vari(); check();} else if(document.tic.sqr7.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr7.value = ' X '; sqr7T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr7.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr7.value = ' O '; sqr7T = 1; turn = 1; vari(); player1Check()} drawCheck()">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-white rounded-0 border-top-0 border-start-0 border-end border-bottom-0 border-5" NAME="sqr8" class="tictac" value="     " onClick="if(document.tic.sqr8.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr8.value = ' X '; sqr8T = 1; turn = 1; vari(); check();} else if(document.tic.sqr8.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr8.value = ' X '; sqr8T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr8.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr8.value = ' O '; sqr8T = 1; turn = 1; vari(); player1Check()} drawCheck()">
<INPUT TYPE="button" class="p-5 btn text-white w-25 fs-1 border-0" NAME="sqr9" class="tictac" value="     " onClick="if(document.tic.sqr9.value == '     ' && turn == 0 && mode == 1) {document.tic.sqr9.value = ' X '; sqr9T = 1; turn = 1; vari(); check();} else if(document.tic.sqr9.value == '     ' && turn == 1 && mode == 2) {document.tic.sqr9.value = ' X '; sqr9T = 1; turn = 0; vari(); player1Check()} else if(document.tic.sqr9.value == '     ' && turn == 0 && mode == 2) {document.tic.sqr9.value = ' O '; sqr9T = 1; turn = 1; vari(); player1Check()} drawCheck()">
</form>
</div>
</div>
<script src="_assets_/js/scripts.js"></script>					
</body>