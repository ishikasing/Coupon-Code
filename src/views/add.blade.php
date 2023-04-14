
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>ADD Coupon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"> </script>
</head>
<body>
<div class="album mt-5 ">
<div class="row h-100 justify-content-center align-items-center">
<div class="card border-secondory " style="max-width: 35rem; padding:20px ;">
    <h1 class="text-center">Add Coupon!</h1>
<div class="card-body">



<form action="insert" method="POST">
@csrf

        <div class="form-group mt-3">
        <label for="coupon_type" class="labal-control"><b>Coupon Change</b></label>
        <select name="coupon_type" class="form-control" required>
        <option disabled selected value="">Selected</option>
        <option value="Mobile">Mobile</option>
        <option value=" Laptop">Laptop</option>
        <option value="Tablet">Tablet</option>
        <option value=" Smart watch">Smart watch</option>
        </select>
        </div>

        <div class="form-group mt-3">
        <label for="discount_amount" class="labal-control"><b> Discount Amount</b></label>
        <input type="text" name="discount_amount" class="form-control" required>
        </div>

        <div class="form-group mt-3">
        <label for="exprie_date" class="labal-control"><b> Valid Upto </b></label>
        <input type="date" name="exprie_date" class="form-control"required>
        </div>


            <div class="form-group mt-3">
            <label for="coupon_name" class="labal-control"><b>Coupon Name </b></label>
            <input type="text" name="coupon_name" class="form-control"required>
            </div>

            <div class="form-group mt-3">
            <label for="discription" class="labal-control"><b> Discription</b></label>
            <input type="text" name="discription" class="form-control"required>
            </div>

            <div class="form-group mt-3">
            <label for="coupon_code" class="labal-control"><b>Coupon Code</b></label>
            <input type="text" name="coupon_code" class="form-control"required>
            </div>



    <div class="form-group mt-3">
            <button type="submit" class="btn btn-success mt-4 ">Submit</button>
            </div>
</form>
</div>
 </div>
</div>
</div>


<script>
$(document).ready(function() {
    $('select[name="coupon_type"], input[name="discount_amount"]').on('change', function() {
        // Get the values of the "coupon_type" and "coupon_value" fields
        var couponType = $('select[name="coupon_type"]').val();
        var discount_amount = $('input[name="discount_amount"]').val();

        // Make an AJAX request to the "generateCouponCode" controller function
        $.ajax({
            type: 'POST',
            url: '{{ route("generateCouponCode") }}',
            data: {
                coupon_type: couponType,
                discount_amount: discount_amount,
            },
            success: function(response) {
                // Update the "coupon_code" field with the generated coupon code
                $('input[name="coupon_code"]').val(response.coupon_code);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error generating coupon code:', errorThrown);
            }
        });
    });
});

</script>
</body>
</html>
