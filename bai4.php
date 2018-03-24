

<html>
    <meta charset="UTF-8">
    <form action="menu.php"  method="POST">

        <h4>Món Khai vị</h4>
        <select  name="khaivi[]" multiple size="4">
            <option value="Gỏi ngó sen">Gỏi ngó sen</option>
            <option value="Salat Cá ngừ">Salad Cá ngừ</option>
            <option value="Bò trộn rau thơm">Bò trộn rau thơm</option>
            <option value="Thịt nguội">Thịt nguội</option>
        </select>

        <h4>Món Chính</h4>
        <select  name="monchinh[]" multiple size="4">
            <option value="Bò hầm">Bò hầm</option>
            <option value="Cá chẽm sốt cà">Cá chẽm sốt cà</option>
            <option value="Tôm rang muối">Tôm rang muối</option>
            <option value="Cua sốt me">Cua sốt me</option>
        </select>


        <h4>Món Tráng Miệng</h4>
        <select  name="trangmieng[]" multiple size="4">
            <option value="Chè hạt sen">Chè hạt sen</option>
            <option value="Bánh flan">Bánh flan</option>
            <option value="Rau câu">Rau câu</option>
        </select>

        <br/>
        <input type="submit">
    </form>
</html>