<?php
include 'db.php';

// INSERT
if (isset($_POST['insert'])) {
    $id=$_POST["id"];
    $name = $_POST['project'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    if (empty($id) &&!empty($name)  && !empty($desc) && !empty($status) && !empty($start) && !empty($end)) {
        $sql = $conn->prepare("INSERT INTO project (id,project_name, project_desc, status, start_date, end_date) VALUES (?, ?, ?, ?, ?,?)");
        $sql->bind_param("isssss", $id,$name, $desc, $status, $start, $end);
        $sql->execute();
    }
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    if (!empty($id) && !empty($status)) {
        $sql = $conn->prepare("UPDATE project SET status=? WHERE id=?");
        $sql->bind_param("si", $status, $id);
        $sql->execute();
    }
}

// DELETE
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    if (!empty($id)) {
        $sql = $conn->prepare("DELETE FROM project WHERE id=?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }
}

// FETCH
$result = $conn->query("SELECT * FROM project");
?>

<!doctype html>
<html lang="en">
<head>
    <title>Project CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <h2 class="text-center mb-4">Project Management</h2>

    <div class="row g-4">

        <!-- Add Project -->
        <div class="col-md-5">
            <div class="card shadow p-4">
                <h4 class="mb-3">Add Project</h4>

                <form method="POST">
                <input type="number" name="id" class="form-control mb-3" placeholder="Project id" required>
                    <input type="text" name="project" class="form-control mb-3" placeholder="Project Name" required>

                    <input type="text" name="desc" class="form-control mb-3" placeholder="Description" required>

                    <select name="status" class="form-control mb-3">
                        <option value="pending">Pending</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>

                    <input type="date" name="start" class="form-control mb-3" required>
                    <input type="date" name="end" class="form-control mb-3" required>

                    <button type="submit" name="insert" class="btn btn-dark w-100">Add Project</button>
                </form>
            </div>
        </div>

        <!-- Update / Delete -->
        <div class="col-md-3">
            <div class="card shadow p-4">
                <h4 class="mb-3">Update / Delete</h4>

                <form method="POST">
                    <input type="number" name="id" class="form-control mb-3" placeholder="Project ID" required>

                    <select name="status" class="form-control mb-3">
                        <option value="pending">Pending</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>

                    <button type="submit" name="update" class="btn btn-primary w-100 mb-2">Update</button>
                    <button type="submit" name="delete" class="btn btn-danger w-100">Delete</button>
                </form>
            </div>
        </div>

        <!-- Table -->
        <div class="col-md-12">
            <div class="card shadow p-4 mt-4">
                <h4 class="mb-3">All Projects</h4>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['project_name']; ?></td>
                                    <td><?php echo $row['project_desc']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['start_date']; ?></td>
                                    <td><?php echo $row['end_date']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>

</div>

</body>
</html>