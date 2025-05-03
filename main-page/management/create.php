<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "manage-time";

$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$message = "";

$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name = $_POST["name"];
    $message  = $_POST["message"];

    do{
        if (empty($name) || empty($message)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Add new client to database...
        $sql = "INSERT INTO users(name, message)" . "VALUES('$name', '$message')";
        $result = $connection->query($sql);

        if(!$result){
          $errorMessage = "Inalid query: " . $connection->error;
          break;
        }

        $name = "";
        $message = "";

        $successMessage = "Client added correctly";

        header("Location: index.php");
        exit;
    } while(false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Manage Time</title>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-800 to-blue-400 p-4 flex flex-col items-center">

  <header class="w-full max-w-md bg-white rounded-xl py-4 text-center mb-8">
    <h1 class="text-xl font-semibold text-black">
      Add A Task
    </h1>
  </header>

  <form action="#" method="post" class="w-full max-w-md bg-white rounded-xl p-6 space-y-6">
    <!-- Name -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-800 mb-1">Name</label>
      <input type="text" id="name" name="name" placeholder="Write your name" value="<?php echo htmlspecialchars($name)?>" class="w-full border-b border-gray-300 py-2 focus:border-gray-800 focus:outline-none"/>
    </div>

    <!-- Message -->
    <div>
      <label for="message" class="block text-sm font-medium text-gray-800 mb-1">Task</label>
      <input type="text"  id="message" name="message" placeholder="What's your task?" value="<?php echo htmlspecialchars($message)?>" class="w-full border-b border-gray-300 py-2 focus:border-gray-800 focus:outline-none"/>
    </div>

    <!-- Buttons -->
    <div class="flex justify-end space-x-4 mt-4">
      <button type="reset" class="py-2 px-4 rounded bg-gray-200 text-gray-800 hover:bg-gray-300 focus:outline-none"><a href="index.php">Cancel</a></button>
      <button type="submit" class="py-2 px-4 rounded bg-blue-600 text-white hover:bg-blue-700 focus:outline-none"><a href="index.php">Submit</a></button>
    </div>
  </form>

</body>
</html>
