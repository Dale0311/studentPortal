<?php require "./utilities/script.php" ?>
<div class="hidden fixed w-1/2 bg-white my-4 p-4 rounded z-20" id="modalEdit">  

    <form method="post">
        <h1 class="text-xl py-2 font-semibold">Edit Student</h1>
        <hr>
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
                <input type="hidden" name="editId" id="editId">
                <div class="col-span-6 sm:col-span-3">
                    <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                    <input type="text" name="editFirstName" id="editFirstName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                    <input type="text" name="editLastName" id="editLastName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="sex" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">sex</label>
                    <input type="text" name="editSex" id="editSex" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                    <input type="date" name="editBirthday" id="editBirthday" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">course</label>
                    <input type="text" name="editCourse" id="editCourse" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

            </div>
        </div>
        <!-- Modal footer -->
        <div class="flex w-full items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
            <a href="." class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><i class="fa-solid fa-share"></i> cancel</a>
            <button type="submit" name="submitEditBtn" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-arrow-up-from-bracket"></i> Save all</button>
        </div>
    </form>
</div>

