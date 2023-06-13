<!doctype html>

<title>Laravel Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <header class="bg-gray-200 border border-black border-opacity-5 rounded-md mb-auto text-center md:flex md:justify-between md:items-center">
        <p class="text-md m-3 text-center"> Daily Notes Recorder</p>
        @if(!auth())
        <div class="mt-8 md:mt-0 flex items-center">
            <a href="/login" class="text-xs font-bold uppercase text-blue-500 mr-10">Login</a>
        </div>
        @endif
    </header>
    <section class="max-w-3xl mx-auto px-6 py-8">
        {{ $slot  }}
    </section>
    <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl mb-auto text-center fixed bottom-0 w-full">
        <p class="text-sm m-3 text-right"> &copy; Site is developed to practice laravel</p>
    </footer>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the current date and time in the user's local timezone using Carbon
        var now = new Date();
        var localDatetime = now.getFullYear() + '-' + ('0' + (now.getMonth() + 1)).slice(-2) + '-' + ('0' + now.getDate()).slice(-2) + 'T' + ('0' + now.getHours()).slice(-2) + ':' + ('0' + now.getMinutes()).slice(-2);

        // Set the value of the datetime-local input
        document.getElementById('note_datetime').value = localDatetime;
    });
</script>
</body>
