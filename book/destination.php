

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="frm">
        <h1>Booking</h1>
        <form name="form" action="bookaction.php" onsubmit="return submitForm()" onsubmit="return validation()" method="POST">
            <p>
                <select id="package" name="package" required>
                    <!-- <option value="" disabled selected>Select Package</option> -->
                    <option value="1">sfbc</option>
                    <option value="2">vcx</option>
                    <option value="3">fghj</option>
                    <option value="4">ghj</option>
                    <option value="5">lkjh</option>
                </select>
            </p>
            <p>
                <label> Name </label>
                <input type="name" placeholder="Enter your name" id="name" name="name" required />
            </p>
            <p>
                <label for="adults">Adults:</label>
                <select id="adults" name="adults" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <label for="children">Children:</label>
                <select id="children" name="children" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </p>
            <p>
                <label>Contact Number</label>
                <input type="tel" placeholder="Enter 10-digit number" id="contact_num" name="contact_num" required />
            </p>
            <p>
                <label for="email"> Email: </label>
                <input type="email" placeholder="Enter Your email" id="email" name="email" required />
            </p>
            <p>
                <textarea class="form-input" name="	your_query" id="your_query" cols="30" rows="7"
                    placeholder="Enter Your Query"></textarea>
            </p>
            <p class="send">
                <input type="submit" id="btn" value="Send enquiry" />
            </p>

        </form>
        <script>
            function submitForm() {
                var contact_num = document.f1.contact_num.value;
                if (contact_num.length == 10) {
                    alert("Please enter a valid 10-digit phone number");
                    return;
                } else {
                    alert("You are enquiry is sent successfully");
                    alert("Our team will contact you within 12 hours for confirmation");
                }

            }    
        </script>
    </div>
</body>

</html>