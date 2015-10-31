<!--including header sub template-->
<?php include "includes/header.php" ?>

<!-- BEGIN PAGE CONTENT -->
<div class="page-content">
    <div class="container-fluid">

        <!-- Begin page heading -->
        <h1 class="page-heading">Online Appraisal Register</h1>
        <!-- End page heading -->

        <div class="jumbotron white-bg jumbotron-sm">

            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <img class="student_profile square" src="<?php echo $results['student']->photo_url; ?>" alt="Shakirullahi OP">
                </div><!-- /.ol-xs-6 col-md-3 -->

                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item"><b><?php echo $results['student']->name; ?></b></li>
                        <li class="list-group-item"><b>Admission No: </b> <?php echo $results['student']->admission_no; ?></li>
                        <li class="list-group-item"><b>Branch: </b> <?php echo $results['student']->branch; ?></li>
                        <li class="list-group-item"><b>Semester: <?php echo $results['student']->semester; ?></b></li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Batch: </b> <?php echo $results['student']->batch; ?></li>
                        <li class="list-group-item"><b>Date of Birth: </b> <?php echo $results['student']->dob; ?></li>
                        <li class="list-group-item"><b>Address: </b> <?php echo $results['student']->address; ?></li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Begin static table -->
        <h4 class="small-title">APPRAISAL REGISTER HISTORY</h4>
        <div class="the-box full no-border">
            <div class="table-responsive">
                <table class="table table-th-block">
                    <thead>
                    <tr>
                        <th style="width: 30px;">No</th>
                        <th>Date & Time</th>
                        <th>Nature of Complaint</th>
                        <th>Action Taken</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $count = 1;
                    foreach($results['complaints'] as $item){
                        $status = "";
                        if($item->status == 0){
                            $status = "<span class='label label-danger'>Tutor verification pending</span>";
                        }
                        else if($item->status == 1){
                            $status = "<span class='label label-danger'>HOS verification pending</span>";
                        }
                        else{
                            $status = "<span class='label label-success'>Verified</span>";
                        }
                        echo "<tr>";
                        echo "<td>".$count."</td>";
                        echo "<td>".$item->date." ".$item->time."</td>";
                        echo "<td>".$item->complaint."</td>";
                        echo "<td>".$item->action_taken."</td>";
                        echo "<td>".$status."</td>";

                        echo "<tr>";
                        $count++;
                    }
                    ?>

                    </tbody>
                </table>
            </div><!-- /.table-responsive -->
        </div><!-- /.the-box -->

        </div>
        </div>
<br><br>
    </div><!-- /.container-fluid -->

    <!--including footer sub template-->
    <?php include "includes/footer.php" ?>
