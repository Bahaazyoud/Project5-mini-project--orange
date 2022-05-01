<?php

function component($productname,$productprice,$productimg,$productid){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"card\">
            <div>
                <img src=\"$productimg\" class=\"img-fluid\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$productname</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text\">
                    quick example
                </p>
                <h5>
                    <small><s class=\"text-secondary\">$599</s></small>
                    <span class=\"price\">$productprice</span>
                </h5>
                <button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3\">Add to cart<i class=\"fas fa-shopping-cart\"></i></button>
                <input type='hidden' name='product_id' value='$productid'>
            </div>
        </div>
    </form>
</div>";
echo $element;
}