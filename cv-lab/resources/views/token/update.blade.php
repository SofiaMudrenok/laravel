<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-4 border border-gray-300 rounded-md">
        <p class="text-center">
            <span class="text-lg">{{$token}}</span>
        </p>
        <a href="{{ url()->previous() }}" class="block mt-4 text-center">
            <- Back
        </a>
    </div>
</div>
