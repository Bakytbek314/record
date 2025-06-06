{{-- @php
$teachers = [
[
'name' => 'Мухаммад Алиев',
'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi mollitia tempora aperiam veritatis qui
facere
quaerat quo earum nisi voluptate?',
'lesson' => 'Математика',
'image' => 'images/teacher1.png'
],
[
'name' => 'Муса Айдарович',
'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi mollitia tempora aperiam veritatis qui
facere
quaerat quo earum ',
'lesson' => 'Физика',
'image' => 'images/teacher1.png'
],
[
'name' => 'Нух Селов',
'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi mollitia tempora aperiam veritatis qui
facere
quaerat quo earum nisi voluptate? judjk',
'lesson' => 'Физика',
'image' => 'images/teacher1.png'
],
[
'name' => 'Юсуф Сталинов',
'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi mollitia tempora aperiam veritatis qui
facere
quaerat quo earum nisi ',
'lesson' => 'Физика',
'image' => 'images/teacher1.png'
],
[
'name' => 'Ибрагим',
'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi mollitia tempora aperiam veritatis qui
facere
quaerat quo earum nisi voluptate?',
'lesson' => 'Физика',
'image' => 'images/teacher1.png'
],
[
'name' => 'Иса Кудаев',
'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi mollitia tempora aperiam veritatis qui
facere
quaerat quo earum nisi voluptate?',
'lesson' => 'Физика',
'image' => 'images/teacher1.png'
],
];
@endphp --}}

<section class="teacher_block" id="teachers">
    @foreach($teachers as $teacher)
        <div class="teacher_card">
            <div>
                <h4>{{ $teacher['name'] }}</h4>
                <h6>
                    <span>{{ $teacher['position'] }}</span>
                </h6>
            </div>
            <p>{{ $teacher['description'] }}</p>
            
            @if ($teacher->image)
                <img src="{{ asset('storage/' . $teacher->image) }}" class="card-img-top" alt="{{ $teacher->name }}">
            @else
                <img src="https://via.placeholder.com/300x200?text=Нет+изображения" class="card-img-top" alt="Нет изображения">
            @endif
        </div>
    @endforeach
</section>

<style>
    .teacher_block {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        row-gap: 30px;
        margin-top: 50px;
    }

    .teacher_card {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 40px;
        width: 400px;
        height: 400px;
        padding: 30px 20px;
        background-color: rgb(237 103 114);
        border-radius: 24px;
    }

    .teacher_card p {
        width: 45%;
    }

    .teacher_card img {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 220px;
        object-fit: cover;
    }

    .teacher_card span {
        border-radius: 100px;
        padding: 5px 8px;
        background-color: #fff9;
    }
</style>