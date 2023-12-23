<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo $this->assetsurl; ?>/css/formDesign.css">
    <title>Registration</title>
</head>

<body>
    <section class="container">
        <header><b>Registration Form</b></header>
        <form method="post" class="form" enctype="multipart/form-data">
            <div class="column">
                <div class="input-box">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter Username" />
                </div>
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" name="mobile" placeholder="Enter phone number" />
                </div>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" name="birth" placeholder="Enter birth date" />
                </div>
                <div class="input-box">
                    <label>Upload Profile photo</label>
                    <input class="prof" type="file" name="profile_pic" />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" value="Male" name="gender" checked />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" value="Female" name="gender" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" value="prefer not to say" name="gender" />
                        <label for="check-other">prefer not to say</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter street address" />
                <div class="column">
                    <div class="select-box">
                        <select name="country" id="">
                            <option hidden>Country</option>
                            <?php
                            foreach ($countrys['data'] as $key => $value) { ?>
                                <option value="<?php echo "$value->country_name"; ?>">
                                    <?php echo "$value->country_name"; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="state" id="">
                            <option hidden>State</option>
                            <?php
                            foreach ($states['data'] as $key => $value) { ?>
                                <option value="<?php echo "$value->state_name"; ?>">
                                    <?php echo "$value->state_name"; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="city" id="">
                            <option hidden>City</option>
                            <?php
                            foreach ($citys['data'] as $key => $value) { ?>
                                <option value="<?php echo "$value->city_name"; ?>">
                                    <?php echo "$value->city_name"; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <input type="password" name="pass" placeholder="Set your Password" />
                    <input type="password" name="repass" placeholder="Confirm Password" />
                </div>
            </div>
            <div class="input-box">
                <div class="btn">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </section>
</body>

</html>