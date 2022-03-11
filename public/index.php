<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Review.php';
require '../Modules/Contact.php';
require '../Modules/Login.php';
require '../Modules/Profile.php';

session_start();
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";


$Opentimes = getTimes();

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once('../Templates/categories.php');
        break;
    case 'category':
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);

            $name = getCategoryName($categoryId);
            include_once('../Templates/products.php');
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
        break;
    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $name = getCategoryName($product->categoryid);
            $reviews = GetReviews($productId);
            $titleSuffix = ' | ' . $product->name;
            include_once '../Templates/product.php';
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
        break;
    case 'review':
        $productId;
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            if (checkEmpty($_POST) !== true) {
                saveReview(
                    $_POST['name'],
                    $_POST['description'],
                    $_POST['rate'],
                    $_GET['id'],
                    $_SESSION['userid']
                );
            }
        }
        include_once '../Templates/review.php';
        break;
    case 'login':
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (checkEmptyLogin($email, $password) === true) {
            } else {
                login($email, $password);
            }
        }
        include_once('../Templates/login.php');
        break;
    case 'logout':
        header("Location: home");
        session_destroy();
        break;
    case 'register':
        if (isset($_POST['submit'])) {
            var_dump($_POST);
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];

            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = $_POST['password'];
            $pwd_repeat = $_POST['password-repeat'];
            if (checkEmptyRegister($first_name, $last_name, $username, $email,  $password, $pwd_repeat) === true) {
                echo 'please fill in all fields';
            } else if (checkMatchPasswords($password, $pwd_repeat) === false) {
                echo 'passwords do not match';
            } elseif (validateEmail($email) === false) {
                echo 'email is not valid';
            } else {
                echo '<script>console.log(\'success\')</script>';
                addUser($first_name, $last_name, $username, $email, $password);
            }
        }

        include_once "../Templates/register.php";
        break;
    case 'profile':
        if (!isset($_SESSION['userid'])) {
            header("Location: home");
        } else {
            if (isset($_POST['submit'])) {
                $password = $_POST['edit-pwd'];
                $password_repeat = $_POST['repeat-pwd'];
                if (checkMatchPasswords($password, $password_repeat) === true) {
                    editPassword($password, $_SESSION['userid']);
                } else {
                    echo ' test';
                }
            }
        }
        include_once "../Templates/profile.php";
        break;
    case 'contact':
        include_once "../Templates/contact.php";

        break;
    case 'admin':
        if (!isset($_SESSION['userid'])) {
            header("Location: home");
        }
        if (isset($params[2])) {
            switch ($params[2]) {
                case 'manager':
                    // var_dump(getInitialValues(1));
                    if (isset($_POST['submit'])) {
                        if ($_POST['submit'] === 'edit') {

                            $image = $_FILES['image'];
                            $temp_name = $_FILES['image']['tmp_name'];
                            $real_name = $_FILES['image']['name'];
                            $extension = $_FILES['image']['type'];

                            $categoryName = getCategoryName($_POST['category']);
                            $id = $_POST['category'];
                            $name = $_POST['name'];
                            $description = $_POST['description'];
                            $product_id = $_POST['product-id'];

                            move_uploaded_file($temp_name, "../public/img/categories/$categoryName/" . $real_name);

                            editProduct($id, $name, $description, $image['name'], $product_id);
                        } elseif ($_POST['submit'] === 'add') {
                            $image = $_FILES['image'];
                            $temp_name = $_FILES['image']['tmp_name'];
                            $real_name = $_FILES['image']['name'];
                            $extension = $_FILES['image']['type'];

                            $categoryName = getCategoryName($_POST['category']);
                            $id = $_POST['category'];
                            $name = $_POST['name'];
                            $description = $_POST['description'];

                            move_uploaded_file($temp_name, "../public/img/categories/$categoryName/" . $real_name);
                            if (checkEmpty($_POST) === true) {
                                echo 'please fill in all fields';
                            } else {
                                addProduct($id, $name, $description, $image['name']);
                            }
                        }
                        elseif ($_POST['submit'] === 'delete') {
                            var_dump($_POST);
                            $id = $_POST['product-id'];
                            removeProduct($id);
                        }
                    }
                    include_once "../Templates/admin/ProductManager.php";
                    break;
                default:
                    include_once "../Templates/admin/AdminHome.php";
                    break;
            }
        } else {
            include_once "../Templates/admin/AdminHome.php";
        }
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle()
{
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
