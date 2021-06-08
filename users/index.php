<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>


<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Roboto', sans-serif;
    }

    #About {
        font-size: 17px;
        font-weight: 550;
        padding-left: 10px;
        padding-right: 10px;
        color: gray;
    }

    .content-block {
        margin-left: 200px;
    }

    .dot {
        height: 5px;
        width: 5px;
        margin-bottom: 2px;
        background-color: black;
        border-radius: 50%;
        display: inline-block;
    }

    .eligibilty-font {
        font-weight: 600;
        font-size: 17px;
        padding-left: 20px;
        padding-right: 39px;
        color: gray;
    }

    #eligibility-head {
        font-size: 30px;
        font-weight: bolder;
        color: black;

    }

    #line_1 {
        width: 750px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 content-block">
            <a href="#" id="eligibility-head">Why Are We Here For?</a>
            <p id="About">
                Plasma Management System (PMS) is a browser based system that is designed to store,
                process, retrieve and analyze information concerned with the administrative and inventory
                management within a Plasma bank. This project aims at maintaining all the information
                pertaining to plasma donors, different blood groups available in each plasma bank and help
                them manage in a better way.
            </p>
            <hr id="line_1">
            <a href="#" id="eligibility-head">Eligibility criteria for COVID-19 convalescent plasma donation</a>
            <ul class="eligibilty-font">
                <li>Donate only after 14 days of a COVID-19 positive report if he/ she is asymptomatic, or after 14 days of symptom resolution if he/she is symptomatic.</li>
                <li>A COVID-19 negative report is preferable. If not available, the test may be done but will take additional time.</li>
                <li>Persons who have received any COVID-19 vaccination will not be able to donate for 28 days from the date of vaccination.</li>
                <li>Antibody Titres will be measured and there is a possibility that the donor gets rejected if he/she lacks adequate antibodies in the blood.</li>
                <li>Women who have ever been pregnant can not donate COVID-19 convalescent plasma</li>
                <li>The above criteria are in addition to the donor eligibility criteria laid down as per the Drugs and Cosmetics Act and Rules ( amended March 2020)</li>
                <li>All laboratory tests to determine donor eligibility will be done as per rules prior to convalescent plasma collection.</li>
            </ul>
        </div>



    </div>
</div>

<?php include 'layout/_footer.php'; ?>