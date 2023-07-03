let addStudent = document.querySelector("#addStudent");
let openEditModal = document.querySelectorAll("#openEditModal");
let openDeleteModal = document.querySelectorAll("#openDeleteModal");

// Add
addStudent.addEventListener("click", ()=>{
    event.preventDefault();
    let modal = document.querySelector(`#modalAddPerson`);
    let overlay = document.querySelector("#overlay");

    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
})

// Edit
openEditModal.forEach(element => {
 element.addEventListener("click", e=>{
    e.preventDefault();
    // to get reference
    studentId = e.target.parentElement.dataset.id;
    fetch("./utilities/script.php", {
        "method" : "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(studentId)
    }).then(res =>  res.text()
    ).then(data => data);

    let modal = document.querySelector(`#modal`);
    let overlay = document.querySelector("#overlay");

    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
})
});
    
openDeleteModal.forEach(element => {
    element.addEventListener("click", e=>{
        e.preventDefault();
        // let modal = document.querySelector(`#modalDelete`);
        // let overlay = document.querySelector("#overlay");
    
        // modal.classList.remove("hidden");
        // overlay.classList.remove("hidden");
    })
}); 


