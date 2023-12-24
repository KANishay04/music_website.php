<?php require page('includes/header') ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .m-2 {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #f49b09;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        color: #333;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #f49b09;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #e1870a;
    }
</style>



<div class="m-2">
    <h2>Contact us</h2>

    <form action="process_contact_form.php" method="post">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

<?php require page('includes/footer') ?>
