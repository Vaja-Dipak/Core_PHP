<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="admindahboard">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Update</li>
            </ol>
        </nav>
        <!-- chatting -->
        <div class="data-tables">
            <div class="col-md-6 my-0 mx-auto">
                <div class="card">
                    <div class="card-header text-center text-primary">
                        <h3><STRong> UPDATE USER </STRong></h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="updateuserdata" enctype="multipart/form-data">
                            <table class="table">
                                <input type="hidden" Name="id" value="<?php echo $updtsel['data'][0]->id; ?>">
                                <tr>
                                    <td class="p-2">User Name</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="username"
                                            value="<?php echo $updtsel['data'][0]->username; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Email</td>
                                    <td class="p-2"><input type="email" class="form-control" Name="email"
                                            value="<?php echo $updtsel['data'][0]->email; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Mobile</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="mobile"
                                            value="<?php echo $updtsel['data'][0]->mobile; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Birth</td>
                                    <td class="p-2"><input type="date" class="form-control" Name="birth"
                                            value="<?php echo $updtsel['data'][0]->birth; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Gender</td>
                                    <td>
                                        <div class="gender-option">
                                            <div class="gender">
                                                <input type="radio" <?php if ($updtsel['data'][0]->gender == "Male") {
                                                    echo "checked";
                                                } ?> id="check-male" value="Male" name="gender" />
                                                <label for="check-male">male</label>&emsp;&emsp;
                                                <input type="radio" <?php if ($updtsel['data'][0]->gender == "Female") {
                                                    echo "checked";
                                                } ?> id="check-female" value="Female"
                                                    name="gender" />
                                                <label for="check-female">Female</label>&emsp;&emsp;
                                                <input type="radio" <?php if ($updtsel['data'][0]->gender == "prefer not to say") {
                                                    echo "checked";
                                                } ?> id="check-other"
                                                    value="prefer not to say" name="gender" />
                                                <label for="check-other">prefer not to say</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">Address</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="address"
                                            value="<?php echo $updtsel['data'][0]->address; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">City</td>
                                    <td class="p-2">
                                        <select class="form-control" name="city" id="">
                                            <?php foreach ($citys['data'] as $key => $value) { ?>
                                                <option <?php if ($updtsel['data'][0]->city == $value->city_name) {
                                                    echo " selected ";
                                                } ?> value="<?php echo "$value->city_name"; ?>">
                                                    <?php echo "$value->city_name"; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">State</td>
                                    <td class="p-2">
                                        <select class="form-control" name="state" id="">
                                            <?php foreach ($states['data'] as $key => $value) { ?>
                                                <option <?php if ($updtsel['data'][0]->state == $value->state_name) {
                                                    echo " selected ";
                                                } ?> value="<?php echo "$value->state_name"; ?>">
                                                    <?php echo "$value->state_name"; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">Country</td>
                                    <td class="p-2">
                                        <select class="form-control" name="country" id="">
                                            <?php foreach ($countrys['data'] as $key => $value) { ?>
                                                <option <?php if ($updtsel['data'][0]->country == $value->country_name) {
                                                    echo " selected ";
                                                } ?> value="<?php echo "$value->country_name"; ?>">
                                                    <?php echo "$value->country_name"; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">Password</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="password"
                                            value="<?php echo $updtsel['data'][0]->password; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Profile</td>
                                    <td>
                                        <div class="text-center d-flex align-items-center">
                                            <img src="<?php echo $this->assetsurl . "uploads/" . $updtsel['data'][0]->profile_pic; ?>"
                                                class="rounded float-left img-thumbnail" alt="Profile"
                                                id="profpic" height="100px" width="100px">
                                            <input class="px-2" type="file" name="profile_pic" id="prof" />
                                            <script>
                                                prof.onchange = evt => {
                                                    const [file] = prof.files
                                                    if (file) {
                                                        profpic.src = URL.createObjectURL(file)
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <input type="submit" Name="submit" value="Update"
                                            class="mx-2 px-5 py-1 text-light rounded bg-primary">
                                        <input type="submit" Name="back" value=" Back "
                                            class="mx-2 px-5 py-1 text-light rounded bg-primary">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //chatting -->
    </div>
    <!-- //content -->
</div>
<!-- main content end-->