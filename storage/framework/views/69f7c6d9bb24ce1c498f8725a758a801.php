<form action="<?php echo e(route('sendEmail')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <table class="partner_table">
        <tr>
            <th><label for="name">Name:</label></th>
            <th><label for="email">Email:</label></th>
            <th><label for="phone">Phone Number:</label></th>
            <th><label for="organization">Organization:</label></th>
        </tr>
        <tr>
            <td><input type="text" id="name" name="name" class="partner_form" style="height:40px" placeholder="Name" required></td>
            <td><input type="email" id="email" name="email" class="partner_form" style="height:40px" placeholder="Email" required></td>
            <td><input type="tel" id="phone" name="phone" class="partner_form" style="height:40px" placeholder="Phone Number" required></td>
            <td><input type="text" id="organization" class="partner_form" style="height:40px" placeholder="Organisation" name="organization"></td>
        </tr>
        <tr>
            <th><label for="message">Message:</label></th>
        </tr>
        <tr>
            <td><textarea id="message2" name="message2" class="partner_form" style="height: 90px" placeholder="Message" required></textarea></td>
        </tr>
        <tr>
            <td><input type="file" name="attachment" required></td>
        </tr>
    </table>

    <input type="submit" value="Submit">
</form>
<?php /**PATH D:\projects\Laravel\Symfonymailer\resources\views/career_opportunities.blade.php ENDPATH**/ ?>