<div id="<?= $id ?>" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2><?= $data['h2'] ?></h2>
                <p><?= $data['p'] ?></p>
                <p><?= $data['address'] ?></p>
                <p><?= '<a href="mailto:' . $data['email'] . '">' . $data['email'] . '</a>' ?></p>
                <p><?= '<a href="tel:' . $data['phone'] . '">' . $data['phone'] . '</a>' ?></p>
            </div>
            <div class="col-md-6 col-md-push-1">
                <form action="#">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="msg" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-md">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>