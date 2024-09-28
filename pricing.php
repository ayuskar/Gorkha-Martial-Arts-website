<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martial Arts Pricing Calculator</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        body {
            padding-top: 80px;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 100px;
            background-color: #f2f2f2;
            background-image: url('second.jpg');
            background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background image fixed while scrolling */
    background-blend-mode: multiply; /* Blend the background image with the background color */
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black overlay */
    filter: grayscale(30%);
        }

        /* Styling for the pricing form */
        #pricingForm {
            max-width: 700px;
            margin: 1px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Styling for section headings */
        #pricingForm h3 {
            font-size: 20px;
            margin-top: 20px;
            text-decoration: underline;
        }

        /* Styling for the specialist courses table */
        #specialistTable {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        #specialistTable th, #specialistTable td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        #specialistTable th {
            background-color: #f2f2f2;
        }

        /* Styling for date inputs and quantity inputs */
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
   

        /* Styling for the Calculate Total button */
        #totalPrice {
            background-color: tomato;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        #totalPrice:hover {
            background-color: #e44d4d;
        }

        /* Styling for the Submit button */
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Fixed footer styles */
        .fixed-footer {
            position: fixed;
            bottom: 10px;
            left: -5%;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            z-index: 100;
        }

        /* Styling for the label and section heading */
        .label-heading-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .label-heading-container label {
            margin-right: 10px;
            font-weight: bold;
        }

        .label-heading-container h3 {
            font-size: 20px;
            text-decoration: underline;
            margin-top: 0;
            margin-bottom: 10px;
        }

        /* Styling for the select element */
        select#membershipType {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        select#membershipType:hover,
        select#membershipType:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Styling for the options */
        select#membershipType option {
            padding: 10px;
            font-size: 16px;
            background-color: #fff;
            color: #333;
        }

        /* Styling for the dropdown arrow */
        select#membershipType::-ms-expand {
            display: none;
        }

        /* Styling for the total price display */
        #totalContainer {
            font-size: 20px;
            margin-top: 20px;
            font-family: Garamond;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Styling for the dropdown arrow in modern browsers */
        select#membershipType::after {
            content: "\25BC";
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
        }

        /* Social icons styles */
        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: #fff;
            font-size: 24px;
            margin: 0 15px;
            transition: color 0.3s ease;
        }

        #membershipdate {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        .social-icons a:hover {
            color: #f00;
        }
    </style>
</head>
<body>
    <header>
        <?php require('header.php') ?>
    </header>
    <script>
    function updateOptionValue(selectedPlan) {
  // Get the form element by its ID (assuming you have a form in pricing.php)
  const form = document.getElementById('pricingForm');

  // Find the select element within the form (assuming it has the ID "membershipType")
  const select = form.querySelector('#membershipType');

  // Update the selected option's value based on the selected plan
  select.value = selectedPlan;

  // Submit the form (you can remove this line if you don't want to automatically submit)
  form.submit();
}
</script>
    <form id="pricingForm" method="post" action="pricing_processing.php">
        <label for="membershipType"><h3>Membership Type</h3></label>
        <select id="membershipType" name="membershipType">
            <option value="Basic">Basic (1 martial art – 2 sessions per week)</option>
            <option value="Intermediate">Intermediate (1 martial art – 3 sessions per week)</option>
            <option value="Advanced">Advanced (any 2 martial arts – 5 sessions per week)</option>
            <option value="Elite">Elite (Unlimited classes)</option>
            <option value="Privatemartial">Private martial arts tuition – per hour</option>
            <option value="Junior">Junior membership – can attend all-kids martial arts sessions</option>
        </select>
        <div class="label-heading-container">
            <label for="membershipdate">Select the starting date for membership:</label>
            <input type="date" id="membershipdate" name="membershipdate" required>
        </div>

        <input type="checkbox" id="selfDefenceCheckbox" name="selfDefenceCheckbox">

        <label for="selfDefenceCheckbox">Six-week beginners’ self-defence course (2 × 1-hour session per week) £180.00</label>
        <label for="selfdefencedate">Select the starting date:</label>
        <input type="date" id="selfdefencedate" name="selfdefencedate" >

        <!-- Specialist Table Container -->
        <div id="specialistTableContainer" style="display: none;">
            <!-- Specialist Courses and Fitness Training Table -->
            <h3>Specialist Courses and Fitness Training</h3>
            <table id="specialistTable">
                <tr>
                    <th>Specialist Course</th>
                    <th>Price</th>
                    <th>Quantity (Days per Month)</th>
                </tr>
                <tr>
                    <td>Use of fitness room – per visit</td>
                    <td>£6.00</td>
                    <td>
                        <input type="number" id="fitnessRoomQuantity" name="fitnessRoomQuantity" placeholder="Quantity">
                    </td>
                </tr>
                <tr>
                    <td>Personal fitness training – per hour</td>
                    <td>£35.00</td>
                    <td>
                        <input type="number" id="fitnessTrainingHours" name="fitnessTrainingHours" placeholder="Hours">
                    </td>
                </tr>
            </table>
        </div>

        <button type="button" name="totalprice" id="totalPrice" onclick="calculateTotal()">Calculate Total</button>

        <!-- Hidden inputs for calculated values -->
        <input type="hidden" name="selfDefenceTotal" id="hiddenSelfDefenceTotal" value="">
        <input type="hidden" name="fitnessRoomTotal" id="hiddenFitnessRoomTotal" value="">
        <input type="hidden" name="fitnessTrainingTotal" id="hiddenFitnessTrainingTotal" value="">
        <input type="hidden" name="membershipPrice" id="hiddenMembershipPrice" value="">
        <input type="hidden" name="totalSpecialistPrice" id="hiddenTotalSpecialistPrice" value="">
        <input type="hidden" name="totalPrice" id="hiddentotalPrice" value="">

        <button type="submit" name="submitForm">Submit</button>
    </form>

    <p id="totalContainer"></p>

    <script>
        $("#selfDefenceDates, #fitnessRoomDates, #fitnessTrainingDates").datepicker({
            dateFormat: "yy-mm-dd",
            onSelect: function (dateText, inst) {
                const inputId = inst.id;
                const quantityInput = document.getElementById(inputId.replace("Dates", "Quantity"));
                const selectedDates = $(this).datepicker("getDate");
                const daysSelected = selectedDates ? selectedDates.length : 0;
                quantityInput.value = daysSelected;
            }
        });

        $(document).ready(function () {
            // Add an event listener to the checkbox
            $("#selfDefenceCheckbox").change(function () {
                if (this.checked) {
                    // If the checkbox is checked, show the specialist table
                    $("#specialistTableContainer").show();
                } else {
                    // If the checkbox is unchecked, hide the specialist table
                    $("#specialistTableContainer").hide();
                }
            });
        });

        $("#selfDefenceDates, #fitnessRoomDates, #fitnessTrainingDates").click(function () {
            $(this).datepicker("show");
        });

        function calculateTotal() {
            // Calculate specialist courses and fitness training
            const selfDefencePrice = 180.00;
            const fitnessRoomPrice = 6.00; // per visit
            const fitnessTrainingPrice = 35.00; // per hour

            const fitnessRoomQuantity = parseInt(document.getElementById("fitnessRoomQuantity").value);
            const fitnessTrainingHours = parseInt(document.getElementById("fitnessTrainingHours").value);

            const selfDefenceTotal = selfDefencePrice;
            const fitnessRoomTotal = fitnessRoomPrice * fitnessRoomQuantity;
            const fitnessTrainingTotal = fitnessTrainingPrice * fitnessTrainingHours;

            if (selfDefencePrice <= fitnessRoomTotal + fitnessTrainingTotal) {
                alert("The sum of Fitness Room and Fitness Training should not exceed the Self Defence Price.");
                return; // Prevent further processing
            }

            // Calculate membership price
            const membershipType = document.getElementById("membershipType").value;
            let membershipPrice;

            if (membershipType === "Basic") {
                membershipPrice = 25.00;
            } else if (membershipType === "Intermediate") {
                membershipPrice = 35.00;
            } else if (membershipType === "Advanced") {
                membershipPrice = 45.00;
            } else if (membershipType === "Elite") {
                membershipPrice = 60.00;
            } else if (membershipType === "Privatemartial") {
                membershipPrice = 15.00;
            } else if (membershipType === "Junior") {
                membershipPrice = 25.00;
            }

            // Calculate total price
            const totalSpecialistPrice = fitnessRoomTotal + fitnessTrainingTotal;
            const totalPrice = membershipPrice + totalSpecialistPrice;
            const totalContainer = document.getElementById("totalContainer");

            totalContainer.textContent = `Your total price will be: £${totalPrice.toFixed(2)}`;

            // Update hidden input fields for form submission
            document.getElementById("hiddenSelfDefenceTotal").value = selfDefenceTotal;
            document.getElementById("hiddenFitnessRoomTotal").value = fitnessRoomTotal;
            document.getElementById("hiddenFitnessTrainingTotal").value = fitnessTrainingTotal;
            document.getElementById("hiddenMembershipPrice").value = membershipPrice;
            document.getElementById("hiddenTotalSpecialistPrice").value = totalSpecialistPrice;
            document.getElementById("hiddentotalPrice").value = totalPrice;
        }
    </script>
</body>
</html>
