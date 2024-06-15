<?php session_start() ?>
<?php if(isset($_SESSION['user'])):?>
die();
<?php endif; ?>
<div class="container">
    <div class="page-content">
        <div class="container-form">
            <div class="page-title">
                <h1>Заказ</h1>
            </div>
            <form method="post" action="lib/order.php">
                <input type="hidden" name="user_id" value="<?=$_SESSION['user_id']?>">
                <input type="hidden" name="user" value="<?=$_SESSION['user']?>">
                <input type="hidden" name="name" value="<?=$_SESSION['name']?>">
                <div class="form-field">
                    <label for="product">Товар</label>
                    <input id="product" type="text" name="product" placeholder="Наименование товара" required>
                </div>
                <div class="form-field">
                    <label for="qty">Количество</label>
                    <input id="qty" type="number" name="qty" required value="1">
                </div>
                <div class="form-field">
                    <label for="comment">Комментарий к заказу</label>
                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                </div>
                <div class="form-action">
                    <button type="submit">Отправить заказ</button>
                </div>
            </form>
        </div>
    </div>
</div>

