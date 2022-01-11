<?php require_once"inc/header.php"?>

<style type="text/css">
   table, th, td {
border-style:solid;
border-width:1px;
border-color:black;
}
</style>

<div class="wrapper_payments">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
           
                    <?php
                    $search = $_POST['search'];
                    $column = $_POST['column'];
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM policyuseraccount where $column like '%$search%'";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Membership Number</th>";
                                        echo "<th>Given name</th>";
                                        echo "<th>Email address</th>";
                                        echo "<th>Telephone number</th>";
                                        echo "<th>Service</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['givenname'] . "</td>";
                                        echo "<td>" . $row['emailaddress'] . "</td>";
                                        echo "<td>" . $row['telephonenumber'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>


<?php require_once"inc/footer.php"?>

