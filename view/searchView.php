<?php $title = "Search";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php  ob_start();
require_once "models/model.php";
require_once  "createSession.php";

$search = "";
$search_err = "";
$sqlError = "";
$table = "";

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php?action=login");
    exit;
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if search is empty
    if (empty(trim($_POST["search"]))) {
        $search_err = "Please enter stuff.";
    } else {
        $search = trim($_POST["search"]);
    }

    $sql = "SELECT name,  IF(is_free = true, 'yes', 'no') as is_free FROM `stuff` WHERE name LIKE '%".$search."%'";

    // a%' UNION SELECT username, PASSWORD FROM users #
    try {
        if ($result = $mysqli->query($sql)) {
            while ($row = mysqli_fetch_array($result)) {
                //Creates a loop to loop through results
                //$table .= "<tr>";
                //foreach ($row as $c){
                //    $table .= "<td>". $c ."</td>";
                //}
                //$table .= "<tr>";
                $table .= "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }
            $result->close();
        }
        $sqlError = $mysqli->error;
    } catch (Exception $e){
        $sqlError = $e;
        $sqlError .= $mysqli->error;
    }


}

?>

<div class="w3-container">
    <div class="wrapper">
        <h2>Search stuff</h2>
        <p>
            To find stuff please fill the line with it.<br>
            (Ex : camera, microphone, etc etc etc)
        </p>
        <form action="<?php echo $_SERVER["PHP_SELF"] . "?action=search"; ?>" method="post">
            <div class="form-group">
                <label>Looking for :</label>
                <input type="text" name="search" class="form-control" value='<?php echo $search; ?>'>
                <span class="help-block"><?php echo $search_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Search">
            </div>
        </form>
        <table class="w3-table-all w3-hoverable w3-card-4">
            <tr>
                <th>
                    Stuff name
                </th>
                <th>
                    Is free ?
                </th>
            </tr>
            <?php
                echo $table;
            ?>
        </table>
        <span class="help-block"><?php echo $sqlError; ?></span>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require("view/template.php"); ?>
