<h1>Add Resource</h1>
<div style="margin-top: 30px;">
    <form action="<?php echo MAIN; ?>Teacher_resources/handle_resources" method="POST">
        <div class="form-group">
            <label for="resource_short_desc">Resource Short Description</label>
            <input type="text" class="form-control" id="resource_short" aria-describedby="emailHelp" placeholder="Resource Short Description" name="resource_short_desc">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Resource Long Description</label>
            <textarea name="resource_long_desc" placeholder="Resource Long Description"></textarea>
        </div>
        <div class="form-group">
            <label for="resource">Resource Resource</label>
            <input type="text" class="form-control" id="resource" aria-describedby="emailHelp" placeholder="Resource" name="resource_file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>