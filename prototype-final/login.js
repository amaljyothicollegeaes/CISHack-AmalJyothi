const login = async ()=>{
    console.log("login")
    const data = {
       
        phone:document.getElementById('username').value,
        password:document.getElementById('Password').value,
    };
    
    if(data.phone=='admin'&&data.password=='admin'){
      window.location.assign('http://localhost/c-tracker/login-15.php');
    }

    const response = await fetch('http://localhost/c-tracker/models/login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',

      },
      body: JSON.stringify(data),
    })

    .then(response => response.json()) 
.then(data => {
  console.log('Success:',data.shopName);
  
  if (data.shopName){
    window.location.href='./shopmain.html?mobile='+data.mobile+'&shopname='+data.shopName+'&fname='+data.firstName;

      }
  else{
    window.location.href='./coming-soon-05.html?mobile='+data.mobile+'&shopname='+data.shopName+'&fname='+data.firstName;
  }
  
  
   
 
})

.catch((error) => {
  console.error('Error:', error);
});

console.log(response);


    
return false;
  
}




    // .then(response => response.json())
    // .catch((error) => {
    //   console.error('Error:', error);
    // });
    
    // // console.log(loginResponse.mobile);
    // // if(loginResponse.shopname){
    // //   document.getElementById().innerHTML=loginResponse.shopname
    // // }
    
    
    // return false;
      
    // }