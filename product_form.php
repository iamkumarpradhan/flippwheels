<?php 
include_once('./template/header.php');
?>
<style>
.container {
    width: 40%;
    /* height:100vh; */
    background-color: #fff;
    padding: 25px 30px;
    margin-bottom:25px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    left:65%;
    transform:translate(65%);
}
.container .input-box{
    margin:1rem;
    display:block;
}
.container input[type="text"],
.container input[type="number"],
.container input[type="date"],
.container input[type="password"]{
    padding:0.5rem;
    margin:0.5rem;
    width:95%;
    background:#ddd;
    border:none;
}
label,
p{
  margin-left:0.5rem;
}
.container input[type="submit"]{
  padding:10px;
  margin-top:10px;
  width:150px;
  background:green;
  border:none;
  color:#fff;
  border-radius:5px 5px 5px 5px;
}
.container input[type="submit"]:hover{
  background:gray;
  color:#fff;
  cursor:pointer;
}
</style>
<div class="container">
    <h1>Hello seller, place your ads right here!</h1>
        <form action="product_submission.php" method="POST" enctype="multipart/form-data">
            <label>Product Image</label><br><br>
            <input type="file" name="upfile"><br><br>
            <label>Product title</label><br>
            <input type="text" class="txt" name="pname" placeholder="Product title" required><br>
            <label>Product Registered Number</label><br>
            <input type="text" class="txt" name="pnumber" placeholder="Product Number" required>
            <label>Descriptions</label><br>
            <input type="text" class="txt" name="descriptions" placeholder="Descriptions" required><br>

            <p>Is price negotiable?</p>
            <input type="radio" id="price" name="negotiable" value="yes">Yes<br>
            <input type="radio" id="price" name="negotiable" value="no">No<br>

            <br>
            <label>Make Year</label><br>
            <input type="text" class="txt" name="makeyear" placeholder="products manufacturing year" required>

            <br>
            <label>Color</label><br>
            <input type="text" class="txt" name="color" placeholder="products Color type" required>

            <br>
            <label>Kilometers driven</label><br>
            <input type="text" class="txt" name="kmdriven" placeholder="products driven in Kiolometers" required>

            <br>
            <p>Fuels used</p>
            <input type="radio" id="fuels" name="fuels" value="petrol">
            Petrol<br>
            <input type="radio" id="fuels" name="fuels" value="diesel">
            Diesel<br>
            <input type="radio" id="fuels" name="fuels" value="electric">
            Electric<br>
            <input type="radio" id="fuels" name="fuels" value="no">
            None<br>

            <br>
            <label>Engine in CC</label><br>
            <input type="text" class="txt" name="engineincc" placeholder="Products engine in CC">

            <br>
            <label>Product used for(months/years)</label><br>
            <input type="text" class="txt" name="productused" placeholder="how many months or years you have used?" required>


            <Label>Select category</Label><br>
            <select name="type" required>
            <option value="two">Two-wheelers</option>
            <option value="three">Three-Wheelers</option>
            <option value="four">Four-Wheelers</option>
            </select>

            <br>
            <p>Home delivery service</p>
            <input type="radio" id="delivery" name="delivery" value="yes">Availiable<br>
            <input type="radio" id="delivery" name="delivery" value="no">Sorry! Not availiable<br>

            <br>
            <label>Offered Price</label><br>
            <input type="text" class="txt" name="priceoffered" placeholder="Eg:Rs.100" required><br>

            <input type="submit" name="submit" class="btn-btn-success" value="Submit">
        </form>
</div>
<?php include_once('./template/footer.php'); ?> 

