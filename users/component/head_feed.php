<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Layout</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-input-group {
      display: flex;
      align-items: center;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      padding: 10px;
    }

    .custom-input-group img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .custom-input-group input {
      border: none;
      outline: none;
      flex: 1;
    }

    .custom-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .custom-buttons button {
      flex: 1;
      margin-right: 5px;
    }

    .custom-buttons button:last-child {
      margin-right: 0;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="custom-input-group">
      <img src="https://via.placeholder.com/40" alt="Profile Picture">
      <input type="text" placeholder="What's on your mind, ...?">
    </div>
    <div class="custom-buttons">
      <button class="btn btn-danger"><i class="fas fa-video"></i> Live video</button>
      <button class="btn btn-success"><i class="fas fa-camera"></i> Photo/video</button>
      <button class="btn btn-warning"><i class="fas fa-smile"></i> Feeling/activity</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
