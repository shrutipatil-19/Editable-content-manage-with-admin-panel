@include('header')
<section class="event-detail">
    <div class="event-container">
        <div class="event-image">
            <img src="{{ asset('storage/' . $Event->image) }}" alt="{{ $Event->title }}">
        </div>
        <div class="event-content">
            <h1>{{ $Event->title }}</h1>
            <p class="event-description">{{ $Event->description }}</p>

            <!-- Additional Event Details -->
            <section id="projects" class="xl:mt-[112px] mt-[56px]">
                <div class="flex items-center justify-center lg:space-x-[42px] space-x-6">

                </div>
                <div class="main-container flex items-center justify-center lg:space-x-[42px] space-x-6">
                    
                    <!-- Ongoing tab -->
                    <a href="{{ route('event.details', ['id' => $Event->id, 'status' => 'Personal']) }}"
                        class="relative text-{{ $status === 'Personal' ? 'customGray' : 'customBorder' }} lg:text-xl text-base cursor-pointer {{ $status === 'Personal' ? 'active-tab' : '' }}">
                        Personal
                        @if($status === 'Personal')
                            <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>
                        @endif
                    </a>

                    <!-- Completed tab -->
                    <a href="{{ route('event.details', ['id' => $Event->id, 'status' => 'Corporate']) }}"
                        class="relative text-{{ $status === 'Corporate' ? 'customGray' : 'customBorder' }} lg:text-xl text-base cursor-pointer {{ $status === 'Corporate' ? 'active-tab' : '' }}">
                        Corporate
                    </a>
                    <a href="{{ route('event.details', ['id' => $Event->id, 'status' => 'Social']) }}"
                        class="relative text-{{ $status === 'Social' ? 'customGray' : 'customBorder' }} lg:text-xl text-base cursor-pointer {{ $status === 'Social' ? 'active-tab' : '' }}">
                        Social 
                    </a>
                </div>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-y-10 lg:gap-10 lg:mt-0 mt-[32px] lg:mb-0 mb-3 lg:py-[42px]">
                    @foreach ($projects as $key => $project)
                        @if ($project->status === $status)
                            <div class="group relative">
                                <!-- Project Content -->
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="features-section">
                    <div class="features-container">
                        @foreach ($projects as $key => $project)
                            <div class="feature-box">
                                <!-- <img src="https://pixydrops.com/codesk/assets/images/why-codesk-1.jpg" alt="Be in the best locations"> -->
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->location }}">
                                <h3>{{ $project->title }}</h3>
                                <!-- <p>{{ $project->description }}</p> -->
                                <p>{{ Str::limit($project->description, 196) }}</p>
                                <a href="{{ route('personalevent.details', ['id' => $project->id]) }}" class="learn-more">Learn More →</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

<style>
    .event-image {
        max-width: 100vw;
        /* min-height: 400px; */
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .event-detail {
        display: flex;
        flex-direction: column;
        padding: 20px;
        margin-top: 100px;
    }

    .event-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        flex-direction: column;
    }


    .event-content {
        width: 100%;
        margin-top: 40px;
    }

    .event-content h1 {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .event-content .event-description {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .register-button {
        display: inline-block;
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
    }

    .register-button:hover {
        background-color: #0056b3;
    }

    .related-events {
        margin-top: 40px;
    }

    .related-event-item {
        margin-bottom: 20px;
    }

    .related-event-item h4 {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .related-event-item a {
        text-decoration: none;
        color: #007BFF;
    }

    .related-event-item a:hover {
        text-decoration: underline;
    }

    /* who is best section start */
    .features-section {
        text-align: center;
        padding: 20px 0px 20px 0px;
    }

    .features-section .material-symbols-outlined {
        color: hsl(220, 48%, 28%) !important;
        font-size: 2rem !important;
    }

    .features-section h2 {
        font-size: 2.5rem;
        margin-bottom: 44px;
        color: hsl(220, 48%, 28%);
    }

    .features-section p {
        margin: 28px 0px;
    }

    .features-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .feature-box {
        width: 30%;
        /*padding: 20px;*/
        text-align: left;
        transition: transform 0.3s ease;
    }

    .feature-box:hover {
        transform: translateY(-10px);
    }

    .feature-box img {
        width: 100%;
        height: auto;
    }

    .feature-box h3 {
        color: #666;
        font-size: 1.5rem;
        margin: 20px 0 10px;
    }

    .feature-box p {
        color: #7a7a7a;
        font-size: 1rem;
        line-height: 1.5;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
        .feature-box {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        .feature-box {
            width: 100%;
            margin-bottom: 20px;
        }

        .features-container {
            flex-direction: column;
            align-items: center;
        }

        .features-section {
            text-align: center;
            padding: 50px 20px 50px 20px;
        }
    }

    .main-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main-container a {
        padding: 1rem;
        font-size: 1.3rem;
        font-weight: 400;
        color: #333;
    }

    /* Add this to your stylesheet */
    .active-tab {
        color: hsl(220, 48%, 28%) !important;
        /* Or any other color for the active tab */
        font-weight: bold;
        border-bottom: 2px solid hsl(220, 48%, 28%);
        /* Example underline */
    }

    /* who is best section end */
</style>

@include('footer')
<script>
    document.querySelectorAll('.main-container a').forEach(tab => {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.main-container a').forEach(tab => {
                tab.classList.remove('active-tab');  // Remove 'active' class from all tabs
            });
            this.classList.add('active-tab');  // Add 'active' class to the clicked tab
        });
    });

</script>