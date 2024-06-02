<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="asstes/styles.css">
</head>


<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white p-8 rounded shadow-md w-80">
        <h2 class="text-2xl font-medium text-center mb-4">Employee Sign in</h2>

        <form action="scripts/employee_login.php" method="post">

            <div class="mb-4">
                <label for="username" class="block text-lg font-medium">Username</label>

                <input type="text" id="username" name="username" class="border border-gray-300 bg-gray-100 focus:outline-none focus:ring 
                focus:border-blue-300 rounded-md mt-3 py-2 px-4" placeholder="your username">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="border border-gray-300
                 bg-gray-100 focus:outline-none focus:ring 
                 focus:border-blue-300 rounded-md py-2 px-4 mt-4" placeholder="password">
            </div>

            <button type="submit" class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">Sign in</button>


        </form>

    </div>

</body>

</html>