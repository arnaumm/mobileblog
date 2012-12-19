<div class="row">

    <div class="span8">

        <?php if($post):foreach($post as $post):?>

            <h3>Editing post</h3>
            <?php echo validation_errors(); ?>
            <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>

            <?php echo form_open('blog/edit');?>

                <?php echo form_hidden('entry_id', $post->entry_id); ?>

                <p>Title:<br />
                    <?php echo form_input($entry_name); ?>

                </p>
                <p>Body:<br />
                    <?php echo form_textarea($entry_body); ?>
                </p>

                <?php echo form_submit($submit); ?>

            <?php echo form_close();?>

        <?php endforeach; ?>

        <?php endif; ?>

    </div>