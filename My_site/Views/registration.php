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
        <form method="post" class="form">
            <div class="column">
                <div class="input-box">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter Username" required />
                </div>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" name="mobile" placeholder="Enter phone number" required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" name="birth" placeholder="Enter birth date" required />
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
                <input type="text" name="address" placeholder="Enter street address" required />
                <div class="column">
                    <div class="select-box">
                        <select name="country" id="" required>
                            <option hidden>Country</option>
                            <option>America</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Nepal</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="state" id="" required>
                            <option hidden>State</option>
                            <option>America</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Nepal</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="city" id="">
                            <option hidden>City</option>
                            <option>America</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Nepal</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <input type="password" name="pass" placeholder="Set your Password" required />
                    <input type="password" name="repass" placeholder="Confirm Password" required />
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