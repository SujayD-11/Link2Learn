<?php
    include 'header.php';
?>
<style>

</style>
<main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Cart</h2>
        </div>
        <form>
          <div class="products">
   <!-- <form name="ChooseCourse" method = "post">
        <h3>Choose your Course</h3><br>
        <form name="course-outcome">
          <input type="radio" name="chooseCourse" value="psychology"> Psychology<br><br>
          <input type="radio" name="chooseCourse" value="business"> Business<br><br>
          <input type="radio" name="chooseCourse" value="webdevelopment"> Web Devolopment<br><br>
          <input type="radio" name="chooseCourse" value="cybersecurity"> Cyber Security<br><br>
          <button class="course-submit">SUBMIT</a></button>
        </form>
        <p id="course-price-display">Cart Price : <span id="course-price"></span></p>-->
            <div class="item">
              <span class="price">₹2500</span>
              <p class="item-name">Cybersecurity</p>
              <p class="item-description">Learn in-demand skills across across finance, management, leadership, and more!</p>
            </div>
            <div class="total">Total<span class="price">₹2500</span></div>
          </div>
          <div class="card-details">
            <h3 class="title">Credit Card Details</h3>
            <div class="row">
              <div class="form-group col-sm-7">

                  <form name = "CardDetails" method = "post">
                <label for="card-holder">Card Holder</label>
                <input name="cName" id="card-holder" type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-5">
                <label for="">Expiration Date</label>
                <div class="input-group expiration-date">
                  <input type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" required>
                  <span class="date-separator">/</span>
                  <input type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" required>
                </div>
              </div>
              <div class="form-group col-sm-8">
                <label for="card-number">Card Number</label>
                <input name = "cNo" id="card-number" type="text" class="form-control" placeholder="Card Number" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="cvc">CVC</label>
                <input id="cvc" type="text" class="form-control" placeholder="CVC" aria-label="Card Holder" aria-describedby="basic-addon1" required>
              </div>
              <div class="form-group col-sm-12">
              <button class="btn btn-primary btn-block" name="submit"><a href="payment-onsubmit.php" style="text-decoration:none;color:white;">PROCEED</a></button>
                </form>
                
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>