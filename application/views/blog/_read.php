<div class="row">

    <div class="span8">

        <?php if($post):foreach($post as $post):?>

        <div class="post">

            <h4><?php echo $post->entry_name;?></h4>
            <p><i><?php echo $post->entry_date;?></i></p>
            <?php echo $post->entry_body;?>

        </div>

        <?php endforeach; ?>

        <?php endif; ?>

    </div>