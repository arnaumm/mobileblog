<div class="row">

    <div class="span8">

        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>

        <?php if($query):foreach($query as $post):?>

        <div class="post">

            <h4><?php echo $post->entry_name;?>

                <?php if($this->ion_auth->logged_in() && $this->ion_auth->is_admin()):?>

                    <span class="admin-buttons">

                        <?php echo anchor('blog/delete/'.$post->entry_id, 'delete', array('title' => 'delete', 'class' => 'btn btn-danger btn-small pull-right')); ?>
                        <p class="pull-right">&nbsp;</p>
                        <?php echo anchor('blog/edit/'.$post->entry_id, 'edit', array('title' => 'edit', 'class' => 'btn btn-success btn-small pull-right')); ?>

                    </span>

                <?php endif; ?>

            </h4>

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