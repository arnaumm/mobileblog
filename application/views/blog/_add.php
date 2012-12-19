<div class="row">

    <div class="span8">

        <h3>Write a new post</h3>
        <?php echo validation_errors(); ?>
        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>

        <?php echo form_open('blog/add');?>

            <p>Title:<br />
                <?php echo form_input($entry_name); ?>
            </p>

            <p>Body:<br />
                <?php echo form_textarea($entry_body); ?>
            </p>

            <?php echo form_submit($submit); ?>

        <?php echo form_close();?>

    </div>