
  
  <!-- Modal -->
  <form id="customerForm" action="#" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalLabel">Request Quote</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
                    </div>

                    <div class="mb-3">
                        <label for="serviceOption" class="form-label">Service Option:</label>
                        <select class="form-select" id="serviceOption" name="serviceOption" required>
                            <option value="" selected disabled>Select a service option</option>
                            <option value="Networking & Digital Securit">Networking & Digital Security</option>
                            <option value="Graphic Design & Publish Printing">Graphic Design & Publish Printing</option>
                            <option value="Web Design, Hosting & Digital Marketing">Web Design, Hosting & Digital Marketing</option>
                            <option value="ICT Hardware Supply, Installation & Maintenance">ICT Hardware Supply, Installation & Maintenance</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Message:</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


                                    <!-- Modal Form -->