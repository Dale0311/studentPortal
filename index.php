<?php require "./src/header.php"; ?>
<?php require "./utilities/utilities.php" ?>
<?php require "./utilities/openCon.php" ?>

<?php 
    //add person 
    if(isset($_POST['confirmAdd'])){
        $firstname = sanitizeInput($con, $_POST['addStudentFirstname']);
        $lastname = sanitizeInput($con, $_POST['addStudentLastname']);
        $sex = sanitizeInput($con, $_POST['addStudentSex']);
        $birthday = $_POST['addStudentBirthday'];
        $course = sanitizeInput($con, $_POST['addStudentCourse']);

        $strSql = "INSERT INTO 
            students(firstname,lastname,sex,birthday,course)
            VALUES('$firstname', '$lastname', '$sex', '$birthday', '$course')";
        if(create($con, $strSql)){
            header("location: index.php");
        }else
            echo "Could not perform query";
    }
?>
<div class="flex">
    <?php require "./src/nav.php"; ?>
    <div class="container mx-auto flex flex-col items-center relative">
        <!-- MODAL -->
        <?php require "./src/modalAddPerson.php" ?>
        <?php require "./src/modalDelete.php" ?>
        <?php require "./src/modalEdit.php" ?>
        <div class="w-full">
            <table class="w-full divide-gray-200 dark:divide-gray-700 my-4 border rounded">
                <thead class="bg-gray-500 rounded text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs uppercase">firstname</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs uppercase">lastname</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs uppercase">sex</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs uppercase">birthday</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs uppercase">course</th>
                        <th scope="col" class="px-6 py-3 text-center text-xs uppercase">action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 relative">
                    <!-- read data -->
                    <?php 
                        $strSql = "SELECT * FROM students";
                        $students = read($con, $strSql);
                        foreach ($students as $key => $student) {
                            echo 
                            '<tr>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase">'.$student['firstname'].'</td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase">'.$student['lastname'].'</td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase">'.$student['sex'].'</td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase">'.$student['birthday'].'</td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase">'.$student['course'].'</td>
                                <input type="hidden" name="k" value="'.$student['id'].'">
                                <td scope="col" class="px-6 py-3 text-center font-semibold uppercase space-x-2">
                                   <a href="?k='.$student['id'].'" data-id="'.$student['id'].'" id="openEditModal" name="openEditModal" class="cursor-pointer"><i class="fa-solid fa-pen-to-square" style="color: #184eaa;"></i></a> 
                                   <a href="?k='.$student['id'].'" data-id="'.$student['id'].'" id="openDeleteModal" name="openDeleteModal" class="cursor-pointer"><i class="fa-solid fa-trash" style="color: #c81e1e;"></i></a> 
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
            <div class="w-full flex justify-end">
                <a href="" class="py-2 px-8 bg-green-500 text-white rounded hover:bg-green-600" name="addStudent" id="addStudent">Add Student</a>
            </div>
        </div>

    </div>
</div>
<?php require "utilities/closeCon.php"; ?>
<script src="./utilities/index.js"></script>
<?php require "./src/footer.php"; ?>