const taskForm = document.querySelector("#task-form");
const taskTitleInput = document.querySelector("#task-title");
const taskCategoryInput = document.querySelector("#task-category");
const workTimeInput = document.querySelector("#work-time");
const priceInput = document.querySelector("#price");
const locationInput = document.querySelector("#location");
const descriptionInput = document.querySelector("#description");
const image1Input = document.querySelector("#image1");
const image2Input = document.querySelector("#image2");

taskForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const taskTitleValue = taskTitleInput.value;
    const taskCategoryValue = taskCategoryInput.value;
    const workTimeValue = workTimeInput.value;
    const priceValue = priceInput.value;
    const locationValue = locationInput.value;
    const descriptionValue = descriptionInput.value;

    // Validate Title
    if (taskTitleValue === "") {
        alert("Task title is required.");
        return;
    }

    // Validate lname
    if (taskCategoryValue === "") {
        alert("Task Category is required.");
        return;
    }

    // Validate dob
    if (workTimeValue === "" || workTimeValue=== 0) {
        alert("A proper time is required.");
        return;
    }

    // Email validation
    if (priceValue === "") {
        alert("A price is required.");
        return;
    }


    // Validate location
    if (locationValue === "") {
        alert("Location is required.");
        return;
    }

    if (descriptionValue === "") {
        alert("A description is required.");
        return;
    }



    // Submit form data to PHP script
    const formData = new FormData(taskForm)
    fetch("../actions/create_a_task_action.php", {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            if (response.status === 200) {
                // alert("Registration successful. You can now log in.");
                window.location.href = "../admin/createtask.php";
            }
            else {
                alert("error="+response.status);

            }
        })
        .catch((_error) => {
            alert("Error occurred while creating task. Please try again.");
        });
});