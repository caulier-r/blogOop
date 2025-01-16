<?php
    require_once("includes/header.php");
    require_once("includes/sidebar.php");
    require_once("includes/content-top.php");
    echo "ophalen van alle users";

    ?>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>username</th>
                        <th>password</th>
                        <th>first name</th>
                        <th>last name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $user = new User();
                            $result = $user->find_all_users();
                            if(mysqli_num_rows($result)>0) {
                            while($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[username]</td>
                                    <td>$row[password]</td>
                                    <td>$row[first_name]</td>
                                    <td>$row[last_name]</td>
                                </tr>
                            
                            ";
                            }
                            }else {
                            echo "0 results";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

<?php
    require_once("includes/widget.php");
    require_once("includes/footer.php");
?>