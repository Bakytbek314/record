<section class="start_block">
    <div class="start_block_title">
        <h1>Становись рекордсменом вместе с нами!</h1>
    </div>
    <div class="start_block_form">
        <form action="/request" method="post">
            @csrf
            <h4>Заполни форму и мы свяжемся с тобой</h4>
            <input type="text" name="name" placeholder="Имя" required>
            <input type="tel" name="phone" placeholder="Телефон" required>
            <button type="submit">Хочу записаться</button>
        </form>
    </div>
</section>

<style>
    .start_block {
        width: 100%;
        background-color: rgb(90 167 247);
        color: #fff;
        border-radius: 30px;
        padding: 40px 50px;
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 50px;
    }

    .start_block_title {
        width: 55%;
    }
    .start_block_title h1 {
        font-size: 64px;
    }

    .start_block_form {
        width: 45%;
        height: 100%;
        border-radius: 24px;
        background-color: #fff;
        color: #000;
    }

    .start_block_form form {
        width: 100%;
        height: 100%;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 30px;
    }

    .start_block_form form input {
        padding: 20px 10px;
        border-radius: 12px;
        border: none;
        background-color: #eee;
    }
    .start_block_form form button {
        padding: 16px;
        border-radius: 12px;
        border: none;
        background-color: #111;
        color: #fff;
        font-size: 22px;
    }
</style>