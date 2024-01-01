<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?php echo $this->assetsurl; ?>/css/formDesign.css">
    <script src="<?php echo $this->assetsurl; ?>lib/jquery.js"></script>
    <script src="<?php echo $this->assetsurl; ?>dist/jquery.validate.js"></script>

</head>

<body>
    <section class="container">
        <header><b>Registration Form</b></header>
        <form method="post" class="form" id="regform" enctype="multipart/form-data">
            <div class="column">
                <div class="input-box">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter Username" />
                </div>
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="tel" id="mobile" name="mobile" onblur="mobilevalid()" placeholder="Enter phone number"
                        required />
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
                    <input class="prof" type="file" name="profile_pic" required />
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
                        <select name="country" id="country" onchange="fetchstate(this.value)">
                            <option hidden>Country</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="state" id="state" onchange="fetchcity(this.value)">
                            <option hidden>State</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="city" id="city">
                            <option hidden>City</option>
                        </select>
                    </div>
                </div>
                <div class="column">
                    <input type="password" id="pass" name="pass" placeholder="Set your Password" />
                    <input type="password" id="repass" name="repass" placeholder="Confirm Password" onblur="check()"/>
                </div>
            </div>
            <div class="input-box">
                <div class="btn">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
            <p style="text-align:center; margin-top:20px">Have already an account.?  
            <a href="login" class="fw-bold text-body"><u>Login here</u></a></p>
        </form>
        <script>
            var check = function () {
                if (document.getElementById('pass').value != document.getElementById('repass').value) {
                    alert("Please Enter Same Password.");
                    document.getElementById('pass').value = "";
                    document.getElementById('repass').value = "";
                }
            }

            function mobilevalid() {
                var mob = document.getElementById('mobile').value;
                if (mob.length !== 10) {
                    alert("Please Enter valid Mobile Number.");
                    document.getElementById('mobile').value = "";
                }
            }

            $().ready(function () {
                $("#regform").validate();
                fetchcountries()
            })
            function fetchcountries() {
                fetch("http://localhost/My_site/getcountrys").then((res) => res.json()).then((kaipan) => {
                    console.log(kaipan);
                    let optioncountry = '<option hidden>Country</option>'
                    kaipan.forEach(element => {
                        // console.log(element.country_name);
                        optioncountry += `<option value="${element.country_id}">${element.country_name}</option>`
                    });
                    // console.log(optioncountry);
                    $("#country").html(optioncountry);
                })
            }
            function fetchstate(id) {
                fetch(`http://localhost/My_site/getstatesbycountry?countryid=${id}`).then((res) => res.json()).then((kaipan) => {
                    console.log(kaipan);
                    let optionstate = '<option hidden>state</option>'
                    kaipan.forEach(element => {
                        optionstate += `<option value="${element.state_id}">${element.state_name}</option>`
                    });
                    $("#state").html(optionstate);
                })
            }
            function fetchcity(id) {
                fetch(`http://localhost/My_site/getcitysbystate?stateid=${id}`).then((res) => res.json()).then((kaipan) => {
                    console.log(kaipan);
                    let optioncity = '<option hidden>city</option>';
                    kaipan.forEach(element => {
                        optioncity += `<option value="${element.city_id}">${element.city_name}</option>`
                    });
                    $("#city").html(optioncity);
                })
            }
        </script>
    </section>
</body>

</html>