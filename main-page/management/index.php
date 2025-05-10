<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="main.css">
    <title>Manage Time</title>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-800 to-blue-400 p-4 text-white">
    <!-- Header -->
    <header class="text-center bg-white py-5 rounded-xl flex justify-center items-center shadow-lg md:gap-100 gap-20"> 
      <h1 class="text-2xl font-cursive text-black font-bold"><a href="/Manage Time/main-page/main.php">Time<span class="text-blue-500">Wise</span></a></h1>
      <h1 class="text-xl font-cursive text-black">You Can Add A Task</h1>
        
    </header>

    <div class="overflow-x-auto bg-white bg-opacity-90 backdrop-blur-md rounded-2xl shadow-lg mt-8 p-4">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
        <span class='inline-block px-3 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded transition mb-5'><a href="create.php">Create</a></span> 
          <tr>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Task</th>
            <th class="px-6 py-3"></th>
            <th class="px-6 py-3"></th>
          </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "manage-time";
        
            $connection = new mysqli($servername, $username, $password, $database);
            if($connection->connect_error){
                die("There's a mistake in the query" . $connect_error);
            }

            $sql = "SELECT * FROM users";
            $result = $connection->query($sql);

            if(!$result){
                die("There's a mistake!" . $connect_error);
            }

            while($row = $result->fetch_assoc()){
                echo"<tr class='hover:bg-gray-50 transition'>
                    <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>{$row['id']}</td>
                    <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>{$row['name']}</td>
                    <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-700'>{$row['message']}</td>
                    <td class='px-6 py-4 whitespace-nowrap'>
                <a
                  href='edit.php?id={$row['id']}'
                  class='inline-block px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded transition'
                >Edit</a>
              </td>
              <td class='px-6 py-4 whitespace-nowrap'>
                <a
                  href='delete.php?id={$row['id']}'
                  class='inline-block px-3 py-1 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded transition'
                >Delete</a>
              </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>