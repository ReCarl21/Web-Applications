<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="text" type="text/css" href=""css/reg.css"" />

<script>

</script>

</head>
<body>

<form action="server.php" method="post">
   <table>
    <tr>
      <td>Name</td>
    </tr>
    <tr>
      <td><input type="text" placeholder="First" name="Fname" maxlength="16" size="10" required/>
      <input type="text" placeholder="Last" name="Lname" maxlength="16" size="10" required/></td>
    </tr>

    <tr>
      <td>Choose your username</td>
    </tr>
    <tr>
      <td><input class="lefty" type="email" placeholder="@yahoo.com" name="username" maxlength="16" size="25" required/></td>
    </tr>

    <tr>
      <td>Create a password</td>
    </tr>
    <tr>
      <td><input type="password" name="password" id="pass" maxlength="16" size="25" required/></td>
    </tr>

    <tr>
      <td>Confirm Password</td>
    </tr>
    <tr>
      <td><input type="password" name="confirm" id="conf_pass" maxlength="16" size="25" required/></td>
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
      <td><input type="text" name="contactDetails" maxlength="12" size="25" required/></td>
    </tr>

    <tr>

      <td align="right"><br /><input type="submit" value="Sign Up"/>
      <input type="reset" value="Clear  "/></td>
      <!-- Can be button -->
    </tr>
    </table>
  </form>



<!-- IMPORTANT CODE
<input name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" value="search">

<input id="firstname" class="" name="firstname" type="text"  value="First Name" onfocus="if (this.value == 'First Name') {this.value = '';}" onblur="if (this.value == '') " />
-->

</body>
</html>
