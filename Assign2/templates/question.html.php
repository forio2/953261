<br>
<h2>All topics</h2>
        <?php
        foreach($table as $x){
        ?>
            <form id="send" action="show_detail.php" method="POST">
                <?php echo "$x[0]. $x[1] By $x[3] ($x[4])";?>
                <input type="hidden" name="priQuestion" value="<?php echo $x[0]; ?>">
                <input type="hidden" name="topicQuestion" value="<?php echo $x[1]; ?>">
                <input type="hidden" name="detailQuestion" value="<?php echo $x[2]; ?>">
                <input type="hidden" name="nameQuestion" value="<?php echo $x[3]; ?>">
                <button type="submit" class="btn btn-primary">Show</button>
            </form>
            <br><br>
        <?php
        }
        ?>