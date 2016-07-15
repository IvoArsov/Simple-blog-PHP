<?php $this->title = 'Create new post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" disabled
           value="<?=htmlspecialchars($this->post['title'])?>"/>
    <div>Content:</div>
    <textarea name="post_content" rows="10" disabled><?=htmlspecialchars($this->post['content'])?></textarea>
    <div><input type="submit" value="Delete"/>
        <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>