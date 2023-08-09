let labs = document.querySelector("div.orders");

fetch('getOrders.php')
    .then(response => response.json())
    .then(data => {
        // Manipulate the JSON data as needed
        console.log(data);
        data.forEach((obj) => {
            let bgColor;
            if (obj.order_state === 'قيد الانتظار') {
                bgColor = 'bg-warning';
            } else if (obj.order_state === 'تم الموافقة') {
                bgColor = 'bg-success';
            } else {
                bgColor = 'bg-danger';
            }

            labs.innerHTML +=
                `
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="card-text fs-5">
                                اسم الطبيب :
                                <span id="lab-name" class="text-secondary">${obj.doc_name}</span>
                            </p>

                            <p class="card-text fs-5">
                                اسم المخبر :
                                <span id="lab-name" class="text-secondary">${obj.lab_name}</span>
                            </p>
                            <p class="card-text fs-5">
                                نوع المخبر :
                                <span id="lab-type" class="text-secondary">${obj.lab_type}</span>
                            </p>
                            <p class="card-text fs-5">
                                تاريخ الطلب:
                                <span id="ord-date" class="text-secondary">${obj.rec_date}</span>
                            </p>
                            <p class="card-text fs-5">
                                السعر :
                                <span id="price" class="text-secondary">${obj.price} $ </span>
                            </p>
                            <span class="badge ${bgColor} text-dark fs-6 w-50">${obj.order_state}</span>
                        </div>
                    </div>
                </div>
                <!--end card component-- >`
        })
    });