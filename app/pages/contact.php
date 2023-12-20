<?php require page('includes/header')?>


	<div class="m-2">
	<p>Contact us</p>
	<form action="process_contact_form.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        
        <button type="submit">Submit</button>
    </form>
<?php require page('includes/footer')?>