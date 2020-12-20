@section('title', 'Feedback')

<div class="bg-white bg-opacity-25 text-center h-screen flex justify-center">
    <div class="mt-24 flex flex-col items-center">
        <img src="{{ asset("feedback.png") }}" alt="" class="w-80 h-80">
        <h1 class="font-black text-2xl mt-3">Thank you for registering to E-TAP</h1>
        <span>You will receive a message once your provider applications approved!</span>

        <a href="{{ route('home') }}" class="mt-10 py-3 px-10 bg-blue-500 rounded-full text-white hover:bg-blue-400 hover:shadow">Back to Home</a>
    </div>
</div>
