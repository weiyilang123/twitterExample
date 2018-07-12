<footer class="footer">
  <div class="container">
    <p>&copy; My Website 2018</p>
  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<!-- Model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email address">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" onclick="clickSignup()" id="toggleLogin">Sign up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="loginSignupButton">Login</button>
      </div>
    </div>
  </div>
</div>

<script>
var isLogin = 1
function clickSignup() {

  if(isLogin == 1) {

    isLogin = 0;
    document.getElementById("loginSignupButton").innerHTML="Signup";
    document.getElementById("loginModalLabel").innerHTML="Signup";
    document.getElementById("toggleLogin").innerHTML="Login";
  }
  else {
    isLogin = 1;
    document.getElementById("loginSignupButton").innerHTML="Login";
    document.getElementById("loginModalLabel").innerHTML="Login";
    document.getElementById("toggleLogin").innerHTML="Signup";
  }
}


$("#loginSignupButton").click(function() {

  $.ajax({
    type: "POST",
    url: "actions.php?action=loginSignup",
    data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + isLogin,
    success: function(result) {
      alert(result);
    }

  })

});

</script>


</body>
</html>
