const signup = async ()=>{
  console.log("reg is succes")
  const data = {
      firstName: document.getElementById('fname').value ,
      lastName:document.getElementById('lname').value,
      phone:document.getElementById('phone').value,
      password:document.getElementById('Password').value,
      shopName:"NULL"
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

  alert(data);

})
.catch((error) => {
console.error('Error:', error);
});

console.log(response);

return false;

}