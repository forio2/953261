<br><br>
<table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">
                Name Topic
            </th>
            <th scope="col" >
                Detail
            </th>
            <th scope="col">
                Name
            </th>
        </tr>
        </thead>
            <tbody>
                <tr>
                    <td>
                      <?php 
                        echo $topicQuestion;
                      ?>
                    </td>
                    <td>
                      <?php 
                        echo $detailQuestion; 
                      ?>
                    </td>
                    <td>
                      <?php echo $nameQuestion; ?>
                    </td>
                </tr>
            </tbody>
</table>
<form action="add_answer.php" method="POST">
<div class="container">
    <input type="hidden" name="pri" value="<?php $priQuestion ?>"> 
    <button type="submit" class="btn btn-primary">Answer</button>
    <button type="button" class="btn btn-primary" onclick="window.location.href = 'show_question.php'">Back</button>
</div>
</form>