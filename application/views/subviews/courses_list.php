<p class="card-description" style="font-size:30px"><b> Taken Courses</b> </p>
  
   <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Course Description</th>
        <th>Course Short Description</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($courses as $course){ ?>
        <tr>
          <td><?php echo $course['course_name']; ?></td> 
          <td><?php echo $course['course_description']; ?></td> 
          <td><?php echo $course['course_short_desc']; ?></td> 
          <td><a >Update</a></td>
          <td><a >Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>