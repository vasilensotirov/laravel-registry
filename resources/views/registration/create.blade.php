@extends('layouts.default')

@section('content')
    <h2 style="text-align: center ">Register</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="first_name">First name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>

        <div class="form-group">
            <label for="last_name">Last name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number:</label>
            <input type="number" class="form-control" id="phone_number" name="phone_number">
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <?php
        if (isset($users)) {
            ?>
                            <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Date of Birth</th>
                    </tr>
                    </thead>
                                <?php
            foreach ($users as $user) {
                ?>
                                <tbody>
                                <tr>
                                    <th scope="row"><?= $user['id'] ?></th>
                                    <td><?= $user['first_name'] ?></td>
                                    <td><?= $user['last_name'] ?></td>
                                    <td><?= $user['phone_number']?></td>
                                    <td><?= $user['date_of_birth']?></td>
                                </tr>
                                </tbody>
    <?php
    }
        }
    ?>
                            </table>
@stop
