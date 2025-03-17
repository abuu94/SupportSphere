<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orphan Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Orphan Registration Form</h4>
          </div>
          <div class="card-body">
            <form action="submit.php" method="post">
              <div class="form-group">
                <label for="orphan_name">Orphan's Name:</label>
                <input type="text" id="orphan_name" name="orphan_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="mother_name">Mother's Full Name:</label>
                <input type="text" id="mother_name" name="mother_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="guardian">Guardian:</label>
                <select id="guardian" name="guardian" class="form-control" required>
                  <option value="Father">Father</option>
                  <option value="Mother">Mother</option>
                  <option value="Both">Both</option>
                </select>
              </div>
              <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="year_of_death">Year of Death:</label>
                <input type="number" id="year_of_death" name="year_of_death" min="1900" max="2099" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
