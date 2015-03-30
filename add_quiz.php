<?php
include('includes/header.html');

?>

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Quiz</h1>
        <form action="process_quizAdd.php" method="post">
            <div class="form-group">
                <label for="question">Question</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here">
            </div>
			 <div class="form-group">
                <label for="type">Question</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Enter your type here">
            </div>
			<div class="form-group">
                <label for="comment">Question Comment</label>
                <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter your question  comment here">
            </div>
            <div class="form-group">
                <label for="key">key</label>
                <input type="text" class="form-control" id="correct_answer" name="key" placeholder="Enter the key here">
            </div>
            <div class="form-group">
                <label for="mark">mark</label>
                <input type="text" class="form-control" id="wrong_answer1" name="mark" placeholder="mark">
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>

        </form>
    </div>
     </div>
    <?php include('includes/footer.html') ?>