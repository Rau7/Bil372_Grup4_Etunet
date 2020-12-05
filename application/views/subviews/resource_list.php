<p class="card-description" style="font-size:30px"><b> Resources</b> </p>
<div style="margin-bottom: 30px;">
    <a href="<?php echo MAIN; ?>Teacher_resources/add_resources" >Add Resources</a>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Resources Name</th>
        <th>Resource URL</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody id="myTable">
    <?php foreach ($resources as $resource){ ?>
        <tr>
            <td><?php echo $resource['resource_short_desc']; ?></td>
            <td><a href="<?php echo $resource['resource_file']; ?>"><?php echo $resource['resource_file']; ?></a></td>
           <!-- <td><a href="<?php /*echo MAIN; */?>Teacher_homework/update_homework/<?php /*echo $homework['resource_id']; */?>">Update</a></td>
            <td><a href="<?php /*echo MAIN; */?>Teacher_homework/delete_homework/<?php /*echo $homework['resource_id']; */?>">Delete</a></td>-->
        </tr>
    <?php } ?>
    </tbody>
</table>