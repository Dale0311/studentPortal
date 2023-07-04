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

    // edit person
    if(isset($_POST['submitEditBtn'])){
        $id = sanitizeInput($con, $_POST['editId']);
        $firstname = sanitizeInput($con, $_POST['editFirstName']);
        $lastname = sanitizeInput($con, $_POST['editLastName']);
        $sex = sanitizeInput($con, $_POST['editSex']);
        $birthday = sanitizeInput($con, $_POST['editBirthday']);
        $course = sanitizeInput($con, $_POST['editCourse']);

        $strSql = "UPDATE students SET
            firstname='$firstname',
            lastname='$lastname',
            sex='$sex',
            birthday='$birthday',
            course='$course'
            WHERE id=".$id;
        if(update($con, $strSql)){
            header("location: index.php");
        }else{
            echo "could not perform your query";
        }
    }

    // delete person
    if(isset($_POST['submitDeleteBtn'])){
        $deleteId = sanitizeInput($con, $_POST['confirmDelete']);
        $strSql = "DELETE FROM students WHERE id=".$deleteId;
        if(delete($con, $strSql)){
            header("location: index.php");
        }else{
            echo "could not perform your query";
        }
    }
?>
<div class="w-full flex">
    <?php require "./src/nav.php"; ?>
    <div class="w-full px-4 md:container mx-auto flex flex-col items-center relative">
        <!-- MODAL -->
        <?php require "./src/modalAddPerson.php" ?>
        <?php require "./src/modalEdit.php" ?>
        <?php require "./src/modalDelete.php" ?>
        
        <div class="w-full">
            <table class="max-w-full w-full divide-gray-200 dark:divide-gray-700 my-4 border rounded">
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
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase"><span id="firstname'.$student['id'].'">'.$student['firstname'].'</span></td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase"><span id="lastname'.$student['id'].'">'.$student['lastname'].'</span></td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase"><span id="sex'.$student['id'].'">'.$student['sex'].'</span></td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase"><span id="birthday'.$student['id'].'">'.$student['birthday'].'</span></td>
                                <td scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase"><span id="course'.$student['id'].'">'.$student['course'].'</span></td>
                                <td scope="col" class="px-6 py-3 text-center font-semibold uppercase space-x-2">
                                   <a id="openEditModal" class="cursor-pointer" value="'.$student['id'].'"><i class="fa-solid fa-pen-to-square" style="color: #184eaa;"></i></a> 
                                   <a id="openDeleteModal" class="cursor-pointer" value="'.$student['id'].'"><i class="fa-solid fa-trash" style="color: #c81e1e;"></i></a> 
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="w-full flex sm:justify-end">
            <a href="" class="py-2 px-8 bg-green-500 text-white rounded hover:bg-green-600" name="addStudent" id="addStudent">Add Student</a>
        </div>
    </div>
</div>
<?php require "utilities/closeCon.php"; ?>
<script src="./utilities/script.js"></script>
<?php require "./src/footer.php"; ?>