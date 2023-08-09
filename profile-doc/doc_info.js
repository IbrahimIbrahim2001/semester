let docInfo = document.querySelector("div.container");
console.log('hello world');
fetch('doc_info.php')
    .then(response => response.json())
    .then(data => {
        // Manipulate the JSON data as needed
        console.log(data);
        docInfo.innerHTML +=
            `
            <form action="update_doc_info.php" method='post' class="needs-validation w-50 m-auto" novalidate>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="user_name" name="user_name"
                        value = ${data.username}
                        placeholder="Your name" style="background-position: calc(.375em + .1875rem);">
                    <label for="user_name">user name</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="name-doc" name="name_doc"
                        value = ${data.doctor_name}
                        placeholder="Your name" style="background-position: calc(.375em + .1875rem);">
                    <label for="name-doc">your Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control is-invalid" id="password" name="password"
                        value = ""
                        placeholder="New password" style="background-position: calc(.375em + .1875rem);">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control is-invalid " id="phone" name="phone"
                        value = ${data.phone_number}
                        placeholder="Your phone number" style="background-position: calc(.375em + .1875rem);">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="clinic-name" name="clinic_name"
                        value = ${data.clinic_name}
                        placeholder="Your clinic name" style="background-position: calc(.375em + .1875rem);">
                    <label for="clinic-name">Clinic Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control is-invalid" id="clinic-address" name="clinic_address"
                        value = ${data.clinic_address}
                        placeholder="Your clinic address" style="background-position: calc(.375em + .1875rem);">
                    <label for="clinic-address">Clinic Address</label>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
            `
    });