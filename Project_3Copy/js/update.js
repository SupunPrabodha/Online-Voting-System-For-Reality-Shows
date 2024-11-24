checkEpisode(episode)
{
   // Validate Number of Episodes (must be a number)
   const episodeInput = document.getElementById('episode');
   if (isNaN(episodeInput.value)) {
     alert('Number of Episodes must be a number');
     isValid = false;
   }
 
   
 };