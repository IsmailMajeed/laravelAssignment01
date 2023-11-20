<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{'css/style4.css'}}">
    <title> Information - BAROQUE - Checkout</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="/node_modules/spur-template/dist/js/spur.js"></script>
</head>
<body>
    <div class="main-container">
        <div class="Foam-shipping">
            <a style="display: block;" href="/"><img src="https://cdn.shopify.com/s/files/1/2277/5269/files/unnamed__1_-removebg-preview.png?29814" alt="BAROQUE" width="50%"></a>
            <a href="/productView">Cart</a>
            <z> > </z>
            <a>Information</a>
            <z> > </z>
            <a style="color: gray;">Shipping</a>
            <z> > </z>
            <a style="color: gray;">Payment</a>
            <div style="display: flex; justify-content: space-between; margin: 20px 0px 20px 0px;">
                <nav style="font-size: larger;">Contact Information</nav>
                <nav>
                    <a>Already have an account? </a><a href="#">Log in</a>
                </nav>
            </div>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="Email">
                    <a>Email me with news and offers</a>
                </div>
                <nav style="font-size: larger; margin: 30px 0px 20px 0px;">Shipping address</nav>
                <select class="custom-control form-control form-custom">
                    <option selected>Country/region</option>
                    <option value="+92">Pakistan</option>
                    <option value="+91">India</option>
                    <option value="+86">China</option>
                </select>
                <div class="form-grid">
                    <input type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="First name">
                    <input type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="Last name">
                    <input style="grid-column-start: 1; grid-column-end: 3;" type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="Address">
                    <input style="grid-column-start: 1; grid-column-end: 3;" type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="Apartment, suit, etc, (optional)">
                    <input type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="City">
                    <input type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="Postal code">
                    <input style="grid-column-start: 1; grid-column-end: 3;" type="number" class="form-control form-custom" id="formGroupExampleInput" placeholder="Phone">
                </div>
                <a>Save this information for next time</a>
                <div class="Shipping-footer">
                    <a href="Baroque3rdPage.html"> < Return to cart</a>
                    <button style="width: 33%; height: 70%;" type="button" class="btn btn-primary">Continue to shipping</button>
                </div>
                <hr style="margin-top: 50px;">
            </form>
            <div style="display: flex; justify-content: space-around; width: 70%;">
                <a href="#">
                    Refund policy
                </a>
                <a href="#">
                    Shipping policy
                </a>
                <a href="#">
                    Privacy policy
                </a>
                <a href="#">
                    Terms of service
                </a>
            </div>
        </div>
        <div class="item-detail">
            <div class="item-header">
                <div id="smallIMG">
                    <img width="70%" height="100%" src="https://cdn.shopify.com/s/files/1/2277/5269/products/53_13_small.jpg?v=1660807457" alt="Product">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <a style="font-weight: 600; font-size: medium;">EMBROIDERED ORGANZA PR-655</a>
                    <a style="font-size: small; color: gray;">XS</a>
                </div>
                <div style="width: 30px;"></div>
                <a>Rs11,490.00</a>
            </div>
            <div id="quantity">1</div>
            <hr style="color: gray;">
            <div id="voucher">
                <input style="height: 100%; font-size: small;" type="text" class="form-control form-custom" id="formGroupExampleInput" placeholder="Gift card or discount code">
                <button style="background-color: rgb(195, 191, 191); border: rgb(195, 191, 191);" type="button" class="btn btn-secondary">Apply</button>
            </div>
            <hr style="color: gray;">
            <div id="subtotal">
                <a>Subtotal</a>
                <b>Rs11,490.00</b>
            </div>
            <div id="subtotal" style="padding-top: 10px;">
                <a>Shipping
                <i class="fa fa-question-circle"></i>
                </a>
                <a>Calculated at next step</a>
            </div>
            <hr style="color: gray;">
            <div id="subtotal">
                <a>Total</a>
                <div>
                    <a>PKR</a>
                    <a style="font-size: x-large;">Rs11,490.00</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>