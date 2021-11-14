# Project_CNPM
All changes in folder "Update 14/11" (update only changed files) <br/>

Details: <br/>
./Controllers: <br/>
    CartController.php: <br/>
        New: addButton(), minusButton(), removeCart() <br/>
    DishController.php: <br/>
        New: addDish(), removeDish(), editDish() <br/>
    ManageController.php: <br/>
        New: addDish(), editDish() <br/>
./Models: <br/>
    CartDB.php: <br/>
        New: getCart()
    DishDB.php:
        New: addDish(), getImg(), removeDish(), editDish()
./public/css:
    register.css:
        New: .selectt
./Views/Page:
    AddDish.php: new file
    Cart.php:
        New: Button +, -, x in line 18, 20, 21
    Dish.php:
        New: Button "Edit" and x in line 19 - 22
    EditDish.php: new file
    Manage.php:
        New: Button "Add New Dish" in line 6 - 8
