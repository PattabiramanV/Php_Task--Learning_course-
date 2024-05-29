

<?php
session_start();
require "./controller/userListFun.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php  require "./view/partials/navbar.php" ;?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">S.No</th>
            <th scope="col" class="px-6 py-3">Name</th>
            <th scope="col" class="px-6 py-3">Email</th>
            <th scope="col" class="px-6 py-3">Phone</th>
            <th scope="col" class="px-6 py-3">Address</th>
            <th scope="col" class="px-6 py-3">DOB</th>
            <th scope="col" class="px-6 py-3">Course</th>
            <th scope="col" class="px-6 py-3">Role</th>

            <th scope="col" class="px-6 py-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($getData as $data) : ?>
        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               <?php echo $data['id'];?>
            </th>
            <td class="px-6 py-4">
                <?php echo $data['name'];?>

            </td>
            <td class="px-6 py-4">
                <?php echo $data['email'];?>

            </td>
            <td class="px-6 py-4"><?php echo $data['phone'];?></td>

            <td class="px-6 py-4"><?php echo $data['address'];?></td>
            <td class="px-6 py-4"><?php echo $data['dob'];?></td>
            <td class="px-6 py-4"><?php echo $data['course_name'];?></td>
            <td class="px-6 py-4"><?php echo $data['role'];?></td>

            <td class="px-6 py-4 text-right">
                <a href="./register.php? id=<?php echo $data['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |  <a href="./userListing.php?delId=<?php echo $data['id']?>" onclick="window.location.reload()" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
            </td>
        </tr>
        <?php  endforeach; ?>
        </tbody>
    </table>
</div>

<script >
    function deleteUser(userId) {
        if(confirm("Are you sure you want to delete this user?")) {
            $.ajax({
                type: "POST",
                url: "delete_user.php", // Replace with your PHP script to handle deletion
                data: { id: userId },
                success: function(response) {
                    alert("User deleted successfully");
                    location.reload(); // Refresh the page after successful deletion
                },
                error: function() {
                    alert("Error deleting user");
                }
            });
        }
    }

</script>
</body>
</html>



