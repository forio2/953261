<br><br>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="inputTopicName">Topic name: </label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $table[0] ; ?>">
        </div>
        <div class="form-group">
            <label for="ansTopicDetail">Answer detail:</label>
            <textarea class="form-control" name="ansTopicDetail" rows="3"></textarea>
        </div>
        <div class="form-group">
        <label for="inputUserName">Username:</label>
            <input type="text" class="form-control" name="inputUserName" placeholder="Username">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href = 'show_question.php'">Back</button>
    </form>
</div>