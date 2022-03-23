<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="css/donate.css">
</head>
<body>

  <?php include '../other/header.php';?>

    <div class="main_containor">
        <h1>Donate Food</h1>
        <hr>
        <div class="food_details">
            <form name="food" action="" method="post">
                <table cellspacing="15" cellpadding="10">
                    <tr>
                        <th><label for="name">Name : </label></th>
                        <td colspan="3">
                            <input type="text" name="name" id="name" placeholder="First Name" required>
                            <input type="text" name="name" id="name" placeholder="Midddle Name" required>
                            <input type="text" name="name" id="name" placeholder="Last Name" required>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="email">Email : </label></th>
                        <td><input type="email" name="email" id="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <th><label for="phone">Phone : </label></th>
                        <td><input type="number" name="phone" id="phone" placeholder="Phone(optional)"></td>
                    </tr>
                    <tr>
                        <th><label for="food_type">Food Type : </label></th>
                        <td>
                            <select name="food_type" id="food_type">
                                <option value="cooked">Cooked</option>
                                <option value="uncooked">Uncooked</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="country">Country : </label></th>
                        <td><input type="text" name="country" id="country" placeholder="Country" required></td>
                    </tr>
                    <tr>
                        <th><label for="address">Address : </label></th>
                        <td><textarea name="address" id="address" cols="30" rows="5" placeholder="address" required></textarea></td>
                    </tr>
                    </table>
                    <input type="checkbox" name="anonymous" id="anonymous">
                    I would like this gift to remain anonymous
            </form>
        </div>
        <div class="recurring">
          <h2>Recurring Gift</h2>
          <hr>
          <input type="checkbox" name="recurring_gift" id="recurring_gift">
          Make this a recurring gift
          <div class="gift">
            <span>Give</span>
            <select name="gift_frequency" id="gift_frequency">
              <option value="monthly">Daily</option>
              <option value="monthly">Monthly</option>
              <option value="quarterly">Quarterly</option>
              <option value="Simiannually">Simiannually</option>
              <option value="annually">Annually</option>
            </select>
            <span> on </span>
            <select name="gift_duration" id="gift_duration">
              <option value="1">day 1 of each month</option>
              <option value="15">day 15 of each month</option>
            </select>
          </div>
        </div>
        <div class="submit_donation">
          <hr>
          <label for="comment">Leave a comment (optional) : </label><br>
          <textarea name="comment" id="comment" cols="30" rows="5" placeholder="comment"></textarea><br>
          <button type="submit">Donate</button>
        </div>
    </div>

    <script>
      // Amount
      var donation_amount = document.getElementById("donation_amount");
      var amounts = donation_amount.getElementsByClassName("amount");
      for (var i = 0; i < amounts.length; i++) {
          amounts[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("selected_amount");
              current[0].className = "amount";
              this.className += " selected_amount";
          });
        }
              
        
      // Amount Other
      let other_amount = document.getElementById('other_amount');
      let html = `<input type="text" name="amount" placeholder="other" id="input_amount" class="input_amount">`;
      let input_amount = document.getElementById('input_amount');
      other_amount.addEventListener('click' , addhtml());
      function addhtml(){
        other_amount.innerHTML = html;  
      }
      

      // payment details
      let credit = document.getElementById('credit');
      let debit = document.getElementById('debit');
      credit.addEventListener('click' , function() {
          credit.className = "selected_button";
          debit.className = "";
          document.getElementById('credit_details').style.display = "block";
          document.getElementById('debit_details').style.display = "none";
      });
      debit.addEventListener('click' , function() {
          debit.className = "selected_button";
          credit.className = "";
          document.getElementById('credit_details').style.display = "none";
          document.getElementById('debit_details').style.display = "block";
      });
    </script>
  <?php include '../other/footer.php';?>

</body>
</html>