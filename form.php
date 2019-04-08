<div class="container mt-4">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="fNumber">First Number:</label>
                            <input type="number" class="form-control" name="fNumber" id="fNumber">
                        </div>
                        <label>Select Operator:</label>
                        <select class="custom-select" name="functionName">
                            <option value="">None</option>
                            <option value="Add">Add</option>
                            <option value="Minus">Minus</option>
                            <option value="Multiply">Multiply</option>
                            <option value="Divide">Divide</option>
                        </select>
                        <div class="form-group">
                            <label for="sNumber">Second Number:</label>
                            <input type="number" class="form-control" name="sNumber" id="sNumber">
                        </div>
                        <button type="submit" class="btn btn-success" name="btn-submit">Calculate</button>
                    </form><br>
                    <?php include "cal.php";?>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>