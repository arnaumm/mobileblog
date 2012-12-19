<div class="span4" xmlns="http://www.w3.org/1999/html">

        <div class="row">

            <div class="widget span4">

                <h5>MOBILE IDENTIFICATION</h5>
                <p>Your mobile is:</p>
                <p><b><?php echo $mobile_brand.' '.$mobile_model; ?></b></p>

            </div>

            <div class="widget span4">

                <h5>USER MENU</h5>

                <?php if (!$this->ion_auth->logged_in()) {?>
                <?php $username = 'Guest'; }?>

                <?php if ($this->ion_auth->logged_in()) { $username = $user->username; } ?>

                <p>Welcome Home, <b><?php echo $username;?></b></p>

                <ul>

                    <li><?php echo anchor('blog/add', 'Create a new post', 'title="Create a new post"'); ?></li>

                    <?php if (!$this->ion_auth->logged_in()):?>

                        <li><?php echo anchor('auth/login', 'Login', 'title="Login"'); ?></li>

                    <?php else: ?>

                        <li><?php echo anchor('blog/logout', 'Logout', 'title="Logout"'); ?></li>

                    <?php endif; ?>

                </ul>

            </div>

            <div class="widget span4">

                <h5>LATEST POSTS</h5>

                <ul>
                    <?php if($query):foreach($query as $post):?>

                        <li><?php echo anchor('blog/read/'.$post->entry_id, '<b>'.$post->entry_name.'</b>  <i>'.$post->entry_date).'</i>'; ?></li>

                    <?php endforeach; else:?>

                </ul>

                <h4>No entry yet!</h4>

                <?php endif;?>

            </div>

        </div>

    </div>

</div> <!-- row -->

</div> <!-- container -->

</body>
</html>