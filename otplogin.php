<!DOCTYPE html>
<html>
<html>
<head>
    <title>Phone Number Authentication</title>
</head>
<body><center><br><br>
<h1>Enter number to create account</h1>
<form action="home.html">
    <input type="text" id="number" placeholder="+91**********"><br><br>
    <div id="recaptcha-container"></div><br><br>
    <button type="button" onclick="phoneAuth();">SendCode</button><br><br>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code"><br><br>
    <button type="button" onclick="codeverify();">Verify code</button>

</form>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script> -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
apiKey: "AIzaSyCnu0tcc9ZkkC6JqEYmUGWnVew7PtmNNL4",
    authDomain: "vote-login-652d4.firebaseapp.com",
    databaseURL: "https://vote-login-652d4.firebaseio.com",
    projectId: "vote-login-652d4",
    storageBucket: "vote-login-652d4.appspot.com",
    messagingSenderId: "678832559714",
    appId: "1:678832559714:web:a934a31d5234ccc9b1e33b"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="app1.js"></script>
</center>
</body>
</div>
</html>