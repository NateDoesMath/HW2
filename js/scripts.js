		/* Code and shit */
		
		$(document).ready(function(){
			
			//Variables
			var winnings = localStorage.getItem("total_winnings");
			var betAmount= 0;
			localStorage.setItem("total_winnings", 0)
		
			var slots = [
  				"arbiter",
  				"cortana",
  				"masterchief"
			];
			
			//Event Listener
			$("#spin").on("click",function(){
				spin();
			}); //spin

			//Functions
			function spin() {
			   let winAmount = 0;
			   let win = false;
			   betAmount = $("#bet-amount").val();


			   //Check for empty value
			   if(betAmount <= 0) {
			   	alert("Are you retarded?");
			   	die();
			   }
			
			
			//Sets a random number 
			var slot1 = Math.floor(Math.random()  * slots.length);
               var slot2 = Math.floor(Math.random()  * slots.length);
               var slot3 = Math.floor(Math.random()  * slots.length); 
			   
			//Sets random image
               $("#image1").attr("src", `img/${slot1}.png`);
               $("#image2").attr("src", `img/${slot2}.png`);
               $("#image3").attr("src", `img/${slot3}.png`);

               //If you get 3 of one char, I take all your money.
               if(slot1 != slot2 && slot1 != slot3 && 
               	slot2 != slot3) {
             		winAmount = 0;
             		win = false;
             		winnings = 0;
             		localStorage.setItem("total_winnings", 0);

             		$("#results").html("All different characters...thank you for your donation to global domination.");
             		$(`#results`).attr("class", "text-danger");

               }

               //functionality for getting 3 of one char.
               if(slot1 == slot2 && slot1 == slot3) {
         			winAmount = betAmount * 2;
         			win = true;
         			$("#results").html("You matched all 3 items. I'm calling BS... you just won $" + winAmount);
         			$(`#results`).attr("class", "text-success");
               }
               //functionality for getting 2 of one char.
               else if(slot1 == slot2 || slot1 == slot3 || 
               	slot2 == slot3) {
               		winAmount = betAmount * 1.5;
               		win = true;

               		$("#results").html("You matched 2 characters...This is fine. I no lose much money. You just won $" + winAmount);
               		$(`#results`).attr("class", "text-success");
               }

				console.log(winAmount);
				winnings = +winnings + +winAmount;
				localStorage.setItem("total_winnings", winAmount);
				$("#winnings").html(`Total Winnings: $${winnings}`);
		}



		})//ready
	