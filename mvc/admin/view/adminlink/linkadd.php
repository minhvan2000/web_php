
<div class="col-md-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Link</h4>
            <div class="row btn-success">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </div>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="inputTitle" required> 
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Position</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputPosition">
                            <option value="golbalnav">golbalnav</option>
                            <option value="bottommenu1">bottommenu1</option>
                            <option value="bottommenu2">bottommenu2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="inputFileUpload">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Link</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Link" name="inputLink">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Orders</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Orders" name="inputOrders">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Status</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="inputStatus">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-2" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-light" name="reset" value="Reset">Reset</button>
            </form>
        </div>
    </div>
</div>