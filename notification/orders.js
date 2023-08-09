let labs = document.querySelector("div.orders");

fetch('getOrders.php')
    .then(response => response.json())
    .then(data => {
        // Manipulate the JSON data as needed
        console.log(data);
        data.forEach((obj) => {
            let hide = 'd-block', pDisplay = 'd-none', pText = null;
            if (obj.order_state === 'تم الموافقة') {
                hide = 'd-none';
                pDisplay = 'd-block';
                pText = 'مقبول';
            } else if (obj.order_state === 'مرفوض') {
                hide = 'd-none';
                pDisplay = 'd-block bg-danger';
                pText = 'مرفوض';
            }


            labs.innerHTML +=
                `
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="card-text fs-5">اسم الدكتور :
                                    <span id="doc-name" class="text-secondary">${obj.doc_name}</span>
                                </p>
                                <p class="card-text fs-5">اسم المخبر :
                                    <span id="lab-name" class="text-secondary">${obj.lab_name}</span>
                                </p>
                                <p class="card-text fs-5">نوع المخبر :
                                    <span id="lab-type" class="text-secondary">${obj.lab_type}</span>
                                </p>
                                <p class="card-text fs-5">تاريخ الطلب:
                                    <span id="ord-date" class="text-secondary">${obj.rec_date}</span>
                                </p>
                                <p class="card-text fs-5 mb-3">السعر :
                                    <span id="price" class="text-secondary">${obj.price} $</span>
                                </p>
                                <div class="d-flex gap-3">
                                    <a href="orderResponse.php?id=${obj.id}&value=تم الموافقة" class="btn btn-primary mb-3 flex-grow-1 accepted ${hide}">
                                        <i class="fa-solid fa-circle-plus"></i>
                                        قبول
                                    </a>
                                    <a href="orderResponse.php?id=${obj.id}&value=مرفوض" class="btn btn-danger mb-3 flex-grow-1 rejected ${hide}">
                                        <i class="fa-solid fa-trash"></i>
                                        رفض
                                    </a>

                                    <p class="${pDisplay} btn mb-3 flex-grow-1 bg-success">${pText}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end card component -->`
        });





        window.addEventListener('load', () => {
            // Initialize MutationObserver
            const observer = new MutationObserver(() => {
                // Call the function to process the accepted button
                processAcceptedButton();
            });

            // Config for the observer
            const config = {
                childList: true,
                subtree: true,
            };

            // Start observing changes in the DOM
            observer.observe(document.body, config);
        });

        // Function to process the accepted button
        function processAcceptedButton() {
            const accepted = document.querySelector('a.accepted');
            const rejected = document.querySelector('a.rejected');

        }
    });