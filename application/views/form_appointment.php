<div class="container contact-us-container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-us">
                    <h2>Contacte-Nos</h2>
                    <p>Introduza os seus dados no formulário abaixo, e entraremos em contacto consigo logo que possivel</p>
                    
                    
                    <form name="appointment" action=""  method="post">
                        <div class="form-group">
                            <div class="name">
                                <label for="">Nome</label>
                                <?php echo form_error('name'); ?>       
                            </div>
                            <div class="name-input">
                                <input type="text" name="name" >      
                            </div>
                            <div class="email">
                                <label for="">Email</label>
                                <?php echo form_error('email'); ?>
                      
                            </div>
                            <div class="email-input">
                                <input type="text" name="email">                       
                            </div>
                            <div class="telephone">
                                <label for="">Telefone</label>
                                <?php echo form_error('Telefone'); ?>
                                
                            </div>
                            <div class="telephone-input" >
                                <input type="text" name="Telefone">
                            </div>
                            <div class="message">
                                <label for="">Mensagem</label>
                                <?php echo form_error('message'); ?>

                                
                            </div>
                            <div class="message-textarea">
                                <textarea name="message" id="" cols="22" rows="5"></textarea>
                                
                            </div>
                    
                            <div class="submit-button" button>
                                <input type="submit" class="btn btn-lg submit-button" value="Submeter">
                            </div>
                            
                            <div class="hide-direction">
                                <label for="" class="hide-map map-button">esconder onde estamos</label>
                                <label for="" class="show-map map-button hidden id="submitRequest" ">mostrar onde estamos</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>