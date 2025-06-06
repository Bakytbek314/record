@php
$courses = [
    ['title' => 'Русский язык', 'price' => '3000с', 'image' => 'images/record.jpg'],
    ['title' => 'Математика', 'price' => '3500с', 'image' => 'images/record.jpg'],
    ['title' => 'Английский язык', 'price' => '3200с', 'image' => 'images/record.jpg'],
    ['title' => 'Химия', 'price' => '3500с', 'image' => 'images/record.jpg'],
    ['title' => 'Физика', 'price' => '3200с', 'image' => 'images/record.jpg'],
    ['title' => 'Биология', 'price' => '3500с', 'image' => 'images/record.jpg'],
    ['title' => 'История', 'price' => '3200с', 'image' => 'images/record.jpg'],
];
@endphp

<section class="courses_block" id="courses">
    @foreach($courses as $course)
    <div class="courses_card">
        <img src="{{ asset($course['image']) }}" alt="{{ $course['title'] }}">
        <div>
            <h5>{{ $course['title'] }}</h5>
            <h6>{{ $course['price'] }}/мес</h6>
        </div>
    </div>
    @endforeach
</section>

<style>
    .courses_block {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        row-gap: 30px;
        margin-top: 50px;
    }

    .courses_card {
        width: 280px;
        display: flex;
        flex-direction: column;
        gap: 20px;
        border: 1px solid #fff;
        border-radius: 24px;
        padding-bottom: 10px;
    }

    .courses_card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 24px;
    }

</style>