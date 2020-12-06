<p class="card-description" style="font-size:30px"><b> My All Courses</b> </p>
<div style="margin-bottom: 30px;">
    <a href="<?php echo MAIN; ?>Teacher_courses/add_all_course" >Add Course</a>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Course Name</th>
    </tr>
    </thead>
    <tbody id="myTable">
    <?php foreach ($courses as $course){ ?>
        <tr>
            <td><?php echo $course['course_name']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>