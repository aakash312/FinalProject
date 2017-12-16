<?php include 'header.php'; ?>

<style>
    body{
        background: -moz-linear-gradient(45deg, rgba(242, 34, 50, 0.5), rgba(255, 187, 54, 0.6) 100%);
        background: -webkit-linear-gradient(45deg, rgba(242, 34, 50, 0.5), rgba(255, 187, 54, 0.6) 100%);
        background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
    }
</style>

        <?php //$array = get_object_vars($data) ?>

        <?php $string='https://web.njit.edu/~ab997/FinalP/index.php?page=accounts&action=update' ?>


<center>

        <form action=<?php echo $string ?> method="POST">



            <div class="container">
                <label><b>email</b></label>
                <input type="text" value="<?php echo $array['email']?>" name="email" >

                <br>

                <label><b>firstname</b></label>
                <input type="text" value="<?php echo $array['fname']?>" name="fname" >

                <br>

                <label><b>lastname</b></label>
                <input type="text" value="<?php echo $array['lname']?>" name="lname" >

                <br>

                <label><b>phone</b></label>
                <input type="text" value="<?php echo $array['phone'] ?>" name="phone" >

                <br>

                <label><b>birthday</b></label>
                <input type="text" value="<?php echo $array['birthday']?>" name="birthday" >

                <br>

                <label><b>gender</b></label>
                <input type="text" value="<?php echo $array['gender']?>" name="gender" >

                <br>

                <label><b>password</b></label>
                <input type="text" value="<?php echo $array['password'] ?>" name="password" >
                <br>

                <button type="submit">Update</button>
            </div>

            </center>

        </form>


