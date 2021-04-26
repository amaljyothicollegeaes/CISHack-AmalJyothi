 const signup = async ()=>{
    console.log("sign up for shop")
    const data = {
        firstName: document.getElementById('fname').value ,
        lastName:document.getElementById('lname').value, 
        phone:document.getElementById('phone').value,
        shopName:document.getElementById('shop').value,
        password:document.getElementById('Password').value,
    };
    

const response = await fetch('https://intanety.com/hackathon/c-tracker/php/models/Post.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then(response => response.text()) 
.then(data => {
  console.log('Success:', data);
  alert("Registration has successfully completed! ");
})
.catch((error) => {
  console.error('Error:', error);
});

console.log(response);

return false;
  
}