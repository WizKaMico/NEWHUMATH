 <div class="user signinBx">
        <div class="imgBx"><img src="style/img1.png" alt="" /></div>
        <div class="formBx">
          <form action="action/login.php" method="POST">
            <h2>Sign In</h2>
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="login" value="Login" style="width:100%;" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();" style="color:#1ddd9f;">Sign Up.</a>
            </p>
            <p class="signup">
             Forgot password / account ?
              <a href="index.php?view=FORGOT" onclick="toggleForm();" style="color:#1ddd9f;">Account Recovery.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="action/register.php" method="POST">
            <h2>Create an account</h2>
            <input type="text" name="firstname" placeholder="Firstname"  required=""/>
            <input type="text" name="lastname" placeholder="Lastname" required=""/>
            <input type="number" name="student_no" placeholder="Student No." required=""/>
            <input type="email" name="email" placeholder="Email Address" required=""/>
            <input type="password" name="password" placeholder="Create Password" required=""/>
            <select style=" position: relative;
              width: 100%;
              padding: 10px;
              background: #f5f5f5;
              color: #333;
              border: none;
              outline: none;
              box-shadow: none;
              margin: 8px 0;
              font-size: 14px;
              letter-spacing: 1px;
              font-weight: 300;" name="gender" required="">
               <option>--CHOOSE OPTION--</option>
               <option value="MALE">MALE</option>
               <option value="FEMALE">FEMALE</option>
            </select>
            <input type="submit" name="submit" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();" style="color:#1ddd9f;">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img src="style/img1.png" alt="" /></div>
      </div>