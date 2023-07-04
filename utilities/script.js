let addStudent = document.querySelector("#addStudent");
let openEditModal = document.querySelectorAll("#openEditModal");
let openDeleteModal = document.querySelectorAll("#openDeleteModal");

// Add
addStudent.addEventListener("click", e=>{
    e.preventDefault();
    let modal = document.querySelector(`#modalAddPerson`);
    let overlay = document.querySelector("#overlay");

    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
})

$(document).ready(()=>{
    // edit student
    $.each(openEditModal, (key, element)=>{
        $(element).click(e =>{
            let id = $(element).attr("value");
            let firstname = $(`#firstname${id}`).text();
            let lastname = $(`#lastname${id}`).text();
            let sex = $(`#sex${id}`).text();
            let birthday = $(`#birthday${id}`).text();
            let course = $(`#course${id}`).text();
            
            $("#editFirstName").val(firstname);
            $("#editLastName").val(lastname);
            $("#editSex").val(sex);
            $("#editBirthday").val(birthday);
            $("#editCourse").val(course);
            $("#editId").val(id);
            
            $("#modalEdit").show();
            $("#overlay").show();
        })
    });

    // delete student
    $.each(openDeleteModal, (key, element)=>{
        $(element).click(e =>{
            let id = $(element).attr("value");
            $("#confirmDelete").val(id);    
            $("#modalDelete").show();
            $("#overlay").show();
        })
    })
})


