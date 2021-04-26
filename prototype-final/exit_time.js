const time = async ()=>{
    // console.log("login")
 
        //  console.log("getTime() : " + dt);
        var mobile = document.cookie.split('mobile=');
       
    
    const data = {
      
      mobile:mobile[1]

    };
   
    const response = await fetch('https://intanety.com/hackathon/c-tracker/php/models/exit_time.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',

      },
      body: JSON.stringify(data),
    })
    .then(response => response.text()) 
.then(data => {
  console.log('Success: date and time is recorded',data);
 
  alert("Thank you for Shoping! Please Visit Again");
 

})

.catch((error) => {
  console.error('Error:', error);
});



    
return false;
  
}

