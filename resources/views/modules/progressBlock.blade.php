<section class="progress_block">
    <div class="progress_card">
        <h5>7 Золотых сертификатов</h5>
        <img src="{{ asset('icons/medal.svg') }}" alt="">
    </div>
    <div class="progress_card">
        <h5>Более 200 учеников получившие 200+ баллов</h5>
        <img src="{{ asset('icons/cup.svg') }}" alt="">
    </div>
    <div class="progress_card">
        <h5>Самые эффективные ОРТ курсы</h5>
        <img src="{{ asset('icons/rocket.svg') }}" alt="">
    </div>
</section>

<style>
    .progress_block {
        width: 100%;
        border-radius: 30px;
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 50px;
        padding: 40px 50px;
        margin-top: 50px;
    }

    .progress_card {
        width: 100%;
        height: 170px;
        padding: 20px;
        border-radius: 24px;
        background-color: rgb(246 246 246);
        position: relative;
        display: flex;
        align-items: center;
    }

    .progress_card img {
        position: absolute;
        right: 0;
    }
    
    .progress_card h5 {
        width: 70%;
    }
</style>