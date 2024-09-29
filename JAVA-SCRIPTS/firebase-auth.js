import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-analytics.js";
import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-auth.js";


const firebaseConfig = {
  apiKey: "AIzaSyDDSHGYYY4XVJOt_8vMNEey16tlPKXKte0",
  authDomain: "major-8932c.firebaseapp.com",
  databaseURL: "https://major-8932c-default-rtdb.firebaseio.com",
  projectId: "major-8932c",
  storageBucket: "major-8932c.appspot.com",
  messagingSenderId: "792452927403",
  appId: "1:792452927403:web:0e66b450280af9eb718cee",
  measurementId: "G-7J920HLBRM"
};

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const database = getDatabase(app);
const auth = getAuth();

signUp.addEventListener('click', (e) => {

  var email = document.getElementById('signup_email').value;
  var password = document.getElementById('signup_password').value;
  var username = document.getElementById('username').value;

  createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      const user = userCredential.user;
      set(ref(database, 'users/' + user.uid), {
        username: username,
        email: email
      })
      alert('Account registered successfuly');
<<<<<<< HEAD
      
   
=======


>>>>>>> 6e908be017318db82b93b888c0d61364e0e6516a
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;

      alert(errorMessage);
    });




  login.addEventListener('click', (e) => {

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;


    signInWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;

        const dt = new Date();
        update(ref(database, 'users/' + user.uid), {
          last_login: dt,
        })

        alert('Logged in successfully');
        
        document.getElementById("logout").style.display = "block";
        document.getElementById("openForms").style.display = "none";
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        alert(errorMessage);
      });

  })

});

