<x-layout>
    <x-slot:body>
        <div class="container py-3 bg-light">
            <div class="p-5 mb-4 bg-light bg-light border rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Fitness Plans</h1>
                    <p class="col-md-8 fs-4">Our personalized workout and eating plans are designed to help users reach
                        their fitness goals effectively and efficiently. These plans are based on individual needs and
                        goals, ensuring that users get the most out of their fitness journey.</p>
                    <button class="btn btn-primary btn-lg">Example button</button>
                </div>
            </div>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-dark rounded-3">
                        <h2>Subscriptions!</h2>
                        <p>Our ToKa Blue membership gives you access to all of our state-of-the-art equipment and
                            personal training options. Looking for even more, upgrade to our ToKa Blue+ membership for
                            exclusive access to premium amenities and additional
                            personal training sessions. Join ToKa Fitness today and start your journey to a healthier,
                            happier you. </p>
                        <a class="btn btn-outline-light mt-3 mb-0" href="{{ url('subscriptions') }}">
                            View Subscriptions</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Social Page</h2>
                        <p>This page provides a community of like-minded individuals who can support and motivate each
                            other. Whether you are a beginner or an experienced fitness enthusiast, the ToKa Fitness
                            social page offers valuable resources and a supportive community to help you reach your
                            fitness goals.</p>
                        <a class="btn btn-outline-primary mt-3 mb-0" href="{{ url('social') }}">View Social Page</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:body>
</x-layout>
