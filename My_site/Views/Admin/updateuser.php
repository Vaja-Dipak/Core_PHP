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
                        <form method="post" enctype="multipart/form-data">
                            <?php
                            // echo "<pre>";
                            // print_r($updtsel['data']);
                            // echo "</pre>";
                            foreach ($updtsel['data'] as $key => $value) {
                                // echo $value->username;

                            }
                            ?>
                            <table class="table">
                                <input type="hidden" Name="id" value="<?php echo $value->id; ?>">
                                <tr>
                                    <td class="p-2">User Name</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="username"
                                            value="<?php echo $value->username; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Email</td>
                                    <td class="p-2"><input type="email" class="form-control" Name="email"
                                            value="<?php echo $value->email; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Mobile</td>
                                    <td class="p-2"><input type="number" class="form-control" Name="mobile"
                                            value="<?php echo $value->mobile; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Birth</td>
                                    <td class="p-2"><input type="date" class="form-control" Name="birth"
                                            value="<?php echo $value->birth; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Gender</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="gender"
                                            value="<?php echo $value->gender; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Address</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="address"
                                            value="<?php echo $value->address; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Country</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="country"
                                            value="<?php echo $value->country; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">State</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="state"
                                            value="<?php echo $value->state; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">City</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="city"
                                            value="<?php echo $value->city; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="p-2">Password</td>
                                    <td class="p-2"><input type="text" class="form-control" Name="password"
                                            value="<?php echo $value->password; ?>"></td>
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