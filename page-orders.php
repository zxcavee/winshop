<?php
    session_start();
    include('./lib/db.php');
    
    // Проверка наличия GET-параметра user_id для фильтрации
    $user_id_filter = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;
    
    // Обновленный запрос для получения заказов с именами пользователей
    $sql = "SELECT orders.id, users.id AS user_id, users.name AS user_name, orders.product, orders.qty, orders.comment, orders.date
        FROM orders
        JOIN users ON orders.user_id = users.id";
    
    // Добавление условия фильтрации, если указан user_id
    if ($user_id_filter > 0) {
        $sql .= " WHERE orders.user_id = $user_id_filter";
    }
    
    $rows = getDBByQuery($sql);
?>
<div class="container">
    <div class="page-content">
        <div class="container-table">
            <div class="page-title">
                <h1>Все заказы</h1>
            </div>
            <?php if(!isset($_SESSION['user'])):?>
                <div class="page-text">
                    <p>Страница доступна только для авторизованных пользователей.</p>
                </div>
            <?php else: ?>
                <div class="page-text">
                    <?php if (count($rows) > 0): ?>
                        <div class="table-wrapper">
                            <table class="table-a">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Пользователь</th>
                                    <th>Товар</th>
                                    <th>Кол-во</th>
                                    <th>Комментарий</th>
                                    <th>Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($rows as $row): ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td>
                                            <a href="?page=page-orders&user_id=<?= $row['user_id'] ?>">
                                                <?= $row['user_name'] ?>
                                            </a>
                                        </td>
                                        <td><?= $row['product'] ?></td>
                                        <td><?= $row['qty'] ?></td>
                                        <td><?= $row['comment'] ?></td>
                                        <td><?= $row['date'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <p>Нет данных для отображения.</p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
