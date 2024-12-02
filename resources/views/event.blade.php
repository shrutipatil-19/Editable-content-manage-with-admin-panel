@include('header')
<style>
    /* Services section */
.services {
    padding: 80px 40px;
    background-color: #f9f9f9;
    /* margin-top: 100px; */
    max-width: 1240px;
    margin: 100px auto;
}

.service-item {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-bottom: 40px;
    /* background-color: #fff; */
    /* border-radius: 10px; */
    overflow: hidden;
    /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
}

/* Image styling */
.service-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.service-image {
    flex: 2;
    max-width: 459px;
}

/* Content styling */
.service-content {
    flex: 1.5;
    /* padding: 20px 50px; */
}

.service-content h2 {
    margin-top: 0;
    color: #333;
    font-size: 24px;
}

.service-content p {
    margin: 25px 0;
    color: #555;
}

.learn-more {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

.learn-more:hover {
    text-decoration: underline;
}
.service-item .right{
    padding-left: 50px;
}
.service-item .left{
    padding-right: 50px;
}
/* Responsive adjustments */
@media (max-width: 768px) {
    .service-item {
        flex-direction: column;
    }

    .service-image {
        max-height: 200px;
        overflow: hidden;
    }
}
.btn{
    color: black;
}

</style>
<section class="services">
    @forelse ($Events as $key => $Event)
        <div class="service-item">
            @if ($key % 2 === 0)
                <div class="service-image">
                    <img src="{{ asset('storage/' . $Event->image) }}" alt="{{ $Event->title }}">
                </div>
                <div class="service-content right">
                  
                    <h2>{{ $Event->title }}</h2>
                    <p>{{ Str::limit($Event->description, 196) }}</p>
                    <a href="{{ route('event.details', ['id' => $Event->id]) }}" class="learn-more">Learn More →</a>

                </div>
            @else
                <div class="service-content left">
                    <h2>{{ $Event->title }}</h2>
                    <p>{{ Str::limit($Event->description, 196) }}</p>
                    <a href="{{ route('event.details', ['id' => $Event->id]) }}" class="learn-more">Learn More →</a>

                </div>
                <div class="service-image">
                    <img src="{{ asset('storage/' . $Event->image) }}" alt="{{ $Event->title }}">
                </div>
            @endif
        </div>
    @empty
        <p>No events available.</p>
    @endforelse
</section>


    @include('footer')