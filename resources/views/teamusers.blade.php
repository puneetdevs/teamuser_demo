<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users-Team</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 150vh;
                margin: 20px;
            }

            .full-height {
                height: 150vh;
            }

            .flex-center {
                /*align-items: center;*/
                /*display: flex;*/
                /*justify-content: center;*/
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /*text-align: center;*/
            }

            .title {
                font-size: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                /*margin-bottom: 30px;*/
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    <!-- User & Team Details -->
                </div>
                <table class="table table-striped ">
            <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Teams</th>
                    </thead>
<?php foreach ($teams as $users): ?>

<tr>
<td> <?php echo  $users->id; ?></td>
<td> <?php  echo $users->first_name.''.$users->last_name; ?></td>
<!-- <td> <?php  //echo $users->fist_name; ?></td> -->
<!-- <td> <?php  //dd($users) ?></td> -->
<?php $team_string=''; ?>
    <?php foreach ($users->teamuser_user as $user_teams): ?>

        <?php $team_string .=$user_teams->get_teams->name.","; ?>
      
    <?php endforeach ?>
   <td> <?php echo rtrim($team_string,","); ?></td>
    </tr>
<?php endforeach ?>


</table>

<?php //dd($teams); ?>
            </div>
        </div>
    </body>
</html>
