<section class='contact-us-form'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="contact-image">
                    <img src="<?= $images ?>contact1.png" alt="<?= $name ?>" class='img-fluid' />   
                </div>
            </div>
            <div class="col-6">
                <div class="contactForm">
                    <form class="row" method="post" id="formId" action="<?= $_SERVER['PHP_SELF'] ?>">
                        <div class="col-12">
                            <input type="hidden" name='servicesName' value='' id='servicesName' />
                            <label for="inputName" class="form-label">Your Name</label>
                            <input type="text" name='fname' class="form-control" id="inputName">
                        </div>
                        <div class="col-12">
                            <label for="inpuEmail" class="form-label">Email Address</label>
                            <input type="email" name='email' class="form-control" id="inpuEmail">
                        </div>
                        <div class="col-12">
                            <label for="inpuMessage"  class="form-label">Project Description</label>
                            <textarea class="form-control" id="Message" name='message'></textarea>
                        </div>
                        <input type="hidden" id="token_generate" name="token_generate">
                        <div class="col-12">                                        
                            <input type="submit" name='Submit' class="form-control" id="submitBtn">
                        </div>
                    </form>
                    <div class="formSuccess"></div>
                </div>
            </div>
            <div class="col-3">
                <div class="contact-image"> 
                    <img src="<?= $images ?>contact2.png" alt="<?= $name ?>" class='img-fluid' />
                </div>
            </div>
        </div>
    </div>
</section>