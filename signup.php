<?php
include_once 'header.php';
?>

<section>
<div>
  <h2>Signup</h2>
  <form action="includes/signup.inc.php" method="post">
     <table>
      <tr>
        <td>Name</td>
      </tr>
      <tr>
        <td><input type="text" placeholder="First" name="Fname" maxlength="16" size="10" required/>
        <input type="text" placeholder="Last" name="Lname" maxlength="16" size="10" required/></td>
      </tr>

      <tr>
        <td>Email Address</td>
      </tr>
      <tr>
        <td><input type="email" name="emailAddress" placeholder="@yahoo.com" maxlength="40" size="25" required/></td>
      </tr>

      <tr>
        <td>Choose your username</td>
      </tr>
      <tr>
        <td><input class="lefty" type="text" name="username" maxlength="40" size="25" required/></td>
      </tr>

      <tr>
        <td>Create a password</td>
      </tr>
      <tr>
        <td><input type="password" name="password" id="pass" maxlength="40" size="25" required/></td>
      </tr>

      <tr>
        <td>Confirm Password</td>
      </tr>
      <tr>
        <td><input type="password" name="confirm" id="conf_pass" maxlength="40" size="25" required/></td>
        <span id='message'></span>
      </tr>

      <tr>
        <td>Birthday (Months, Days & Years)</td>
      </tr>
      <tr>
        <td>
          <select name="months" required>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June" selected>June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
        <input type="text" name="days" maxlength="2" size="2" />
        <input type="text" name="years" maxlength="4" size="4" />
        </td>
      </tr>

      <tr>
        <td>Gender
        <input type="radio" name="gender" value="male" required />Male
        <input type="radio" name="gender" value="female" required />Female</td>
      </tr>

      <tr>
        <td>Mobile phone</td>
      </tr>
      <tr>
        <td><input type="text" name="mobileNumber" maxlength="12" size="25" required/></td>
      </tr>

      <tr>

        <td align="right"><br /><button type="submit" name="submit">Register</button>
        <input type="reset" value="Clear  "/></td>
        <!-- Can be button -->
      </tr>
      </table>
    </form>
</div>
</section>


<?php
include_once 'footer.php';
?>
