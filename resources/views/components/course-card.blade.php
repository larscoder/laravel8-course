<div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
    <a href="{{ route('course', $course) }}">
        <img src="{{ $course->image }}" alt="{{ $course->name }}" class="rounded-md mb-2">
        <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
        <p class="text-md text-gray-500">{{ $course->excerpt }}</p>
        <img
            src="{{ $course->user->avatar }}"
            alt="{{ $course->user->name }}"
            class="rounded-full mt-4 mx-auto h16 w-16"
        >
    </a>
</div>