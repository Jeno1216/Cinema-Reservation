/* this is connected to changing the theme */
const setTheme = theme => document.documentElement.className = theme;


function PictureChangeDark()
{




      document.getElementById("cinema-individual1").style="border:1px solid white;";
      document.getElementById("cinema-individual2").style="border:1px solid white;";
      document.getElementById("cinema-individual3").style="border:1px solid white;";
      document.getElementById("cinema-individual4").style="border:1px solid white;";
      document.getElementById("cinema-individual5").style="border:1px solid white;";
      document.getElementById("cinema-individual6").style="border:1px solid white;";
      document.getElementById("cinema-individual7").style="border:1px solid white;";
      document.getElementById("cinema-individual8").style="border:1px solid white;";
      document.getElementById("cinema-individual9").style="border:1px solid white;";

      document.getElementById("toggle-container").style="border:1px solid white;";

      

     
}
function PictureChangeLight()
{

      document.getElementById("cinema-individual1").style="border:1px solid black;";
      document.getElementById("cinema-individual2").style="border:1px solid black;";
      document.getElementById("cinema-individual3").style="border:1px solid black;";
      document.getElementById("cinema-individual4").style="border:1px solid black;";
      document.getElementById("cinema-individual5").style="border:1px solid black;";
      document.getElementById("cinema-individual6").style="border:1px solid black;";
      document.getElementById("cinema-individual7").style="border:1px solid black;";
      document.getElementById("cinema-individual8").style="border:1px solid black;";
      document.getElementById("cinema-individual9").style="border:1px solid black;";

      document.getElementById("toggle-container").style="border:1px solid black;";


   

}

// FOR BRANCHES

function goFullscreen(id) {
      var element = document.getElementById(id);       
      if (element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
      } else if (element.webkitRequestFullScreen) {
      element.webkitRequestFullScreen();
      }  
      }
          
      