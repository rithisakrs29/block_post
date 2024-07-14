
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Block Post</title>
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link href="http://localhost:8080/fontawesome-free-6.5.2-web/css/all.min.css" rel="stylesheet">
  <script src="http://localhost:8080/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

  <style>
      /* width */
::-webkit-scrollbar {
  width: 5px;
  height: 3px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: cyan; 
  border-radius: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
        body {
          overflow-x: hidden;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo {
            height: 40px;
        }
        .header .nav-icons {
            display: flex;
            align-items: center;
        }
        .header .nav-icons a {
            text-decoration: none;
            color: #343a40;
            margin-left: 15px;
        }
        .header .nav-icons a:hover {
            color: #007bff;
        }
        .newsfeed-section {
            overflow-y: auto;
            max-height: calc(100vh - 60px); /* Adjust based on header height */
        }
        
    </style>

    <?php
      include('db.php')
    ?>