<div class="row">

    <div class="span8">

        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>

        <?php if($query):foreach($query as $post):?>

        <div class="post">

            <h4><?php echo $post->entry_name;?></h4>

            <p><i><?php echo $post->entry_date;?></i></p>
            <?php echo substr($post->entry_body, 0, 400)." ...";?>

            <div class="buttons">

                <?php echo anchor('blog/read/'.$post->entry_id, 'Read More!', array('title' => 'Read More!', 'class' => 'btn pull-right')); ?>

            </div>

        </div>

        <?php endforeach; else:?>
        <h4>No entry yet!</h4>

        <?php endif;?>

    </div>