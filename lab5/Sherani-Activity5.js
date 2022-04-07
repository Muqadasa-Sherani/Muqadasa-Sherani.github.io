var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function(id) { return document.getElementById(id); };



window.onload = function() {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};

function displayResults()
{	var maxScore;
	var maxPos;
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}
	
	maxScore= Math.max.apply(Math,scores);
	maxPos = scores.indexOf(maxScore);

	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br /> High score is "+names[maxPos]+" with a score of "+maxScore + "<br \> ";
}

function displayScores()
{
	var result = "";
	for(var i=0; i<names.length;i++){
		result = result +" <tr> <td> "+ names[i] +" </td>	<td> "+scores[i]+" </td> </tr> <br/>";
	}
	document.getElementById("scores_table").innerHTML="<h2> Scores </h2> <br/> <tr><td><b> Name </b></td> <td><b> Score <b></td></tr> <br/>"+result;
	
}

function addScore()
{

	var name = $("name").value;
	var score = $("score").value;
	score = parseInt(score);

	if( name !== "" && Number.isInteger(score) && score >= 0 && score <=100){
		names.push(name);
		scores.push(score);
	}
	else{
		alert("You must enter a name and a valid score");
	}
}

