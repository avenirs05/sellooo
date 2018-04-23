<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="../thank_you.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                  
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" placeholder="Введите ваше имя" name="name">
                    </div>
                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="text" class="phone-field form-control" placeholder="Введите ваше имя" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Введите ваш email" name="email" required>
                    </div> 
                    <div class="form-group">
                        <label>Сообщение</label>
                        <textarea class="form-control" rows="3" placeholder="Введите сообщение" name="message"></textarea>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button ml-auto mr-auto" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>