<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>

</style>
<body>
<div id="pagination">
    <div id="container">
        <div id="body">
            <div class="wy-table-responsive">
                <table class="table">
                    <tr>
                        <td>PK</td>
                        <td>Name</td>
                        <td>Edit</td>
                        <td>Del</td>
                    </tr>
                    <tbody>
                    <?php
                    foreach ($results as $data) { ?>
                        <tr>
                            <td><?php echo $data->ctp_id ?></td>
                            <td><?php echo $data->ctp_name ?></td>
                            <td><a @click="setedit(<?php echo $data->ctp_id ;?>);">edit</a></td>
                            <td></td>
                        </tr>
                    <?php }

                    ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4" align="center">
                    <p><?php echo $links; ?></p>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    new Vue({
        el : "#pagination",
        data : {

        },
        methods : {
            setedit : function(id)
            {
                alert(id);
            }
        }

    });
</script>
</body>
</html>