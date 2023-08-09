let labs = document.querySelector("div.labs");
console.log('hello world');
fetch('addLabs.php')
  .then(response => response.json())
  .then(data => {
    // Manipulate the JSON data as needed
    console.log(data);
    data.forEach((obj) => {
      labs.innerHTML +=
        `<div class="col" id=${obj.id}>
          <div class="card mb-3">
            <div class="card-body">
              <p class="card-text fs-5">اسم المخبر :
                <span id="lab-name" class="text-secondary">${obj.lab_name}</span>
              </p>
              <p class="card-text fs-5">اسم المخبري :
                <span id="doc-name" class="text-secondary">${obj.dr_name}</span>
              </p>
              <p class="card-text fs-5">نوع المخبر :
                <span id="lab-type" class="text-secondary">${obj.lab_category}</span>
              </p>
              <p class="card-text fs-5">الموقع :
                <span id="location" class="text-secondary">${obj.lab_location}</span>
              </p>
              <div class="d-flex gap-3">
                <button  class="btn btn-secondary mb-3 flex-grow-1 ">
                  <i class="fa-solid fa-pen-to-square"></i>
                  تعديل
                </button>
                  <button  class="btn btn-danger mb-3 flex-grow-1 delete-btn" name="delete">
                    <a href='deleteLabs.php?id=${obj.id}<?php>' class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    حذف
                    </a>
                  </button>
              </div>
              <div class="card-footer d-flex gap-3 fs-5 justify-content-center text-warning border-warning">
                <span>
                  <i class="fa-solid fa-star"></i>
                </span>
                <span>
                  <i class="fa-solid fa-star"></i>
                </span>
                <span>
                  <i class="fa-solid fa-star"></i>
                </span>
                <span>
                  <i class="fa-solid fa-star"></i>
                </span>
                <span>
                  <i class="fa-solid fa-star"></i>
                </span>
              </div>
            </div>
          </div>
        </div>`})
  });