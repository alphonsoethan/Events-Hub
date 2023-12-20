<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Event Hub - Contact Us</title>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        We'd love to hear from you! At Events Hub, 
        your satisfaction is our priority. Our dedicated team is here 
        to assist you with any inquiries, feedback, or support you may need. 
        Your event success is our mission, and we're committed to making your 
        experience with Events Hub as smooth as possible. Get in touch, and let's 
        create unforgettable moments together! 
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send A Message</h5>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label" style="font-weight: 500;">E-Mail</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label" style="font-weight: 500;">Query / Message</label>
                            <textarea rows="5" class="form-control shadow-none" style="resize:none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?>

</body>
</html>