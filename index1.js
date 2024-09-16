// Initialize Firebase

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCzKWuXkz5vGcSPtwhdmS6RGqxme73xWys",
    authDomain: "tut-50e77.firebaseapp.com",
    databaseURL: "https://tut-50e77.firebaseio.com",
    projectId: "tut-50e77",
    storageBucket: "tut-50e77.appspot.com",
    messagingSenderId: "881323081425",
    appId: "1:881323081425:web:f9ad666435e5c6331a8ff0",
    measurementId: "G-PKS30090RV"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  
  $(document).ready(function(){

    var database = firebase.database();
    var ledStatus;

  
    database.ref().child("ledStatus").on("value", function(snap){
      ledStatus = snap.val().ledStatus;
      if(ledStatus == 1){
        $(".lightStatus").text("The light is on");
      } else {
        $(".lightStatus").text("The light is off");
      }
    });
  
    $(".lightButton").click(function(){
      var firebaseRef = firebase.database().ref().child("ledStatus").child("ledStatus");
  
      if(ledStatus == 1){
        firebaseRef.set(0);
        ledStatus = 0;
      } else {
        firebaseRef.set(1);
        ledStatus = 1;
      }
    });
  });




